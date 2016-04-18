#!/usr/local/bin/php 

<?php

function makeAscSortFunction($field){
	$code = "return strnatcmp(\$a[$field], \$b[$field]);";
 	return create_function('$a,$b', $code);
}

function makeDesSortFunction($field){
	$code = "return strnatcmp(\$a[$field], \$b[$field]);";
 	return create_function('$b,$a', $code);
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Query: ".$_REQUEST['stdid']."\n";
if (isset($_REQUEST['orderby'])){
	echo "Orderby: ".$_REQUEST['orderby']."\n";
}else{
	echo "Orderby: None\n";
}

$order = 0;
if (isset($_REQUEST['order'])){
	echo "Order: ".$_REQUEST['order']."\n";
	$order = $_REQUEST['order'];
}else{
	echo "Order: None\n";
}

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
$found = false;

if ($stdid == "2aF4b9"){
	$found = true;
	echo "<h1>Insturctor Mode</h1>";
	echo "<table style=\"width: 60%; border-collapse: collapse; border: 1px solid black;\">\n";

		echo "<tr style=\"background-color: #4CAFCF; border: 1px solid black;\">";
		$another_index = 0;
		foreach ($colume_name as $value) {
			if ($order == 0){
				echo "<td><a href=\"?stdid=$stdid&orderby=$another_index&order=1\">$value</a></td>";
			}else{
				echo "<td><a href=\"?stdid=$stdid&orderby=$another_index&order=0\">$value</a></td>";
			}
			$another_index++;
		}
		echo "</tr>";

		$pointer = 0;
		$records = array_slice($lines, 1, $total_line-3);
		$records_array = array();
		while ($pointer<($total_line-3)){
			$items = explode(',', $records[$pointer]);
			array_push($records_array, $items);
			if (!isset($_REQUEST['orderby'])){
				echo "<tr style=\"border: 1px solid black;\">";
				foreach ($items as $value) {
					echo "<td>$value</td>";
				}
				echo "</tr>";
			}
			$pointer++;
		}

		if (isset($_REQUEST['orderby'])){
			if ($order == 1){
				$compare = makeDesSortFunction($_REQUEST['orderby']);
			}else{
				$compare = makeAscSortFunction($_REQUEST['orderby']);
			}
			usort($records_array, $compare);
			foreach($records_array as $row){
				echo "<tr style=\"border: 1px solid black;\">";
				foreach ($row as $value) {
					echo "<td>$value</td>";
				}
				echo "</tr>";
			}
		}

	echo "</table>\n";
}else{
	$searching = 1;
	while($searching<($total_line-2)){
		$items = explode(',', $lines[$searching]);
		if ($searching == $stdid){
			$found = true;
			echo "<h1>Your score: </h1>";
			echo "<table style=\"width: 60%; border-collapse: collapse; border: 1px solid black;\">\n";

			echo "<tr style=\"background-color: #4CAFCF; border: 1px solid black;\">";
			foreach ($colume_name as $value) {
				echo "<td>$value</td>";
			}
			echo "</tr>";

			echo "<tr style=\"border: 1px solid black;\">";
			foreach ($items as $value) {
				echo "<td>$value</td>";
			}
			echo "</tr>";

		echo "</table>\n";
			break;
		}
		$searching++;
	}
}
if ($found == true){
	echo "<h2>Average: $mean, SD: $sd</h2>";
}else{
	echo "<h1>Student ID Not Found</h1>";
}
fclose($csv);

?>