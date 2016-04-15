<?php

include_once ("classes.php");

class DataBase extends SQLite3{

    /**
     * Connect to the database in the specified directory.
     */
    function __construct(){
        $this->open('./db/database.db');
    }
    
    function addCourse(Course $course){
        $query = $this->prepare("INSERT INTO COURSES ('code', 'name', 'credit') VALUES (:code, :name, :credit);");
        $query->bindParam(":code", $course->code);
        $query->bindParam(":name", $course->name);
        $query->bindParam(":credit", $course->credit);
        $query->execute();
    }
}
