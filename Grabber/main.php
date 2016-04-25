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
if (!empty($_REQUEST['d'])){
    $data_index = $_REQUEST['d'];
}

$year = 3;
if (!empty($_REQUEST['y'])){
    $year = $_REQUEST['y'];
}

$crawler = new Crawler($data_index, $year);

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
            $db_helper->addDataSet($section, $data_index+1, $year);
        }
    }
}else{
    foreach ($crawler->loaded_class as $course) {
        /** @var Course $course */
        foreach ($course->sections as $section){
            $db_helper->addDataSet($section, $data_index+1, $year);
        }
    }
}
$db_helper->exec('COMMIT TRANSACTION');

$new_year = $year+1;
$new_data = $data_index+1;

echo "This year: $year, This data: $data_index<br>";

$new_data_link = "main.php?y=$year&d=$new_data";
$new_year_link = "main.php?y=$new_year&d=0";

echo "<button onclick=\"location.href='$new_data_link'\">Next Data</button><br>";
echo "<button onclick=\"location.href='$new_year_link'\">Next Year</button><br><br>";

foreach ($crawler->loaded_class as $course){
    $course->print_out();
}

$db_helper->close();

?>