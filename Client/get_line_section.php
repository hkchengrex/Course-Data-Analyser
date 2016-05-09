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
    $section_id = $_REQUEST['code'];
}

if (empty($_REQUEST['y'])){
    die ('<h1>NO YEAR INPUT</h1>');
}else {
    $year = $_REQUEST['y'];
}

$section = $db_helper->getSection($section_id);

/** @var Section $section */
$section_name = $section->nature.$section->match_id;
$query_result = $db_helper->query(<<<select_data
SELECT * FROM DATA WHERE section_id = $section_id and year = $year
select_data
);

$this_enroll = array();
$this_wait = array();
$this_time = array();
while ($row = $query_result->fetchArray()){
    array_push($this_enroll, $row['enroll']);
    array_push($this_wait, $row['wait']);
    array_push($this_time, time_to_time::toTime($row['time']));
}

$last_year = $year-1;
$query_result = $db_helper->query(<<<select_data
SELECT * FROM DATA WHERE section_id = $section_id and year = $last_year
select_data
);

$last_enroll = array();
$last_wait = array();
$last_time = array();
while ($row = $query_result->fetchArray()){
    array_push($last_enroll, $row['enroll']);
    array_push($last_wait, $row['wait']);
    array_push($last_time, time_to_time::toTime($row['time']));
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
$graph->xaxis->SetTickLabels($last_time);
$graph->xaxis->title->Set("Time");
$graph->xaxis->SetLabelAngle(0);
$graph->xaxis->SetTextLabelInterval(2);
$graph->xgrid->SetColor('#E3E3E3');

$e_plot = new LinePlot($this_enroll);
$graph->Add($e_plot);
$e_plot->SetStyle("solid");
$e_plot->SetLegend("Enroll");

$l_plot = new LinePlot($last_enroll);
$graph->Add($l_plot);
$l_plot->SetStyle("solid");
$l_plot->SetLegend("Last year");

$w_plot = new LinePlot($this_wait);
$graph->Add($w_plot);
$w_plot->SetStyle("solid");
$w_plot->SetLegend("Wait");

// Output line
$graph->Stroke();

$db_helper->close();