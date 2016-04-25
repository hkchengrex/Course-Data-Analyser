<?php

include_once ('../lib/jpgraph/jpgraph.php');
include_once ('../lib/jpgraph/jpgraph_line.php');
include_once ('../lib/jpgraph/jpgraph_pie.php');
include_once ('../shar/DataBase.php');

$db_helper = new DataBase('database.db');

if (empty($_REQUEST['code'])){
    die ('<h1>NO CODE INPUT</h1>');
}else{
    $course_code = $_REQUEST['code'];
}

if (empty($_REQUEST['n'])){
    die ('<h1>NO NATURE INPUT</h1>');
}else{
    $nature = $_REQUEST['n'];
}

if (empty($_REQUEST['y'])){
    die ('<h1>NO YEAR INPUT</h1>');
}else{
    $year = $_REQUEST['y'];
}

/** @var Course $course */
$course = $db_helper->getCourse($course_code);
$sections = $db_helper->getSections($course_code);

$enroll_parts = array();
$name_parts = array();

foreach ($sections as $section){
    /** @var Section $section */
    if ($section->nature===$nature){
        $query_result = $db_helper->query(<<<select_data
SELECT * FROM DATA WHERE section_id = $section->id and year=$year
select_data
        );
        $max_time = 0;
        $curr_enroll = 0;
        while ($row = $query_result->fetchArray()){
            if ($row['time']>$max_time){
                $max_time = $row['time'];
                $curr_enroll = $row['enroll'];
            }
        }
        array_push($name_parts, $section->nature.$section->match_id."\n%.1f%%");
        array_push($enroll_parts, $curr_enroll);
    }
}

$graph = new PieGraph(300, 300);

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->SetAntiAliasing(true);

switch ($nature){
    case ('L'):
        $title = 'Lecture';
        break;
    case ('LA'):
        $title = 'Labs';
        break;
    case ('T'):
        $title = 'Tutorials';
        break;
    case ('R'):
        $title = 'Researches';
        break;
    default:
        $title = 'Error';
        break;
}

$graph->title->Set($title);
$graph->SetBox(false);

$pieplot = new PiePlot($enroll_parts);

$graph->Add($pieplot);
$pieplot->SetLabels($name_parts);

// Output line
$graph->Stroke();

$db_helper->close();