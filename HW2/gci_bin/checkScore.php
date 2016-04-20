#!/usr/local/bin/php

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>HW2 Online Score checking result
</h1>
<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<table>
<?php

function makeAscSortFunction($field){
    $code = "return strnatcmp(\$a[$field], \$b[$field]);";
    return create_function('$a,$b', $code);
}
function makeDesSortFunction($field){
    $code = "return strnatcmp(\$a[$field], \$b[$field]);";
    return create_function('$b,$a', $code);
}

$order = 0;
$line_array=array();
$Stuid=$_GET["q"];



if ($_GET["q"]=="2aF4b9") {
    echo "Enter into instructor mode" ;
}



foreach (file("../grade.csv") as $line) {

    list($Sid, $name, $HW1, $HW2, $Overall) = explode(",", $line);
    array_push($line_array, $line);
    #echo "$Sid, $name, $HW1, $HW2, $Overall\n";
    if (($_GET["q"]=="001") || ($_GET["q"]=="002")||($_GET["q"]=="003")||($_GET["q"]=="2aF4b9")||($_GET["q"]=="004")){
        if (($Sid=="Mean")||($Sid=="Std")) {
            echo "<caption align=bottom>";
            $commonline= array($Sid, $name, $HW1, $HW2, $Overall);
            echo "$Sid = $name ";
            echo "</caption>";
        }

        elseif (($Sid=="001") && ($_GET["q"]=="001")||($Sid=="002") && ($_GET["q"]=="002")
            ||($Sid=="003") && ($_GET["q"]=="003")||($Sid=="004") && ($_GET["q"]=="004")||($Sid=="StuID")||($_GET["q"]=="2aF4b9")) {

            if (!isset($_REQUEST['orderby'])) {
                $newline = array($Sid, $name, $HW1, $HW2, $Overall);

                if ($newline[0]=="StuID") {
                    echo "<tr>";
                    $name=0;
                    foreach ($newline as $cell) {
                        if ($order==0){
                            echo "<td><a href= \"?q=$Stuid&orderby=$name&order=1\" >$cell</a></td>" ;
                        }
                        else {
                            echo "<td><a href= \"?q=$Stuid&orderby=$name&order=0\" >$cell</a></td>" ;
                        }
                        $name++;
                    }

                }
                else {
                    echo "<tr>";
                    foreach ($newline as $cell) {
                        echo "<td>" . $cell . "</td>";
                    }
                }
            }
            elseif (isset($_REQUEST['orderby'])) {
                $newline = array($Sid, $name, $HW1, $HW2, $Overall);
                if ($newline[0]=="StuID") {
                    echo "<tr>";
                    $name=0;
                    foreach ($newline as $cell) {
                        if ($order==0){
                            echo "<td><a href= \"?q=$Stuid&orderby=$name&order=1\" >$cell</a></td>" ;
                        }
                        else {
                            echo "<td><a href= \"?q=$Stuid&orderby=$name&order=0\" >$cell</a></td>" ;
                        }
                        $name++;
                    }

                }
                else {
                    if ($order==1){
                        $compare = makeDesSortFunction($_REQUEST['orderby']);
                    }
                    else {
                        $compare = makeAscSortFunction($_REQUEST['orderby']);
                    }
                    usort($line_array, $compare);

                    foreach ($line_array as $cellline) {
                        echo "<tr>";
                        list($Sid, $name, $HW1, $HW2, $Overall) = explode(",", $cellline);
                        $newnewline= array($Sid, $name, $HW1, $HW2, $Overall);
                        foreach ($newnewline as $cell) {
                            echo "<td>" . $cell . "</td>";
                        }

                    }
                }
            }
            echo "</tr>\n";
        }
    }
    else {
        echo "Wrong student id, can't find record";
        break;
    }
}
?>
</table>

</body>
</html>

