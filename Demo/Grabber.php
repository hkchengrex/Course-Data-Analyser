<?php

/**
 * Created by PhpStorm.
 * User: Samson
 * Date: 22/4/2016
 * Time: 23:27
 */
class Grabber{

    public $page_string="public variable";
    public function __construct(){
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }
    public function __destruct() {    
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }
    public function __toString() {
        echo "Using the toString method: ";
        return $this->getname();
    }
        public function rename($name) {
        $this->page_string= $name;
    }
    public function getname() {
        return $this->page_string;
    }

    public function grabber_get() {
        $newfile= fopen();
    }
    
    public function read_file(){
        $demo_data= fopen( "example001.txt", "r" ) or exit("Unable to
open file");
        $linenum = 0;
        $lines = array();
        while (!feof($demo_data))
        {
            $line = fgets($demo_data);
            array_push($lines, $line);
            $linenum++;
            #echo "$linenum : $line <br>";
        }
        #print_r($lines);
        $big_course_array=array();
        $course_array = array();

        for ($i=0;$i<$linenum;$i++) {
            #print_r($lines[$i]);
            if (strpos($lines[$i], 'null') !== false) {
                #echo "Yes<br>";
                array_push($big_course_array,$course_array);
                unset($course_array);
                $course_array= array();
            }
            elseif ((strpos($lines[$i], "Enrol") !== false)|| (strpos($lines[$i], "#NUM!") !== false)
                ||(strpos($lines[$i], "#VALUE!")!== false)) {

            }
            else {
                #echo "No<br>";
                array_push($course_array,$lines[$i]);
            }
        }
        print_r($big_course_array);
        fclose($demo_data);
    }




}