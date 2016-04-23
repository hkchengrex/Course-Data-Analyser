<?php // content="text/plain; charset=utf-8"
include_once('./lib/jpgraph/jpgraph.php');
include_once('./lib/jpgraph/jpgraph_line.php');

$datay1 = array(20,15,23,15, 34, 643);

// Setup the graph
$graph = new Graph(500,900);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(true);
$graph->title->Set('COMP 2021');
$graph->SetBox(false);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);
$graph->yaxis->title->Set("People");

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('10:30','12:00','1:30','3:00'));
$graph->xaxis->title->Set("Time");
$graph->xgrid->SetColor('#E3E3E3');

$graph->legend->Hide(true);

// Create the first line
$p1 = new LinePlot($datay1);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Line 1');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>
