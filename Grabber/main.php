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

$data_index = 0;
if (!empty($_REQUEST['data'])){
    $data_index = $_REQUEST['data'];
}
$crawler = new Crawler($data_index);

echo "Getting..."."<br>";
$crawler->crawlerGet();
echo "Loading..."."<br><br>";
$crawler->loadClasses();

$db_helper->exec('BEGIN TRANSACTION');
if ($data_index===0) {
    foreach ($crawler->loaded_class as $course) {
        /** @var Course $course */
        $db_helper->addCourse($course);
        foreach ($course->sections as $section){
            $db_helper->addDataSet($section, $data_index+1);
        }
        $course->print_out();
    }
}else{
    foreach ($crawler->loaded_class as $course) {
        /** @var Course $course */
        foreach ($course->sections as $section){
            $db_helper->addDataSet($section, $data_index+1);
        }
        $course->print_out();
    }
}
$db_helper->exec('COMMIT TRANSACTION');

$db_helper->close();

?>