<?php

include_once ('../lib/jpgraph/jpgraph.php');
include_once ('../lib/jpgraph/jpgraph_line.php');
include_once ('../shar/DataBase.php');

$db_helper = new DataBase('database.db');

if (empty($_REQUEST['code'])){
    die ('<h1>NO CODE INPUT</h1>');
}else {
    $section_id = $_REQUEST['code'];
}

$section = $db_helper->getSection($section_id);

/** @var Section $section */
$section_name = $section->nature.$section->match_id;
$query_result = $db_helper->query(<<<select_data
SELECT * FROM DATA WHERE section_id = $section_id
select_data
);
$enroll = array();
$wait = array();
$time = array();
while ($row = $query_result->fetchArray()){
    array_push($enroll, $row['enroll']);
    array_push($wait, $row['wait']);
    array_push($time, $row['time']);
}

$graph = new Graph(300, 200);
$graph->SetScale('textint');

$theme_class = new UniversalTheme;
$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(true);

$graph->title->Set($section_name." ($section_id)");
$graph->SetBox(false);

$graph->yaxis->title->Set("Occupancy");

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels($time);
$graph->xaxis->title->Set("Time");
$graph->xgrid->SetColor('#E3E3E3');

$e_plot = new LinePlot($enroll);
$graph->Add($e_plot);
$e_plot->SetStyle("solid");
$e_plot->SetLegend("Enroll");

$w_plot = new LinePlot($wait);
$graph->Add($w_plot);
$w_plot->SetStyle("solid");
$w_plot->SetLegend("Wait");

// Output line
$graph->Stroke();

$db_helper->close();