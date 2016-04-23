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
        $query->bindParam(":code", $course->code);
        $query->bindParam(":name", $course->name);
        $query->bindParam(":credit", $course->credit);
        $query->bindValue(":prereq", $course->prereq);
        $query->bindValue(":exclu", $course->exclude);
        $query->bindValue(":attri", implode('/sep/', $course->attrib));
        $query->bindParam(":precode", $course->pre_code);
        $query->bindParam(":descript", $course->descript);
        $query->bindParam(":match", $course->need_match);
        $query->execute();
    }
}
