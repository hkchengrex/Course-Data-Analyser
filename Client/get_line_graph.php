<?php

include_once ('../lib/jpgraph/jpgraph.php');
include_once ('../lib/jpgraph/jpgraph_line.php');
include_once ('../shar/DataBase.php');

ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);

$db_helper = new DataBase('database.db');

if (empty($_REQUEST['code'])){
    die ('<h1>NO CODE INPUT</h1>');
}else {
    $course_code = $_REQUEST['code'];
}

$sections = $db_helper->get_sections($course_code);
$sections_data = array();
foreach ($sections as $section){
    /** @var Section $section */
    $section_id = $section->id;
    $section_name = $section->nature.$section->match_id;
    $query_result = $db_helper->query("SELECT * FROM DATA WHERE section_id = $section_id");
    $enroll = array();
    $wait = array();
    $time = array();
    while ($row = $query_result->fetchArray()){
        array_push($enroll, $row['enroll']);
        array_push($wait, $row['wait']);
        array_push($time, $row['time']);
    }
    array_push($sections_data, array($section_name, $enroll, $wait, $time));
}

$graph = new Graph(800, 500);
$graph->SetScale('textint');

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(true);

$graph->title->Set('COMP 2021');
$graph->SetBox(false);

$graph->yaxis->title->Set("People");

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($sections_data[0][3]);
$graph->xaxis->title->Set("Time");
$graph->xgrid->SetColor('#E3E3E3');

foreach ($sections_data as $section_data){
    $plot = new LinePlot($section_data[1]);
    $plot->SetColor("#6495ED");
    $plot->SetLegend($section_data[0]);
    $graph->Add($plot);
}

// Output line
$graph->Stroke();

$db_helper->close();