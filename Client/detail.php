<?php
include_once ('../shar/DataBase.php');

$db_helper = new DataBase('database.db');
if (empty($_REQUEST['code'])){
    die ("<h1>NO CODE INPUT</h1>");
}else {
    $course = $db_helper->getCourse($_REQUEST['code']);
    $sections = $db_helper->getSections($course->code);
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
    <link rel="stylesheet" type="text/css" href="Scroll.css">
</head>

<body>
<p><img src="Image/header-background.jpg" width="1303" height="70" alt="Header"></p>
<?php
    echo "<h2><font color=\"white\">$course->code - $course->name</font></h2>";
?>

<p>&nbsp;</p>
<div class="Container">
    <div class="Content">
        <div class="Wrapper">
            <div class="RightContent">
                <?php
                echo "<table style=\"width:100%\">";
                echo "<tr><td>Credit</td><td>$course->credit</td></tr>";
                $span = count($course->attrib)+1;
                echo "<tr><td rowspan=\"$span\">Attribute</td><br>";
                foreach ($course->attrib as $item){
                    echo "<tr><td>$item</td></tr>";
                }
                echo "</tr>";
                echo "<tr><td>Pre-requisite</td><td>$course->prereq</td></tr>";
                echo "<tr><td>Exclusion</td><td>$course->exclude</td></tr>";
                echo "<tr><td>Previous Code</td><td>$course->pre_code</td></tr>";
                echo "<tr><td>Description</td><td>$course->descript</td></tr>";

                echo "</table><br>";

                echo "<h3>Sections: </h3>";

                foreach ($sections as $section){
                    echo "<table style=\"width:80%\">";
                    echo "<tr><td colspan=\"2\"><h4>$section->nature$section->match_id($section->id)</h4></td></tr>";
                    echo "<tr><td>Time</td><td>$section->date_time</td></tr>";
                    echo "<tr><td>Room</td><td>$section->room</td></tr>";
                    echo "<tr><td>Quota</td><td>$section->quota</td></tr>";
                    echo "</table><br>";
                }
                echo "<br>";

                ?>
            </div>
            <div class="LeftContent">
                <p><img src="Image/test.jpg"/></p>
                <p><img src="Image/test.jpg"/></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

