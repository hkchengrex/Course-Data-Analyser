<?php
include_once ('../shar/DataBase.php');

$db_helper = new DataBase('database.db');
if (empty($_REQUEST['code'])){
    die ("<h1>NO CODE INPUT</h1>");
}else {
    $course = $db_helper->getCourse($_REQUEST['code']);
    $sections = $db_helper->getSections($course->code);
    $lectures = $course->getLectures();
    $labs = $course->getLabs();
    $tutorials = $course->getTuts();
    $researches = $course->getRes();
}
?>

<html>
<title>WebPage2</title>

<style type="text/css">
    body {
        background-image: url(Image/BG2.jpg);
    }
</style>

<head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans|Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Scroll.css">
</head>

<body>
<p><img src="Image/header-background.jpg" width="1303" height="70" alt="Header"></p>
<?php
echo "<br>";
echo "<h1 class='title'>$course->code - $course->name</h1>";
?>

<p>&nbsp;</p>
<div class="Container">
    <div class="Content">
        <div class="Wrapper">
            <div class="RightContent">
                <?php
                echo "<table class = 'detail' style=\"width:100%\">";
                echo "<tr><td>Credit</td><td>$course->credit</td></tr>";
                $span = count($course->attrib)+1;
                echo "<tr><td rowspan=\"$span\">Attribute</td><br>";
                foreach ($course->attrib as $item){
                    if (strcmp($item, '') == 0){
                        echo "<tr><td>None</td></tr>";
                    }else{
                        echo "<tr><td>$item</td></tr>";
                    }
                }
                echo "</tr>";

                if (strcmp($course->prereq, 'NIL') == 0){
                    echo "<tr><td>Pre-requisite</td><td>None</td></tr>";
                }else{
                    echo "<tr><td>Pre-requisite</td><td>$course->prereq</td></tr>";
                }

                if (strcmp($course->exclude, 'NIL') == 0){
                    echo "<tr><td>Exclusion</td><td>None</td></tr>";
                }else{
                    echo "<tr><td>Exclusion</td><td>$course->exclude</td></tr>";
                }


                if (strcmp($course->pre_code, 'NIL') == 0){
                    echo "<tr><td>Previous Code</td><td>None</td></tr>";
                }else{
                    echo "<tr><td>Previous Code</td><td>$course->pre_code</td></tr>";
                }

                echo "<tr><td>Description</td><td>$course->descript</td></tr>";

                echo "</table><br>";

                if (count($lectures)>0) {
                    echo "<h3 class='l_title'>Lecture: </h3>";
                    foreach ($lectures as $section) {
                        echo "<table class='lecture_table' style=\"width:80%\">";
                        echo "<tr><td colspan=\"2\"><h4>$section->nature$section->match_id($section->id)</h4></td></tr>";
                        echo "<tr><td>Time</td><td>$section->date_time</td></tr>";
                        echo "<tr><td>Room</td><td>$section->room</td></tr>";
                        echo "<tr><td>Quota</td><td>$section->quota</td></tr>";
                        echo "</table><br>";
                    }
                    echo "<br>";
                }

                if (count($labs)>0) {
                    echo "<h3 class='la_title'>Labs: </h3>";
                    foreach ($labs as $section) {
                        echo "<table class='lab_table' style=\"width:80%\">";
                        echo "<tr><td colspan=\"2\"><h4>$section->nature$section->match_id($section->id)</h4></td></tr>";
                        echo "<tr><td>Time</td><td>$section->date_time</td></tr>";
                        echo "<tr><td>Room</td><td>$section->room</td></tr>";
                        echo "<tr><td>Quota</td><td>$section->quota</td></tr>";
                        echo "</table><br>";
                    }
                    echo "<br>";
                }

                if (count($tutorials)>0) {
                    echo "<h3 class='t_title'>Tutorials: </h3>";
                    foreach ($tutorials as $section) {
                        echo "<table class='tut_table' style=\"width:80%\">";
                        echo "<tr><td colspan=\"2\"><h4>$section->nature$section->match_id($section->id)</h4></td></tr>";
                        echo "<tr><td>Time</td><td>$section->date_time</td></tr>";
                        echo "<tr><td>Room</td><td>$section->room</td></tr>";
                        echo "<tr><td>Quota</td><td>$section->quota</td></tr>";
                        echo "</table><br>";
                    }
                    echo "<br>";
                }

                if (count($researches)>0) {
                    echo "<h3 class='r_title'>Researches: </h3>";
                    foreach ($researches as $section) {
                        echo "<table class='re_table' style=\"width:80%\">";
                        echo "<tr><td colspan=\"2\"><h4>$section->nature$section->match_id($section->id)</h4></td></tr>";
                        echo "<tr><td>Time</td><td>$section->date_time</td></tr>";
                        echo "<tr><td>Room</td><td>$section->room</td></tr>";
                        echo "<tr><td>Quota</td><td>$section->quota</td></tr>";
                        echo "</table><br>";
                    }
                    echo "<br>";
                }

                ?>
            </div>
            <div class="LeftContent">
                <?php
                echo "<table class='graphs'>";
                echo "<tr><td colspan='2'><img class=\"graph\" src=\"get_line_overall.php?code=$course->code&y=4\"/></td></tr>";
                $counter = 1;
                foreach ($course->sections as $section){
                    if ($counter%2){
                        echo "<tr>";
                    }
                    echo "<td><img  class=\"graph\" src=\"get_line_section.php?code=$section->id&y=4\"/></td>";
                    if (!$counter%2){
                        echo "</tr>";
                    }
                    $counter++;
                }
                if (count($course->sections)%2){
                    echo "</tr>";
                }

                $counter = 0;
                if (count($lectures)>1) {
                    echo "<tr><td><img  class=\"graph\" src=\"get_pie_course.php?code=$course->code&n=L&y=4\"/></td>";
                    $counter++;
                }

                if ($counter===0){
                    echo "<tr>";
                }else if($counter>=2){
                    echo "</tr>";
                    $counter = 0;
                }

                if (count($labs)>1) {
                    echo "<td><img  class=\"graph\" src=\"get_pie_course.php?code=$course->code&n=LA&y=4\"/></td>";
                    $counter++;
                }

                if ($counter===0){
                    echo "<tr>";
                }else if($counter>=2){
                    echo "</tr>";
                    $counter = 0;
                }

                if (count($tutorials)>1) {
                    echo "<tr><td><img  class=\"graph\" src=\"get_pie_course.php?code=$course->code&n=T&y=4\"/></td></tr>";
                    $counter++;
                }

                if ($counter===0){
                    echo "<tr>";
                }else if($counter>=2){
                    echo "</tr>";
                    $counter = 0;
                }

                if (count($researches)>1) {
                    echo "<tr><td><img  class=\"graph\" src=\"get_pie_course.php?code=$course->code&n=R&y=4\"/></td></tr>";
                    $counter++;
                }

                if ($counter===0){
                    echo "<tr>";
                }else if($counter>=2){
                    echo "</tr>";
                    $counter = 0;
                }

                echo "</table>";
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>

