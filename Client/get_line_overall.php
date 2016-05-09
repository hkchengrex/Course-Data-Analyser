<?php

/**
 * A COMP2021 Project in HKUST
 * Author:
 *      Chan Nok Hin 20349103 nhchanaa@connect.ust.hk
 *      Cheng Ho Kei 12219689 hkchengad@connect.ust.hk
 *      Sze Ka Yau ⁠⁠⁠20348496 kyszeaa@connect.ust.hk
 */

include_once ('../lib/jpgraph/jpgraph.php');
include_once ('../lib/jpgraph/jpgraph_line.php');
include_once ('../shar/DataBase.php');
include_once ('../shar/time_to_time.php');

$db_helper = new DataBase('database.db');

if (empty($_REQUEST['code'])){
    die ('<h1>NO CODE INPUT</h1>');
}else {
    $course_code = $_REQUEST['code'];
}

if (empty($_REQUEST['y'])){
    die ('<h1>NO YEAR INPUT</h1>');
}else {
    $year = $_REQUEST['y'];
}

$sections = $db_helper->getSections($course_code);
$sections_data = array();
foreach ($sections as $section){
    /** @var Section $section */
    $section_id = $section->id;
    $section_name = $section->nature.$section->match_id;
    $query_result = $db_helper->query(<<<select_data
SELECT * FROM DATA WHERE section_id = $section_id and year = $year
select_data
);
    $enroll = array();
    $wait = array();
    $time = array();
    while ($row = $query_result->fetchArray()){
        array_push($enroll, $row['enroll']*100/$section->quota);
        array_push($wait, $row['wait']*100/$section->quota);
        array_push($time, time_to_time::toTime($row['time']));
    }
    array_push($sections_data, array($section_name, $enroll, $wait, $time));
}

$graph = new Graph(500, 400);
$graph->SetScale('textint');

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(true);

$graph->SetBox(false);

$graph->yaxis->title->Set("Occupancy (%)");

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($sections_data[0][3]);
$graph->xaxis->title->Set("Time");
$graph->xaxis->SetLabelAngle(0);
$graph->xaxis->SetTextLabelInterval(2);
$graph->xgrid->SetColor('#E3E3E3');

foreach ($sections_data as $section_data){
    $plot = new LinePlot($section_data[1]);
    $graph->Add($plot);
    $plot->SetWeight(3);
    $plot->SetStyle("solid");
    $plot->SetLegend($section_data[0]);
}

// Output line
$graph->Stroke();

$db_helper->close();