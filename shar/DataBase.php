<?php

include_once("classes.php");

class DataBase extends SQLite3{

    /**
     * Connect to the database in the specified directory.
     */
    function __construct($name){
        $this->open('../db/'.$name);
    }

    function addCourse(Course $course){
        $query = $this->prepare(
            <<<add_course_query
        INSERT OR REPLACE INTO 
                COURSES ('code', 'name', 'credit', 'prereq',
                        'exclusion', 'attribute', 'previous_code',
                        'description', 'need_matching')
                VALUES (:code, :name, :credit, :prereq, :exclu, 
                        :attri, :precode, :descript, :match);
add_course_query
);
        $query->bindValue(":code", $course->code);
        $query->bindValue(":name", $course->name);
        $query->bindValue(":credit", $course->credit);
        $query->bindValue(":prereq", $course->prereq);
        $query->bindValue(":exclu", $course->exclude);
        $query->bindValue(":attri", implode('/sep/', $course->attrib));
        $query->bindValue(":precode", $course->pre_code);
        $query->bindValue(":descript", $course->descript);
        $query->bindValue(":match", $course->need_match);
        $query->execute();

        foreach ($course->sections as $section){
            /** @var Section $section */
            $this->addSection($section, $course->code);
        }
    }

    function addSection(Section $section, $mother_code){
        $query = $this->prepare(
            <<<add_section_query
        INSERT OR REPLACE INTO 
                SECTION ('id', 'nature', 'date_time', 'room', 'quota', 'instructor_id',
                    'matching_id', 'mother_code', 'remark', 'consent')
                VALUES (:id, :nature, :date_time, :room, :quota, :instructor_id,
                        :match_id, :mother, :remark, :consent);
add_section_query
        );
        $query->bindValue(":id", $section->id);
        $query->bindValue(":nature", $section->nature);
        $query->bindValue(":date_time", $section->date_time);
        $query->bindValue(":room", $section->room);
        $query->bindValue(":quota", $section->quota);

        $instructor_ids = array();
        foreach ($section->instructor as $item){
            array_push($instructor_ids, $this->get_instructor_id($item));
        }

        $query->bindValue(":instructor_id", implode(',', $instructor_ids));
        $query->bindValue(":match_id", $section->match_id);
        $query->bindValue(":mother", $mother_code);
        $query->bindValue(":remark", $section->remark);
        $query->bindValue(":consent", $section->consent);
        $query->execute();
    }

    function get_instructor_id($name){
        $query_result = $this->query("SELECT name, id from INSTRUCTOR where name = \"$name\"");
        $row = $query_result->fetchArray();
        if ($row !== false){
            return $row['id'];
        }else{
            $query = $this->prepare("INSERT INTO INSTRUCTOR ('name') VALUES (:name)");
            $query->bindValue(":name", $name);
            $query->execute();
            return $this->lastInsertRowID();
        }
    }

    function get_sections($course_id){
        $query_result = $this->query("SELECT * FROM SECTION WHERE mother_code = \"$course_id\"");
        $sections = array();
        while($row = $query_result->fetchArray()){
            $section = new Section();
            $section->id = $row['id'];
            $section->nature = $row['nature'];
            $section->match_id = $row['matching_id'];
            $section->quota = $row['quota'];
            $section->room = $row['room'];
            $section->date_time = $row['date_time'];
            array_push($sections, $section);
        }
        return $sections;
    }
}
