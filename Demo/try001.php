
<?php
/**
 * Created by PhpStorm.
 * User: Samson
 * Date: 23/4/2016
 * Time: 0:22
 */
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
$big_course_array = array();
$course_array = array();
$number_array = array();
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
        $number_array = preg_split('/\s+/',$lines[$i]);
        array_push($course_array,$number_array);
        unset($number_array);
        $number_array = array();
    }
}
#$enrol = preg_split('/\s+/',$big_course_array[$i]);
#print_r($big_course_array[0][0][0]);
/* for ($i=0;$i<sizeof($big_course_array);$i++) {
    for ($n=0;$n<sizeof($big_course_array[$i]);$n++){
        echo "[$i][$n]";
        print_r($big_course_array[$i][$n]);
        $enrol = preg_split('/\s+/',$big_course_array[$i][$n]);
        echo $enrol[0];
        echo "<br>";
    }

} */


fclose($demo_data);
