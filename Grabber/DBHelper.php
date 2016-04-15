<?php

include_once ("classes.php");

class DBHelper{
    protected $db_connection;

    /**
     * Connect to the database in the specified directory.
     */
    function connect(){
        global $db_connection;
        $db_connection = sqlite_open("./db/database.db", 0666, $sql_error);
    }

    /**
     * Close the database connection.
     */
    function close(){
        global $db_conneciton;
        sqlite_close($db_conneciton);
    }
    
    function addCourse($code, $name, $credit){
        global $db_connection;
        $query = sqlite_escape_string("INSERT INTO COURSES ('code', 'name', 'credit') VALUES ($code, $name, $credit);");
        if (!sqlite_exec($db_connection, $query, $sql_error)){
            die("SQL Insert Course Error" + $sql_error);
        }
    }
}
