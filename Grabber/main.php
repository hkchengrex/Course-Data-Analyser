<?php
/**
 * A COMP2021 Project in HKUST
 * Author:
 *      Chan Nok Hin
 *      Cheng Ho Kei 12219689
 *      Sze Ka Yau
 */

include_once('../lib/simple_html_dom.php');
include_once('../shar/classes.php');
include_once('../shar/DataBase.php');
include_once ('Crawler.php');

ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);

echo "Starting..."."<br>";

$db_helper = new DataBase('database.db');
$crawler = new Crawler();

echo "Getting..."."<br>";
$crawler->crawlerGet();
echo "Loading..."."<br><br>";
$crawler->loadClasses();

foreach($crawler->loaded_class as $course){
    /** @var Course $course*/
    $db_helper->addCourse($course);
    $course->print_out();
}

$db_helper->close();

?>