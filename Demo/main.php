<?php
/**
 * Created by PhpStorm.
 * User: Samson
 * Date: 22/4/2016
 * Time: 23:15
 */

include_once('Grabber.php');

echo "Demo</br>";
$grabber= new Grabber();
$grabber->read_file();
#var_dump($grabber);
echo $grabber->page_string;
$grabber->rename("123123123");
echo $grabber->getname();
echo "</br>";
echo $grabber;

?>