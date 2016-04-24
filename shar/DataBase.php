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
            array_push($instructor_ids, $this->getInstructorId($item));
        }

        $query->bindValue(":instructor_id", implode(',', $instructor_ids));
        $query->bindValue(":match_id", $section->match_id);
        $query->bindValue(":mother", $mother_code);
        $query->bindValue(":remark", $section->remark);
        $query->bindValue(":consent", $section->consent);
        $query->execute();
    }

    function addDataSet(Section $section, $time){
        $query = $this->prepare(
            <<<add_data_query
        INSERT OR REPLACE INTO 
                DATA ('section_id', 'time', 'enroll', 'wait', 'avail')
                VALUES (:id, :time, :enroll, :wait, :avail);
add_data_query
        );
        $query->bindValue(":id", $section->id);
        $query->bindValue(":time", $time);
        $query->bindValue(":enroll", $section->enroll);
        $query->bindValue(":wait", $section->wait);
        $query->bindValue(":avail", $section->avail);
        $query->execute();
    }

    function getInstructorId($name){
        $query_result = $this->query(<<<get_instructor_id
SELECT name, id from INSTRUCTOR where name = "$name"
get_instructor_id
);
        $row = $query_result->fetchArray();
        if ($row !== false){
            return $row['id'];
        }else{
            $query = $this->prepare(<<<add_instructor_id
INSERT INTO INSTRUCTOR ('name') VALUES (:name)
add_instructor_id
);
            $query->bindValue(":name", $name);
            $query->execute();
            return $this->lastInsertRowID();
        }
    }

    function getInstructorName($id){
        $query_result = $this->query(<<<get_instructor_name
SELECT name, id from INSTRUCTOR where id = "$id"
get_instructor_name
        );
        return $query_result->fetchArray()['name'];
    }

    function getSections($course_id){
        $query_result = $this->query(<<<get_sections
SELECT * FROM SECTION WHERE mother_code = "$course_id"
get_sections
);
        $sections = array();
        while($row = $query_result->fetchArray()){
            $section = new Section();
            $section->id = $row['id'];
            $section->nature = $row['nature'];
            $section->match_id = $row['matching_id'];
            $section->quota = $row['quota'];
            $section->room = $row['room'];
            $section->date_time = $row['date_time'];
            $section->instructor = array();
            foreach (explode(',', $row['instructor_id']) as $id){
                array_push($section->instructor, $this->getInstructorName($id));
            }
            array_push($sections, $section);
        }
        return $sections;
    }

    function getSection($section_id){
        $query_result = $this->query(<<<get_section
SELECT * FROM SECTION WHERE id = "$section_id"
get_section
        );

        $section = new Section();
        while($row = $query_result->fetchArray()){
            $section->id = $row['id'];
            $section->nature = $row['nature'];
            $section->match_id = $row['matching_id'];
            $section->quota = $row['quota'];
            $section->room = $row['room'];
            $section->date_time = $row['date_time'];
            $section->instructor = array();
            foreach (explode(',', $row['instructor_id']) as $id){
                array_push($section->instructor, $this->getInstructorName($id));
            }
        }
        return $section;
    }

    function getCourses(){
        $query_result = $this->query(<<<get_courses
SELECT * FROM COURSES
get_courses
);
        $courses = array();
        while($row = $query_result->fetchArray()){
            $course = new Course();
            $course->code = $row['code'];
            $course->name = $row['name'];
            $course->credit = $row['credit'];
            $course->prereq = $row['prereq'];
            $course->exclude = $row['exclusion'];
            $course->attrib = $row['attribute'];
            $course->pre_code = $row['previous_code'];
            $course->descript = $row['description'];
            $course->need_match = $row['need_matching'];
            $course->sections = $this->getSections($course->code);
            array_push($courses, $course);
        }
        return $courses;
    }

    function getCourse($course_code){
        $query_result = $this->query(<<<get_course
SELECT * FROM COURSES WHERE code="$course_code"
get_course
);
        $course = new Course();
        while($row = $query_result->fetchArray()){
            $course->code = $row['code'];
            $course->name = $row['name'];
            $course->credit = $row['credit'];
            $course->prereq = $row['prereq'];
            $course->exclude = $row['exclusion'];
            $course->attrib = explode('/sep/', $row['attribute']);
            $course->pre_code = $row['previous_code'];
            $course->descript = $row['description'];
            $course->need_match = $row['need_matching'];
            $course->sections = $this->getSections($course->code);
        }
        return $course;
    }
}
