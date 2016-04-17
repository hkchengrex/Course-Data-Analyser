#!/usr/local/bin/php 

<?php

ini_set('display_errors', 1);
echo "Query: ".$_REQUEST['stdid'];

$stdid = $_REQUEST['stdid'];
$csv = fopen("../grade.csv", "r") or die("Cannot open file!");

$lines = array();
$total_line = 0;
while(!feof($csv)){
  array_push($lines, fgets($csv));
  $total_line++;
}

$colume_name = explode(',', $lines[0]);
$mean_line = explode(',', $lines[$total_line-2]);
$sd_line = explode(',', $lines[$total_line-1]);
$mean = $mean_line[1];
$sd = $sd_line[1];

$searching = 1;
while($searching<($total_line-2)){
	$items = explode(',', $lines[$searching]);
	if ($searching == $stdid){
	echo "<table style=\"width: 60%; border-collapse: collapse; border: 1px solid black;\">\n";

		echo"<tr style=\"background-color: #4CAFCF; border: 1px solid black;\">";
		foreach ($colume_name as $value) {
			echo "<td>$value</td>";
		}
		echo"</tr>";

		echo"<tr style=\"border: 1px solid black;\">";
		foreach ($items as $value) {
			echo "<td>$value</td>";
		}
		echo"</tr>";

	echo "</table>\n";
		break;
	}
	$searching++;
}

fclose($csv);

?>