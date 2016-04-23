#!/usr/local/bin/php
<?php
#visitCountSession.php
session_start();
if (isset($_SESSION["count"])) {
    $_SESSION["count"] += 1;
    echo "You have visited here {$_SESSION["count"]} times";
}
else {
    $_SESSION["count"] = 1;
    echo "You have visited once";
}
echo "{$_SESSION["count"]}" ;


?>


<!DOCTYPE html>
<html>

<body>
<form action="Destroy.php" method="get" >
    <div>
        <input type="submit" value="Destroy"/>
    </div>
</form>
<?php
include "try001.php";
$i = $_SESSION["count"]-1;
echo "$i";


?>
<div id="block">&nbsp;</div>
<div id="navigator" class="nav">
    <div id="HKUSTBar" style="margin:4px 0px 2px 0px">
        <table style="border:0px;" width="100%" border="0" cellspacing="0" cellpadding="0" background="/wcq/images/lg_hkust_bar.gif">
            <tbody><tr>
                <td style="padding:0;height:14px;"><a href="http://www.ust.hk/" target="_blank"><img src="/wcq/images/lg_hkust_nam.gif" border="0"></a></td>
            </tr>
            </tbody></table>
    </div>
    <ul class="topbar clearfix">
        <li class="logo">Class Schedule & Quota</li>
        <li class="term"><div class="termselect"><a href="/wcq/cgi-bin/1540/">2015-16 Summer</a><a href="/wcq/cgi-bin/1530/">2015-16 Spring</a><a href="/wcq/cgi-bin/1520/">2015-16 Winter</a><a href="/wcq/cgi-bin/1510/">2015-16 Fall</a></div><a href="#" onclick="return false">2015-16 Spring <i></i></a></li>
        <li class="search"><input id="coursesearch" value="Course search.."></li>
        <li class="search"><input id="instructorsearch" value="Instructor search.."></li>
        <li class="crseattrsearchlink"><ul class="crseattrsearch">
                <li style="position:relative"><a href="/wcq/cgi-bin/1530/common_core/3Y10">CC for 3Y 2010 & 2011 cohorts<span style="float:right">&raquo;</span></a><ul class="submenu"><li><a href="/wcq/cgi-bin/1530/common_core/3Y10/01">Common Core (A&H) for 2010 & 2011 3Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y10/02">CommonCore (A&H special list) for 10&11 3Yprograms</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y10/03">Common Core (SA) for 2010 & 2011 3Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y10/04">Common Core (SA special list) for 10&11 3Yprograms</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y10/05">Common Core (S&T) for 2010 & 2011 3Y programs</a></li></ul></li><li style="position:relative"><a href="/wcq/cgi-bin/1530/common_core/3Y12">CC for 3Y 2012 cohort<span style="float:right">&raquo;</span></a><ul class="submenu"><li><a href="/wcq/cgi-bin/1530/common_core/3Y12/06">Common Core (A&H) for 2012 3Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y12/07">Common Core (SA) for 2012 3Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/3Y12/08">Common Core (S&T) for 2012 3Y programs</a></li></ul></li><li style="position:relative"><a href="/wcq/cgi-bin/1530/common_core/4Y">CC for 4Y 2012 and after<span style="float:right">&raquo;</span></a><ul class="submenu"><li><a href="/wcq/cgi-bin/1530/common_core/4Y/09">Common Core (SSC-H) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/10">Common Core (SSC-SA) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/11">Common Core (SSC-S&T) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/12">Common Core (H) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/13">Common Core (SA) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/14">Common Core (S&T) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/15">Common Core (QR) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/16">Common Core (Arts) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/17">Common Core (E-Comm) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/18">Common Core (C-Comm) for 4Y programs</a></li><li><a href="/wcq/cgi-bin/1530/common_core/4Y/19">Common Core (HLTH) for 4Y programs</a></li></ul></li></ul>
            <a href="#" onclick="return false"><b>Common Core Course</b> <i></i></a>
        </li>
        <li class="extlink"><div class="extlinkselect">
                <div>The class information on this page will normally be updated every 15 to 20 minutes during class enrollment period.</div>
                <a href="https://sisprod.psft.ust.hk/psp/SISPROD/EMPLOYEE/HRMS/c/SA_LEARNER_SERVICES.SSS_STUDENT_CENTER.GBL?pslnkid=Z_HC_SSS_STUDENT_CENTER_LNK&FolderPath=PORTAL_ROOT_OBJECT.Z_HC_SSS_STUDENT_CENTER_LNK&IsFolder=false&IgnoreParamTempl=FolderPath%2cIsFolder" target="_blank">&raquo; Student Information System (SIS)</a><a href="https://w6.ab.ust.hk/jr_ta/ta_stdt_main.jsp" target="_blank">&raquo; Time Table Assistant (Official)</a><a href="http://publish.ust.hk/acadreg/index.html" target="_blank">&raquo; Academic Regulations</a><a href="http://publish.ust.hk/prog_crs/index.html" target="_blank">&raquo; Program/Course Catalog</a><a href="http://ugadmin.ust.hk/curriculum_hb/" target="_blank">&raquo; Curriculum Handbook for Existing Students</a><a href="http://arr.ust.hk/reg/in/pos/pos.html" target="_blank">&raquo; Recommended Study Pattern</a><a href="http://publish.ust.hk/prog_crs/ugprog/minor_index.html" target="_blank">&raquo; Minor Programs</a></div>
            <a href="#" onclick="return false"><b>Notes & Links</b> <i></i></a>
        </li>
        <li class="acklink"><div class="ackselect">
                <div>This service was first adapted from a student contribution in 2011-12 Fall.  The efforts of all concerned are duly acknowledged.</div>
            </div>
            <a href="#" onclick="return false"><center><img src="/wcq/images/btn_ack_2.png"/></center></a>
        </li>
    </ul>
    <div class="depts"><a class="ug" href="/wcq/cgi-bin/1530/subject/ACCT">ACCT</a><a class="pg" href="/wcq/cgi-bin/1530/subject/BIEN">BIEN</a><a class="ug" href="/wcq/cgi-bin/1530/subject/BIPH">BIPH</a><a class="ug" href="/wcq/cgi-bin/1530/subject/BMED">BMED</a><a class="pg" href="/wcq/cgi-bin/1530/subject/BTEC">BTEC</a><a class="pg" href="/wcq/cgi-bin/1530/subject/CBME">CBME</a><a class="ug" href="/wcq/cgi-bin/1530/subject/CENG">CENG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/CHEM">CHEM</a><a class="pg" href="/wcq/cgi-bin/1530/subject/CHMS">CHMS</a><a class="pg" href="/wcq/cgi-bin/1530/subject/CIEM">CIEM</a><a class="ug" href="/wcq/cgi-bin/1530/subject/CIVL">CIVL</a><a class="ug" href="/wcq/cgi-bin/1530/subject/COMP">COMP</a><a class="ug" href="/wcq/cgi-bin/1530/subject/CPEG">CPEG</a><a class="pg" href="/wcq/cgi-bin/1530/subject/CSIT">CSIT</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ECON">ECON</a><a class="pg" href="/wcq/cgi-bin/1530/subject/EEMT">EEMT</a><a class="pg" href="/wcq/cgi-bin/1530/subject/EESM">EESM</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ELEC">ELEC</a><a class="pg" href="/wcq/cgi-bin/1530/subject/EMBA">EMBA</a><a class="pg" href="/wcq/cgi-bin/1530/subject/ENEG">ENEG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ENGG">ENGG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ENTR">ENTR</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ENVR">ENVR</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ENVS">ENVS</a><a class="pg" href="/wcq/cgi-bin/1530/subject/EVNG">EVNG</a><a class="pg" href="/wcq/cgi-bin/1530/subject/EVSM">EVSM</a><a class="ug" href="/wcq/cgi-bin/1530/subject/FINA">FINA</a><a class="pg" href="/wcq/cgi-bin/1530/subject/FYTG">FYTG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/GBUS">GBUS</a><a class="pg" href="/wcq/cgi-bin/1530/subject/GFIN">GFIN</a><a class="ug" href="/wcq/cgi-bin/1530/subject/GNED">GNED</a><a class="ug" href="/wcq/cgi-bin/1530/subject/HART">HART</a><a class="ug" href="/wcq/cgi-bin/1530/subject/HLTH">HLTH</a><a class="pg" href="/wcq/cgi-bin/1530/subject/HMMA">HMMA</a><a class="ug" href="/wcq/cgi-bin/1530/subject/HUMA">HUMA</a><a class="pg" href="/wcq/cgi-bin/1530/subject/IBTM">IBTM</a><a class="pg" href="/wcq/cgi-bin/1530/subject/IDPO">IDPO</a><a class="ug" href="/wcq/cgi-bin/1530/subject/IELM">IELM</a><a class="pg" href="/wcq/cgi-bin/1530/subject/IMBA">IMBA</a><a class="ug" href="/wcq/cgi-bin/1530/subject/ISOM">ISOM</a><a class="pg" href="/wcq/cgi-bin/1530/subject/JEVE">JEVE</a><a class="ug" href="/wcq/cgi-bin/1530/subject/LABU">LABU</a><a class="ug" href="/wcq/cgi-bin/1530/subject/LANG">LANG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/LIFS">LIFS</a><a class="pg" href="/wcq/cgi-bin/1530/subject/MAFS">MAFS</a><a class="pg" href="/wcq/cgi-bin/1530/subject/MALE">MALE</a><a class="ug" href="/wcq/cgi-bin/1530/subject/MARK">MARK</a><a class="ug" href="/wcq/cgi-bin/1530/subject/MATH">MATH</a><a class="ug" href="/wcq/cgi-bin/1530/subject/MECH">MECH</a><a class="pg" href="/wcq/cgi-bin/1530/subject/MESF">MESF</a><a class="pg" href="/wcq/cgi-bin/1530/subject/MGCS">MGCS</a><a class="ug" href="/wcq/cgi-bin/1530/subject/MGMT">MGMT</a><a class="pg" href="/wcq/cgi-bin/1530/subject/MIMT">MIMT</a><a class="pg" href="/wcq/cgi-bin/1530/subject/NANO">NANO</a><a class="ug" href="/wcq/cgi-bin/1530/subject/PHYS">PHYS</a><a class="ug" href="/wcq/cgi-bin/1530/subject/RMBI">RMBI</a><a class="ug" href="/wcq/cgi-bin/1530/subject/SBMT">SBMT</a><a class="ug" href="/wcq/cgi-bin/1530/subject/SCIE">SCIE</a><a class="ug" href="/wcq/cgi-bin/1530/subject/SHSS">SHSS</a><a class="ug" href="/wcq/cgi-bin/1530/subject/SOSC">SOSC</a><a class="pg" href="/wcq/cgi-bin/1530/subject/SSMA">SSMA</a><a class="ug" href="/wcq/cgi-bin/1530/subject/TEMG">TEMG</a><a class="ug" href="/wcq/cgi-bin/1530/subject/UROP">UROP</a><a class="ug" href="/wcq/cgi-bin/1530/subject/WBBA">WBBA</a></div>
</div>
<script type="text/javascript">
    var navHeight = $('#navigator').outerHeight(true);
    $('#block').css('height', navHeight + 'px');
</script>
<div id="classes">
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1001">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[3Y10]</span><div class="popupdetail">CC for 3Y 2010 & 2011 cohorts</div></div><div class="popup attrword"><span class="crseattrword">[3Y12]</span><div class="popupdetail">CC for 3Y 2012 cohort</div></div><div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (S&T) for 2010 & 2011 3Y programs<br>Common Core (S&T) for 2012 3Y programs<br>Common Core (S&T) for 4Y programs</td></tr><tr><th>EXCLUSION</th><td>ISOM 2010, any COMP courses of 2000-level or above</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 101</td></tr><tr><th>DESCRIPTION</th><td>This course is an introduction to computers and computing tools. It introduces the organization and basic working mechanism of a computer system, including the development of the trend of modern computer system. It covers the fundamentals of computer hardware design and software application development. The course emphasizes the application of the state-of-the-art software tools to solve problems and present solutions via a range of skills related to multimedia and internet computing tools such as internet, e-mail, WWW, webpage design, computer animation, spread sheet charts/figures, presentations with graphics and animations, etc. The course also covers business, accessibility, and relevant security issues in the use of computers and Internet.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1001 - Exploring Multimedia and Internet Computing (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1650)</td>
                <td>We 09:00AM - 10:50AM</td><td>Rm 5620, Lift 31-32 (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEUNG, Wai Ting">LEUNG, Wai Ting</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[0][0][$i]); ?></td><td align="center">25</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1652)</td>
                <td>Th 10:30AM - 12:20PM</td><td>Rm 5620, Lift 31-32 (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEUNG, Wai Ting">LEUNG, Wai Ting</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[0][1][$i]); ?></td><td align="center">38</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA1 (1654)</td>
                <td>Mo 09:30AM - 11:20AM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEUNG, Wai Ting">LEUNG, Wai Ting</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[0][2][$i]); ?></td><td align="center">19</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA2 (1656)</td>
                <td>Tu 09:00AM - 10:50AM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEUNG, Wai Ting">LEUNG, Wai Ting</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[0][3][$i]); ?></td><td align="center">44</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1021">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (QR) for 4Y programs</td></tr><tr><th>EXCLUSION</th><td>COMP 1002, COMP 1003 (prior to 2011-12), COMP 1004 (prior to 2013-14), COMP 1022P, COMP 1022Q, COMP 2011</td></tr><tr><th>DESCRIPTION</th><td>This course introduces students to the world of Computer Science. Students will experience a range of fun and interesting areas from the world of computing, such as game programming, web programming, user interface design and computer graphics. These will be explored largely by programming in the Python language.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1021 - Introduction to Computer Science (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1657)</td>
                <td>TuTh 10:30AM - 11:20AM</td><td>Rm 1104, Acad Concourse (120)</td><td><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">90</td><td align="center"><?php print_r($big_course_array[1][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1659)</td>
                <td>WeFr 04:30PM - 05:20PM</td><td>Rm 2407, Lift 17-18 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a></td><td align="center">83</td><td align="center"><?php print_r($big_course_array[1][1][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">L3 (1661)</td>
                <td>WeFr 03:00PM - 03:50PM</td><td>Rm 2407, Lift 17-18 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a></td><td align="center">83</td><td align="center"><?php print_r($big_course_array[1][2][$i]); ?></td><td align="center">12</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1663)</td>
                <td>Fr 01:00PM - 02:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[1][3][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1665)</td>
                <td>Mo 04:00PM - 05:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[1][4][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA3 (1666)</td>
                <td>Mo 12:00PM - 01:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[1][5][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA4 (1667)</td>
                <td>Th 10:00AM - 11:50AM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[1][6][$i]); ?></td><td align="center">21</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1022P">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (QR) for 4Y programs</td></tr><tr><th>EXCLUSION</th><td>COMP 1002, COMP 1003 (prior to 2011-12), COMP 1004 (prior to 2013-14), COMP 1021, COMP 1022Q,  COMP 2011, ISOM 3320</td></tr><tr><th>DESCRIPTION</th><td>This course is designed to equip students with the fundamental concepts of programming elements and data abstraction using Java. Students will learn how to write procedural programs using variables, arrays, control statements, loops, recursion, data abstraction and objects using an integrated development environment.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1022P - Introduction to Computing with Java (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1669)</td>
                <td>MoWe 09:30AM - 10:20AM</td><td>Lecture Theater K (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[2][0][$i]); ?></td><td align="center">41</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1671)</td>
                <td>TuTh 09:00AM - 09:50AM</td><td>Lecture Theater F (134)</td><td><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[2][1][$i]); ?></td><td align="center">53</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">L3 (1673)</td>
                <td>TuTh 02:00PM - 02:50PM</td><td>Lecture Theater F (134)</td><td><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[2][2][$i]); ?></td><td align="center">26</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1675)</td>
                <td>Th 12:30PM - 02:20PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[2][3][$i]); ?></td><td align="center">44</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1677)</td>
                <td>We 04:00PM - 05:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[2][4][$i]); ?></td><td align="center">22</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA3 (1678)</td>
                <td>We 12:00PM - 01:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[2][5][$i]); ?></td><td align="center">28</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA4 (1679)</td>
                <td>Mo 06:00PM - 07:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[2][6][$i]); ?></td><td align="center">26</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1022Q">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (QR) for 4Y programs</td></tr><tr><th>EXCLUSION</th><td>COMP 1002, COMP 1003 (prior to 2011-12), COMP 1004 (prior to 2013-14), COMP 1021, COMP 1022P, COMP 2011, ISOM 3230</td></tr><tr><th>DESCRIPTION</th><td>This course is designed to equip students with the fundamental concepts of programming using the VBA programming language, within the context of the Microsoft Excel program. Students will first learn how to use Excel to analyze and present data, and will then learn how to use VBA code to build powerful programs.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1022Q - Introduction to Computing with Excel VBA (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1681)</td>
                <td>WeFr 01:30PM - 02:20PM</td><td>Rm 4619, Lift 31-32 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">85</td><td align="center"><?php print_r($big_course_array[3][0][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1683)</td>
                <td>MoWe 09:30AM - 10:20AM</td><td>Rm 2306, Lift 17-18 (111)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">85</td><td align="center"><?php print_r($big_course_array[3][1][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">L3 (1685)</td>
                <td>TuTh 09:00AM - 09:50AM</td><td>Rm 4334, Lift 3 (130)</td><td><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a></td><td align="center">85</td><td align="center"><?php print_r($big_course_array[3][2][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L4 (1687)</td>
                <td>TuTh 05:00PM - 05:50PM</td><td>Rm 4620, Lift 31-32 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a></td><td align="center">85</td><td align="center"><?php print_r($big_course_array[3][3][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA1 (1689)</td>
                <td>Th 02:30PM - 04:20PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[3][4][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA2 (1691)</td>
                <td>Tu 09:00AM - 10:50AM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[3][5][$i]); ?></td><td align="center">6</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA3 (1692)</td>
                <td>Fr 03:00PM - 04:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">66</td><td align="center"><?php print_r($big_course_array[3][6][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA4 (1693)</td>
                <td>Fr 11:00AM - 12:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[3][7][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA5 (1694)</td>
                <td>Fr 09:00AM - 10:50AM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/GOLIN, Mordecai Jay">GOLIN, Mordecai Jay</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[3][8][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1029A">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 1021 OR COMP 1022P OR COMP1022Q</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 4901C</td></tr><tr><th>DESCRIPTION</th><td>This course provides a basic introduction to mobile application development using the Android platform. It is intended for students who have some prior programming experience, but wish to learn the basics of mobile application development. The course will introduce them to the Android SDK and development environment, Android application components: Activities and their lifecycle, UI design, Multimedia, and 2D graphics support in Android. Students explore these concepts through self-learning course materials and guided laboratory exercises. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1029A - Introduction to Mobile Application Development Using Android (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">LA1 (1696)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[4][0][$i]); ?></td><td align="center">18</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; This course is a self-learning course without any face-to-face lectures or face-to-face labs. There will be a final exam scheduled near the end of the semester. For details please visit http://learn.ust.hk/bridging_courses.html</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1029C">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1021 OR COMP 1022P OR COMP 1022Q OR ISOM 3230 OR ISOM 3320</td></tr><tr><th>EXCLUSION</th><td>COMP 1002, COMP 1003 (prior to 2011-12), COMP 1004 (prior to 2013-14), COMP 2011</td></tr><tr><th>DESCRIPTION</th><td>This course introduces the C programming language. It is intended for students who already have some experience in computer programming but wish to learn how to apply those programming skills to the C language. The course covers basic programming topics, such as variables, control, loops, and functions, to more advanced topics. Students explore these by self-learning of course materials together with guided programming exercises. Students without the prerequisites but possess relevant programming knowledge may seek instructor's approval for enrolling in the course. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1029C - C Programming Bridging Course (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1697)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[5][0][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; This course is a self-learning course without any face-to-face lectures or face-to-face labs. There will be a final exam scheduled near the end of the semester. For details please visit http://learn.ust.hk/bridging_courses.html</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1698)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[5][1][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1029J">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 1021 OR COMP 1022Q OR ISOM 3230</td></tr><tr><th>EXCLUSION</th><td>COMP 1022P, COMP 3021, ISOM 3320</td></tr><tr><th>DESCRIPTION</th><td>This course introduces the Java programming language. It is intended for students who already have some experience in computer programming but wish to learn how to apply those programming skills to the Java language. The course covers basic programming topics such as variables, control statements, loops, functions, and object-oriented programming concepts. Students explore these by self-learning of course materials together with guided programming exercises. Students without the prerequisites but possess relevant programming knowledge may seek instructor's approval for enrolling in the course. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1029J - Java Programming Bridging Course (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1699)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[6][0][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; This course is a self-learning course without any face-to-face lectures or face-to-face labs. There will be a final exam scheduled near the end of the semester. For details please visit http://learn.ust.hk/bridging_courses.html</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1700)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[6][1][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1029P">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 1022P OR COMP 1022Q OR ISOM 3230 OR ISOM 3320</td></tr><tr><th>EXCLUSION</th><td>COMP 1021</td></tr><tr><th>DESCRIPTION</th><td>This course introduces the Python programming language. It is intended for students who already have some experience in computer programming but wish to learn how to apply those programming skills to the Python language. The course covers basic programming topics, such as variables, functions and loops, to more advanced topics. Students explore these by self-learning of course materials together with guided programming exercises. Students without the prerequisites but possess relevant programming knowledge may seek instructor's approval for enrolling in the course. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1029P - Python Programming Bridging Course (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1701)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[7][0][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; This course is a self-learning course without any face-to-face lectures or face-to-face labs. There will be a final exam scheduled near the end of the semester. For details please visit http://learn.ust.hk/bridging_courses.html</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1702)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[7][1][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1029V">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 1021 OR COMP 1022P OR ISOM 3320</td></tr><tr><th>EXCLUSION</th><td>COMP 1022Q, ISOM 3230</td></tr><tr><th>DESCRIPTION</th><td>This course introduces the VBA programming language, in the context of Microsoft Excel. It is intended for students who already have some experience in computer programming but wish to learn how to apply those programming skills to VBA, within Excel. The course covers basic programming topics, such as variables, functions and loops, to more advanced topics. Appropriate features of the Excel program are also covered. Students explore these by self-learning of course materials together with guided programming exercises. Students without the prerequisites but possess relevant programming knowledge may seek instructor's approval for enrolling in the course. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1029V - Excel VBA Programming Bridging Course (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1703)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[8][0][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; This course is a self-learning course without any face-to-face lectures or face-to-face labs. There will be a final exam scheduled near the end of the semester. For details please visit http://learn.ust.hk/bridging_courses.html</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1704)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Gibson">LAM, Gibson</a></td><td align="center">50</td><td align="center"><?php print_r($big_course_array[8][1][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1942">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (QR) for 4Y programs</td></tr><tr><th>EXCLUSION</th><td>COMP 4331, ISOM 3360, RMBI 4310</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 192</td></tr><tr><th>DESCRIPTION</th><td>This course teaches concepts and tools for exploring and visualizing data. There are a lot of real-life decision-making problems (e.g., business, logistics, economics, marketing, finance, resource management, forecasting and engineering) which can be formulated using some existing data analysis models. Existing computer science tools such as Microsoft Excel can help us to model and solve these problems easily, and to visualize the solutions.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1942 - Exploring and Visualizing Data (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1705)</td>
                <td>TuTh 09:00AM - 10:20AM</td><td>G010, CYT Bldg (140)</td><td><a href="/wcq/cgi-bin/1530/instructor/WONG, Raymond Chi Wing">WONG, Raymond Chi Wing</a></td><td align="center">125</td><td align="center"><?php print_r($big_course_array[9][0][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1707)</td>
                <td>We 09:30AM - 10:20AM</td><td>Rm 2302, Lift 17-18 (74)</td><td><a href="/wcq/cgi-bin/1530/instructor/WONG, Raymond Chi Wing">WONG, Raymond Chi Wing</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[9][1][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T2 (1709)</td>
                <td>Mo 09:30AM - 10:20AM</td><td>Rm 1103, Acad Concourse (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/WONG, Raymond Chi Wing">WONG, Raymond Chi Wing</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[9][2][$i]); ?></td><td align="center">7</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1991">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Full-time internship training for a period of at least six weeks in an organization or company recognized by the Department for providing qualified internship training relevant to the computer science and engineering profession. Cantonese or other working languages may be used in off-campus trainings and internships, in some situations. For students of the Department of Computer Science and Engineering in their second year of study or above only. Internship coordinator's approval is required for enrollment in the course. Graded P, PP or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1991 - Industrial Experience (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1710)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ARYA, Sunil">ARYA, Sunil</a></td><td align="center">211</td><td align="center"><?php print_r($big_course_array[10][0][$i]); ?></td><td align="center">52</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">R2 (1711)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ARYA, Sunil">ARYA, Sunil</a></td><td align="center">176</td><td align="center"><?php print_r($big_course_array[10][1][$i]); ?></td><td align="center">45</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">R3 (1712)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ARYA, Sunil">ARYA, Sunil</a></td><td align="center">138</td><td align="center"><?php print_r($big_course_array[10][2][$i]); ?></td><td align="center">36</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP1999">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 2999, COMP 099</td></tr><tr><th>DESCRIPTION</th><td>A practical training course in a simulated industrial environment. For students of the Department of Computer Science and Engineering only. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 1999 - Industrial Training (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (2567)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">17</td><td align="center"><?php print_r($big_course_array[11][0][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2011">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1021 OR COMP 1022P OR COMP 1022Q OR ISOM 3230</td></tr><tr><th>EXCLUSION</th><td>COMP 1003 (prior to 2011-12), COMP 1004 (prior to 2013-14)</td></tr><tr><th>DESCRIPTION</th><td>This course is an introduction to object-­‐oriented programming and data structures. Students will learn abstract data types and their implementation as classes in an object-­‐oriented programming language; static and dynamic construction and destruction of objects; data member and member functions; public interface and encapsulation. It will cover data structures such as stacks, queues, linked lists, and binary trees.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2011 - Introduction to Object-oriented Programming (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1713)</td>
                <td>TuTh 09:00AM - 10:20AM</td><td>Rm 2464, Lift 25-26 (122)</td><td><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">122</td><td align="center"><?php print_r($big_course_array[12][0][$i]); ?></td><td align="center">6</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1715)</td>
                <td>TuTh 10:30AM - 11:50AM</td><td>Rm 2464, Lift 25-26 (122)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a></td><td align="center">122</td><td align="center"><?php print_r($big_course_array[12][1][$i]); ?>  </td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA1 (1717)</td>
                <td>Tu 11:00AM - 12:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">54</td><td align="center"><?php print_r($big_course_array[12][2][$i]); ?></td><td align="center">16</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA2 (1719)</td>
                <td>Mo 11:30AM - 01:20PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[12][3][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA3 (1720)</td>
                <td>Th 04:30PM - 06:20PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[12][4][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA4 (3823)</td>
                <td>Tu 06:00PM - 07:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a><br><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[12][5][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2012">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1003 (prior to 2011-12) OR COMP 1004 (prior to 2013-14) OR COMP 2011</td></tr><tr><th>EXCLUSION</th><td>COMP 2012H</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 152</td></tr><tr><th>DESCRIPTION</th><td>To learn the fundamental concepts and techniques behind object-oriented programming.  They include: abstract data types; creation, initialization, and destruction of objects; class hierarchies; polymorphism, inheritance and dynamic binding; generic programming using templates.  To learn the object-oriented view of data structures: linked lists, queues, stacks, trees, and algorithms such as searching, sorting, and hashing algorithms.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2012 - Object-Oriented Programming and Data Structures (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1722)</td>
                <td>TuTh 09:00AM - 10:20AM</td><td>Rm 4619, Lift 31-32 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[3][0][$i]); ?></td><td align="center">15</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1724)</td>
                <td>TuTh 01:30PM - 02:50PM</td><td>Rm 2306, Lift 17-18 (111)</td><td><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[13][1][$i]); ?></td><td align="center">30</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">L3 (1726)</td>
                <td>TuTh 04:30PM - 05:50PM</td><td>Rm 2306, Lift 17-18 (111)</td><td><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[13][2][$i]); ?></td><td align="center">27</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L4 (1728)</td>
                <td>TuTh 12:00PM - 01:20PM</td><td>Rm 2306, Lift 17-18 (111)</td><td><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">89</td><td align="center"><?php print_r($big_course_array[13][3][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA1 (1730)</td>
                <td>Tu 06:00PM - 07:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[13][4][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA2 (1732)</td>
                <td>We 10:30AM - 12:20PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[13][5][$i]); ?></td><td align="center">28</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA3 (1733)</td>
                <td>Tu 01:00PM - 02:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[13][6][$i]); ?></td><td align="center">37</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA4 (1734)</td>
                <td>We 04:00PM - 05:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[13][7][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA5 (1735)</td>
                <td>Fr 01:30PM - 03:20PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a><br><a href="/wcq/cgi-bin/1530/instructor/TSOI, Yau Chat">TSOI, Yau Chat</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[13][8][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2021">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 1021 OR COMP 1022P OR COMP 1022Q; OR a passing grade in HKALE Computer Studies or HKCEE Computer Studies; OR level 3 or above in HKDSE Information and Communication Technology</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 111</td></tr><tr><th>DESCRIPTION</th><td>Unix utilities and file structure; links and symbolic links; data processing and process control in the Unix shell; Shell programming; regular expressions; script programming in the Unix environment.  Laboratory exercises are designed to give hands-on practice with software tools and to increase programmer productivity.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2021 - Unix and Script Programming (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1737)</td>
                <td>Tu 11:00AM - 12:50PM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">40</td><td align="center"><?php print_r($big_course_array[14][0][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1739)</td>
                <td>Th 09:00AM - 10:50AM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">40</td><td align="center"><?php print_r($big_course_array[14][1][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2611">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1004 (prior to 2013-14) OR COMP 2011 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>ELEC 2300</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 180</td></tr><tr><th>DESCRIPTION</th><td>Inner workings of modern digital computer systems and tradeoffs at the hardware-software interface. Topics include: instructions set design, memory systems, input-output systems, interrupts and exceptions, pipelining, performance and cost analysis, assembly language programming, and a survey of advanced architectures.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2611 - Computer Organization (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1742)</td>
                <td>TuTh 10:30AM - 11:50AM</td><td>Lecture Theater K (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a></td><td align="center">66</td><td align="center"><?php print_r($big_course_array[15][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1744)</td>
                <td>TuTh 03:00PM - 04:20PM</td><td>Rm 5583, Lift 29-30 (80)</td><td><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">66</td><td align="center"><?php print_r($big_course_array[15][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">L3 (1746)</td>
                <td>MoWe 09:00AM - 10:20AM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][2][$i]); ?></td><td align="center">18</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1753)</td>
                <td>Mo 10:30AM - 11:20AM</td><td>G009B, CYT Bldg (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][3][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T2 (1755)</td>
                <td>Mo 03:00PM - 03:50PM</td><td>G009B, CYT Bldg (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][4][$i]); ?></td><td align="center">10</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T3 (1756)</td>
                <td>Fr 03:30PM - 04:20PM</td><td>Rm 2406, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][5][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA1 (1748)</td>
                <td>Mo 02:00PM - 02:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][6][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA2 (1750)</td>
                <td>Fr 06:00PM - 06:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[15][7][$i]); ?></td><td align="center">15</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA3 (1751)</td>
                <td>Mo 03:00PM - 03:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a><br><a href="/wcq/cgi-bin/1530/instructor/LAM, Ngok">LAM, Ngok</a><br><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">66</td><td align="center"><?php print_r($big_course_array[15][8][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2711">&nbsp;</a></div>
        <div class="courseinfo">
            <div class="popup attrword"><span class="crseattrword">[4Y]</span><div class="popupdetail">CC for 4Y 2012 and after</div></div>
            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>ATTRIBUTES</th><td>Common Core (QR) for 4Y programs</td></tr><tr><th>PRE-REQUISITE</th><td>A passing grade in AL Pure Mathematics/AL Applied Mathematics; OR level 3 or above in HKDSE Mathematics Extended Module M1/M2</td></tr><tr><th>CO-REQUISITE</th><td>(For students without prerequisites) MATH 1013 OR MATH 1014 OR MATH 1018 OR MATH 1020 OR MATH 1023 OR MATH 1024</td></tr><tr><th>EXCLUSION</th><td>COMP 2711H, MATH 2343</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 170</td></tr><tr><th>DESCRIPTION</th><td>Basic concepts in discrete mathematics needed for the study of computer science: enumeration techniques, basic number theory, logic and proofs, recursion and recurrences, probability theory and graph theory. The approach of this course is specifically computer science application oriented.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2711 - Discrete Mathematical Tools for Computer Science (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1758)</td>
                <td>WeFr 04:30PM - 05:50PM</td><td>Rm 4619, Lift 31-32 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Nevin Lianwen">ZHANG, Nevin Lianwen</a></td><td align="center">126</td><td align="center"><?php print_r($big_course_array[16][0][$i]); ?></td><td align="center">12</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1760)</td>
                <td>Mo 03:00PM - 03:50PM</td><td>Rm 2304, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Nevin Lianwen">ZHANG, Nevin Lianwen</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[16][1][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T2 (1762)</td>
                <td>We 09:30AM - 10:20AM</td><td>Rm 2502, Lift 25-26 (120)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Nevin Lianwen">ZHANG, Nevin Lianwen</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[16][2][$i]); ?></td><td align="center">12</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP2900">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 002</td></tr><tr><th>DESCRIPTION</th><td>Continuation of COMP 1900. A compulsory, one year course for students of the Department of Computer Science and Engineering under the three-year degree. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 2900 - Academic and Professional Development II (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T1 (3755)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td>TBA</td><td align="center">1</td><td align="center">1</td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3021">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2012 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>ISOM 3320</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 201</td></tr><tr><th>DESCRIPTION</th><td>Introduction to Java programming. Fundamentals include language syntax, object-oriented programming, inheritance, polymorphism, exception handling, multithreading. Standard libraries for input/output, graphics programming, built-in data structures. Programming for events, web, networking, generics.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3021 - Java Programming (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1763)</td>
                <td>MoWe 12:00PM - 01:20PM</td><td>G009B, CYT Bldg (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/LIN, Fangzhen">LIN, Fangzhen</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[17][0][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1764)</td>
                <td>Fr 07:00PM - 07:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LIN, Fangzhen">LIN, Fangzhen</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[17][1][$i]); ?></td><td align="center">2</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3071">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 291</td></tr><tr><th>DESCRIPTION</th><td>Intensive programming laboratory to equip students with creative problem solving and competitive programming skills. International programming competition-type problems will be used to motivate the study of algorithms, programming, and other topics in computer science. Enrollment in the course requires approval of the course instructor.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3071 - Honors Competitive Programming (2 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">LA1 (1765)</td>
                <td>Sa 09:00AM - 12:50PM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/YI, Ke">YI, Ke</a></td><td align="center">20</td><td align="center"><?php print_r($big_course_array[18][0][$i]); ?></td><td align="center">16</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3111">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2012 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>COMP 3111H, ISOM 3210, RMBI 4420</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 211</td></tr><tr><th>DESCRIPTION</th><td>Methods and tools for planning, designing, implementing, validating, and maintaining large software systems. Project work to build a software system as a team, using appropriate software engineering tools and techniques.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3111 - Software Engineering (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1766)</td>
                <td>TuTh 10:30AM - 11:50AM</td><td>G010, CYT Bldg (140)</td><td><a href="/wcq/cgi-bin/1530/instructor/LOCHOVSKY, Frederick Horst">LOCHOVSKY, Frederick Horst</a></td><td align="center">120</td><td align="center"><?php print_r($big_course_array[19][0][$i]); ?></td><td align="center">10</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1771)</td>
                <td>Tu 09:30AM - 10:20AM</td><td>G009B, CYT Bldg (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/LOCHOVSKY, Frederick Horst">LOCHOVSKY, Frederick Horst</a></td><td align="center">70</td><td align="center"><?php print_r($big_course_array[19][1][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T2 (1773)</td>
                <td>Mo 06:00PM - 06:50PM</td><td>Rm 4502, Lift 25-26 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/LOCHOVSKY, Frederick Horst">LOCHOVSKY, Frederick Horst</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[19][2][$i]); ?></td><td align="center">12</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1768)</td>
                <td>Tu 03:00PM - 03:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LOCHOVSKY, Frederick Horst">LOCHOVSKY, Frederick Horst</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[19][3][$i]); ?></td><td align="center">24</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1770)</td>
                <td>Tu 12:00PM - 12:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/LOCHOVSKY, Frederick Horst">LOCHOVSKY, Frederick Horst</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[19][4][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3211">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2011 OR COMP 2012 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>COMP 5211</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 221</td></tr><tr><th>DESCRIPTION</th><td>Foundations underlying design of intelligent systems. Relations between logical, statistical, cognitive, biological paradigms; basic techniques for heuristic search, theorem proving, knowledge representation, adaptation; applications in vision, language, planning, expert systems.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3211 - Fundamentals of Artificial Intelligence (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1774)</td>
                <td>MoWe 09:00AM - 10:20AM</td><td>Rm 2304, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/WU, Dekai">WU, Dekai</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[20][0][$i]); ?></td><td align="center">3</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1775)</td>
                <td>Fr 12:00PM - 12:50PM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/WU, Dekai">WU, Dekai</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[20][1][$i]); ?></td><td align="center">3</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3311">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2011 OR COMP 2012 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>COMP 5311, IELM 3300, ISOM 3260</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 231</td></tr><tr><th>DESCRIPTION</th><td>Principles of database systems; conceptual modeling and data models; logical and physical database design; query languages and query processing; database services including concurrency, crash recovery, security and integrity. Hands-on DBMS experience.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3311 - Database Management Systems (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1776)</td>
                <td>WeFr 01:30PM - 02:50PM</td><td>Lecture Theater F (134)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">105</td><td align="center"><?php print_r($big_course_array[21][0][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">L2 (1778)</td>
                <td>MoWe 10:30AM - 11:50AM</td><td>Lecture Theater F (134)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">90</td><td align="center"><?php print_r($big_course_array[21][1][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T1 (1785)</td>
                <td>Fr 12:00PM - 12:50PM</td><td>Rm 2406, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">76</td><td align="center"><?php print_r($big_course_array[21][2][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T2 (1787)</td>
                <td>Mo 06:00PM - 06:50PM</td><td>Rm 2302, Lift 17-18 (74)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">62</td><td align="center"><?php print_r($big_course_array[21][3][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T3 (1788)</td>
                <td>Tu 12:30PM - 01:20PM</td><td>G009B, CYT Bldg (70)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[21][4][$i]); ?></td><td align="center">12</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1780)</td>
                <td>Fr 06:00PM - 06:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[21][5][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1782)</td>
                <td>Tu 11:00AM - 11:50AM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[21][6][$i]); ?></td><td align="center">11</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA3 (1783)</td>
                <td>Mo 01:30PM - 02:20PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">67</td><td align="center"><?php print_r($big_course_array[21][7][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3511">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2611 OR [ELEC 2300 AND (COMP 1002 OR COMP 1004 (prior to 2013-14) OR COMP 2011 OR COMP 2012H)]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 252</td></tr><tr><th>DESCRIPTION</th><td>Principles, purpose and structure of operating systems; processes, threads, and multi-threaded programming; CPU scheduling; synchronization, mutual exclusion; memory management and virtual memory; device management; file systems, security and protection.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3511 - Operating Systems (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1790)</td>
                <td>MoWe 10:30AM - 11:50AM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[22][0][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1792)</td>
                <td>Fr 09:00AM - 10:50AM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">40</td><td align="center"><?php print_r($big_course_array[22][1][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1794)</td>
                <td>Th 04:30PM - 06:20PM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">40</td><td align="center"><?php print_r($big_course_array[22][2][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3711">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>(COMP 2011 OR COMP 2012 OR COMP 2012H) AND (COMP 2711 OR COMP 2711H OR MATH 2343)</td></tr><tr><th>EXCLUSION</th><td>COMP 3711H</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 271</td></tr><tr><th>DESCRIPTION</th><td>Techniques for designing algorithms, proving their correctness, and analyzing their running times. Topics covered include: sorting, selection, heaps, balanced search trees, divide-and-conquer, greedy algorithms, dynamic programming, and graph algorithms.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3711 - Design and Analysis of Algorithms (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1795)</td>
                <td>MoWe 12:00PM - 01:20PM</td><td>Rm 2407, Lift 17-18 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/YI, Ke">YI, Ke</a></td><td align="center">120</td><td align="center"><?php print_r($big_course_array[23][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1797)</td>
                <td>Mo 02:00PM - 02:50PM</td><td>Rm 6602, Lift 31-32 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/YI, Ke">YI, Ke</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[23][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T2 (1799)</td>
                <td>Tu 04:30PM - 05:20PM</td><td>Rm 6602, Lift 31-32 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/YI, Ke">YI, Ke</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[23][2][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3721">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>(COMP 3711 OR COMP 3711H) AND (MATH 2111 OR MATH 2121 OR MATH 2350)</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 272</td></tr><tr><th>DESCRIPTION</th><td>This course is an introduction to the foundation of computation. Topics covered include set theory and  countability, formal languages, finite automata and regular languages, pushdown automata and context-free languages, Turing machines, undecidability, P and NP, NP completeness.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3721 - Theory of Computation (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1800)</td>
                <td>WeFr 01:30PM - 02:50PM</td><td>Rm 2406, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/TAI, Chiew Lan">TAI, Chiew Lan</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[24][0][$i]); ?></td><td align="center">7</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1801)</td>
                <td>Fr 09:30AM - 10:20AM</td><td>Rm 2503, Lift 25-26 (87)</td><td><a href="/wcq/cgi-bin/1530/instructor/TAI, Chiew Lan">TAI, Chiew Lan</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[24][1][$i]); ?></td><td align="center">7</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP3900">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 003</td></tr><tr><th>DESCRIPTION</th><td>Continuation of COMP 2900. A compulsory, one year course for students of the Department of Computer Science and Engineering under the three-year degree. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 3900 - Academic and Professional Development III (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T1 (3771)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td>TBA</td><td align="center">7</td><td align="center"><?php print_r($big_course_array[25][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4111">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 3111 OR COMP 3111H</td></tr><tr><th>DESCRIPTION</th><td>This course provides students with the exposure of effective real-world software engineering practices and the underlying concepts via working around a realistic modern software system and applying popular tools and practices in industry. Students will gain experience in collaborative software development as well as the skills required to succeed as software professional. Topics of the course cover advanced software engineering concepts, project setup, code management, testing, defect analysis, quality metrics, and issue management. For students of the Department of Computer Science and Engineering only.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4111 - Software Engineering Practices (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (3641)</td>
                <td>Fr 09:00AM - 10:50AM</td><td>Rm 2504, Lift 25-26 (84)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Charles Chuan">ZHANG, Charles Chuan</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[26][0][$i]); ?></td><td align="center">38</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (3642)</td>
                <td>Mo 12:00PM - 01:50PM</td><td>Rm 4221, Lift 19 (32)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Charles Chuan">ZHANG, Charles Chuan</a></td><td align="center">30</td><td align="center"><?php print_r($big_course_array[26][1][$i]); ?></td><td align="center">23</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (3643)</td>
                <td>Mo 02:00PM - 03:50PM</td><td>Rm 4221, Lift 19 (32)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Charles Chuan">ZHANG, Charles Chuan</a></td><td align="center">30</td><td align="center"><?php print_r($big_course_array[26][2][$i]); ?></td><td align="center">15</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4211">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>(COMP 2011 OR COMP 2012 OR COMP 2012H) AND (ELEC 2600 OR IELM 2510 OR MATH 2411 OR MATH 2421)</td></tr><tr><th>EXCLUSION</th><td>COMP 4331, COMP 5212, ISOM 3360</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 328</td></tr><tr><th>DESCRIPTION</th><td>Fundamentals of machine learning. Concept learning. Evaluating hypotheses. Supervised learning, unsupervised learning and reinforcement learning. Bayesian learning. Ensemble Methods. Deep learning.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4211 - Machine Learning (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1804)</td>
                <td>MoWe 12:00PM - 01:20PM</td><td>Rm 4503, Lift 25-26 (64)</td><td><a href="/wcq/cgi-bin/1530/instructor/KWOK, James Tin Yau">KWOK, James Tin Yau</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[27][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1805)</td>
                <td>Fr 10:30AM - 11:20AM</td><td>Rm 6573, Lift 29-30 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/KWOK, James Tin Yau">KWOK, James Tin Yau</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[27][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4321">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2011 OR  COMP 2012 OR COMP 2012H</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 336</td></tr><tr><th>DESCRIPTION</th><td>Text retrieval models, vector space model, document ranking, performance evaluation; indexing, pattern matching, relevance feedback, clustering; web search engines, authority-based ranking; enterprise data management, content creation, meta data, taxonomy, ontology; semantic web, digital libraries and knowledge management applications.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4321 - Search Engines for Web and Enterprise Data (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1806)</td>
                <td>MoWe 09:00AM - 10:20AM</td><td>Rm 2504, Lift 25-26 (84)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEE, Dik Lun">LEE, Dik Lun</a></td><td align="center">76</td><td align="center"><?php print_r($big_course_array[28][0][$i]); ?></td><td align="center">13</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1808)</td>
                <td>Tu 07:00PM - 07:50PM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEE, Dik Lun">LEE, Dik Lun</a></td><td align="center">38</td><td align="center"><?php print_r($big_course_array[28][1][$i]); ?></td><td align="center">4</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">LA2 (1810)</td>
                <td>Tu 11:00AM - 11:50AM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/LEE, Dik Lun">LEE, Dik Lun</a></td><td align="center">38</td><td align="center"><?php print_r($big_course_array[28][2][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4332">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>CO-LIST WITH</th><td>RMBI 4310</td></tr><tr><th>PRE-REQUISITE</th><td>COMP 4211 OR COMP 4331 OR ISOM 3360</td></tr><tr><th>DESCRIPTION</th><td>This course will expose students to new and practical issues of real world mining and managing big data. Data mining and management is to effectively support storage, retrieval, and extracting implicit, previously unknown, and potentially useful knowledge from data. This course will place emphasis on two parts. The first part is big data issues such as mining and managing on distributed data, sampling on big data and using some cloud computing techniques on big data. The second part is applications of the techniques learnt on areas such as business intelligence, science and engineering, which aims to uncover facts and patterns in large volumes of data for decision support. This course builds on basic knowledge gained in the introductory data-mining course, and explores how to more effectively mine and manage large volumes of real-world data and to tap into large quantities of data. Working on real world data sets, students will experience all steps of a data-mining and management project, beginning with problem definition and data selection, and continuing through data management, data exploration, data transformation, sampling, portioning, modeling, and assessment.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4332 - Big Data Mining and Management (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1811)</td>
                <td>TuTh 01:30PM - 02:50PM</td><td>Rm 2407, Lift 17-18 (126)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Lei">CHEN, Lei</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[29][0][$i]); ?></td><td align="center">24</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Co-list with RMBI 4310</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1812)</td>
                <td>Tu 06:00PM - 06:50PM</td><td>Rm 2465, Lift 25-26 (122)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Lei">CHEN, Lei</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[29][1][$i]); ?></td><td align="center">24</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4421">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>(COMP 2011 OR COMP 2012 OR COMP 2012H) AND (MATH 2011 OR MATH 2111 OR MATH 2350 OR MATH 2351 OR MATH 2352)</td></tr><tr><th>EXCLUSION</th><td>ELEC 4130, MATH 4336</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 344</td></tr><tr><th>DESCRIPTION</th><td>Introduction to image processing. Topics include image processing and analysis in spatial and frequency domains, image restoration and compression, image segmentation and registration, morphological image processing, representation and description, object recognition, related application areas and some other closely related topics. Some sophisticated image processing and analysis tools and state-of-the-art methods may also be introduced subject to the availability of time.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4421 - Image Processing (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1813)</td>
                <td>MoWe 10:30AM - 11:50AM</td><td>Rm 2503, Lift 25-26 (87)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHUNG, Albert Chi Shing">CHUNG, Albert Chi Shing</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[30][0][$i]); ?></td><td align="center">10</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T1 (1814)</td>
                <td>Tu 05:00PM - 05:50PM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHUNG, Albert Chi Shing">CHUNG, Albert Chi Shing</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[30][1][$i]); ?></td><td align="center">10</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4431">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2012 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>ELEC 4170</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 343</td></tr><tr><th>DESCRIPTION</th><td>Color theory; digital audio, image and video fundamentals, representation, and processing; digital multimedia applications and programming.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4431 - Multimedia Computing (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1815)</td>
                <td>TuTh 12:00PM - 12:50PM</td><td>Rm 2304, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[31][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1816)</td>
                <td>Th 06:00PM - 07:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a></td><td align="center">65</td><td align="center"><?php print_r($big_course_array[31][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4441">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2011 OR COMP 2012 OR COMP 2012H</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 342</td></tr><tr><th>DESCRIPTION</th><td>An introductory course in the technology of computer music. Music representation, music theory, musical acoustics, spectral analysis, sound synthesis techniques, sound modification techniques and effects. No previous musical background required, but helpful.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4441 - Computer Music (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1817)</td>
                <td>TuTh 10:30AM - 11:50AM</td><td>Rm 4503, Lift 25-26 (64)</td><td><a href="/wcq/cgi-bin/1530/instructor/HORNER, Andrew Brian">HORNER, Andrew Brian</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[32][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1818)</td>
                <td>We 07:00PM - 07:50PM</td><td>Rm 4210, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/HORNER, Andrew Brian">HORNER, Andrew Brian</a></td><td align="center">64</td><td align="center"><?php print_r($big_course_array[32][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4511">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 3511</td></tr><tr><th>CO-REQUISITE</th><td>COMP 4621 OR ELEC 4120</td></tr><tr><th>DESCRIPTION</th><td>This course is designed to equip students, who have a particular interest in becoming practitioners, with substantial hands-on experience in solving concrete problems in a computer operating system, via programming, in a laboratory intensive course. Students will notably experiment with many topics in the areas of operating systems and network protocols, such as: boot loaders, shell, process management, system calls, process scheduler, file system, virtual memory, network protocols and packet filtering, system modules and device drivers. For students of the Department of Computer Science and Engineering only.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4511 - System and Kernel Programming in Linux (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1819)</td>
                <td>Tu 03:00PM - 04:50PM</td><td>Rm 2304, Lift 17-18 (76)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a></td><td align="center">30</td><td align="center"><?php print_r($big_course_array[33][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1821)</td>
                <td>Mo 06:00PM - 07:50PM</td><td>Rm 4221, Lift 19 (32)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a></td><td align="center">30</td><td align="center"><?php print_r($big_course_array[33][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4521">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>(COMP 2611 OR ELEC 2300) AND COMP 3511</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 355</td></tr><tr><th>DESCRIPTION</th><td>Principles of application development for mobile and embedded devices. Mobile software development environments and software architectures. Features of typical mobile platforms: user-interface and user-experience design, multimedia, 2D and 3D graphics and data storage support, networking, location and mapping services. Design patterns and application frameworks. Mobile back-end support. Web applications. Students need to design and implement a full-fledged mobile application.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4521 - Mobile Application Development (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1824)</td>
                <td>MoWe 10:30AM - 11:50AM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">63</td><td align="center"><?php print_r($big_course_array[34][0][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1825)</td>
                <td>Tu 01:00PM - 02:50PM</td><td>Rm 4213, Lift 19 (67)</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">63</td><td align="center"><?php print_r($big_course_array[34][1][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4621">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 3511</td></tr><tr><th>EXCLUSION</th><td>COMP 5621, ELEC 4120, ISOM 3180</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 361</td></tr><tr><th>DESCRIPTION</th><td>Principles of computer network architectures and communication protocols; the OSI reference model; switching and multiplexing techniques; data link, network, transport and application layers; LAN and medium access protocols; network programming.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4621 - Computer Communication Networks I (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1826)</td>
                <td>MoWe 12:00PM - 01:20PM</td><td>Rm 2404, Lift 17-18 (81)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">39</td><td align="center"><?php print_r($big_course_array[35][0][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1828)</td>
                <td>Mo 09:30AM - 10:20AM</td><td>Rm 4214, Lift 19 (40)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">39</td><td align="center"><?php print_r($big_course_array[35][1][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4631">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 3711 OR COMP 3711H</td></tr><tr><th>EXCLUSION</th><td>COMP 5631</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 364</td></tr><tr><th>DESCRIPTION</th><td>Cryptosystems, symmetric-key and public-key cryptography, cryptanalysis, authentication, message digests, digital signatures, and random number generation. Access controls and firewalls. Applications such as certificate authorities, electronic commerce, smartcards, and digital cash.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4631 - Computer and Communication Security (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1831)</td>
                <td>WeFr 03:00PM - 04:20PM</td><td>Rm 2306, Lift 17-18 (111)</td><td><a href="/wcq/cgi-bin/1530/instructor/DING, Cunsheng">DING, Cunsheng</a></td><td align="center">80</td><td align="center"><?php print_r($big_course_array[36][0][$i]); ?></td><td align="center">14</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4900">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>This course is for academic and professional development of students in the programs offered by the Department of Computer Science and Engineering. Activities may include seminars, workshops, advising and sharing sessions, interaction with faculty and teaching staff, and discussion with student peers or alumni. Graded P/PP/F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4900 - Academic and Professional Development (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T01 (1832)</td>
                <td>We 06:00PM - 06:50PM</td><td>Lecture Theater F (134)</td><td><a href="/wcq/cgi-bin/1530/instructor/BENSAOU, Brahim">BENSAOU, Brahim</a></td><td align="center">12</td><td align="center"><?php print_r($big_course_array[37][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T02 (1833)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LUO, Qiong">LUO, Qiong</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][1][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T03 (1834)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEUNG, Shing Chi">CHEUNG, Shing Chi</a></td><td align="center">14</td><td align="center"><?php print_r($big_course_array[37][2][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T04 (1835)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/TANG, Chi Keung">TANG, Chi Keung</a></td><td align="center">12</td><td align="center"><?php print_r($big_course_array[37][3][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T05 (1836)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/QUAN, Long">QUAN, Long</a></td><td align="center">19</td><td align="center"><?php print_r($big_course_array[37][4][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T06 (1837)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/DING, Cunsheng">DING, Cunsheng</a></td><td align="center">16</td><td align="center"><?php print_r($big_course_array[37][5][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T07 (1838)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Lei">CHEN, Lei</a></td><td align="center">16</td><td align="center"><?php print_r($big_course_array[37][6][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T08 (1839)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/KWOK, James Tin Yau">KWOK, James Tin Yau</a></td><td align="center">14</td><td align="center"><?php print_r($big_course_array[37][7][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T09 (1840)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a></td><td align="center">23</td><td align="center"><?php print_r($big_course_array[37][8][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T10 (1841)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/PAPADIAS, Dimitrios">PAPADIAS, Dimitrios</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][9][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T11 (1842)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ARYA, Sunil">ARYA, Sunil</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][10][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T12 (1843)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/YEUNG, Dit Yan">YEUNG, Dit Yan</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][11][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T13 (1844)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">16</td><td align="center"><?php print_r($big_course_array[37][12][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T14 (1845)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Gary Shueng Han">CHAN, Gary Shueng Han</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][13][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T15 (1846)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LI, Xin">LI, Xin</a></td><td align="center">10</td><td align="center"><?php print_r($big_course_array[37][14][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T16 (1847)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Nevin Lianwen">ZHANG, Nevin Lianwen</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][15][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T17 (1848)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/WU, Dekai">WU, Dekai</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][16][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T18 (1849)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LEE, Dik Lun">LEE, Dik Lun</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][17][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T19 (1850)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/HORNER, Andrew Brian">HORNER, Andrew Brian</a></td><td align="center">12</td><td align="center"><?php print_r($big_course_array[37][18][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T20 (1851)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a></td><td align="center">13</td><td align="center"><?php print_r($big_course_array[37][19][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T21 (1852)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/HUI, Pan">HUI, Pan</a></td><td align="center">25</td><td align="center"><?php print_r($big_course_array[37][20][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T22 (1853)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Qian">ZHANG, Qian</a></td><td align="center">23</td><td align="center"><?php print_r($big_course_array[37][21][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T23 (1854)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/YI, Ke">YI, Ke</a></td><td align="center">18</td><td align="center"><?php print_r($big_course_array[37][22][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T24 (1855)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/LIN, Fangzhen">LIN, Fangzhen</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][23][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T25 (1856)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/TAI, Chiew Lan">TAI, Chiew Lan</a></td><td align="center">18</td><td align="center"><?php print_r($big_course_array[37][24][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T26 (1857)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a></td><td align="center">16</td><td align="center"><?php print_r($big_course_array[37][25][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T27 (1858)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">17</td><td align="center"><?php print_r($big_course_array[37][26][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T28 (1859)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/KIM, Sung Hun">KIM, Sung Hun</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][27][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T29 (1860)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/NG, Wilfred Siu Hung">NG, Wilfred Siu Hung</a></td><td align="center">15</td><td align="center"><?php print_r($big_course_array[37][28][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">T30 (1861)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHUNG, Albert Chi Shing">CHUNG, Albert Chi Shing</a></td><td align="center">14</td><td align="center"><?php print_r($big_course_array[37][29][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr><tr class="newsect secteven">
                <td align="center">T31 (1862)</td>
                <td>We 06:00PM - 06:50PM</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Ki Cecia">CHAN, Ki Cecia</a></td><td align="center">14</td><td align="center"><?php print_r($big_course_array[37][30][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; Classes held in LTF</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4901E">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>This course is intended to bring together students from different disciplines to focus on coming up with innovative mobile solutions to address domain-specific problems. This will be a 3-credit student-led project-based course. Teams of students will focus on developing applications to address the needs of specific application domains. Learning additional technical knowledge will be demand-driven in self-learning mode. Students will be supported by technical advisors (Faculty member, instructional assistant(s) and student helpers with technical knowledge).</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4901E - Mobile Application Development Projects (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1863)</td>
                <td>Th 03:00PM - 05:20PM</td><td>Rm 6602, Lift 31-32 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[38][0][$i]); ?></td><td align="center">41</td><td align="center">0</td><td align="center">&nbsp;</td></tr><tr class="newsect sectodd">
                <td align="center">LA1 (1864)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MUPPALA, Kumaraswamy R Jogesh">MUPPALA, Kumaraswamy R Jogesh</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[38][1][$i]); ?></td><td align="center">41</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4901G">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 1021</td></tr><tr><th>DESCRIPTION</th><td>This course is a broad UG-level introduction to Human-Computer Interaction (HCI), with an emphasis on techniques, models, theories, and applications for designing, prototyping, and evaluating current and future interactive systems for human use. Selected topics include multimodal interaction design, usability evaluation, computer-supported cooperative work, assistive technologies, social computing, crowd computing, ubiquitous/mobile computing, virtual/augmented reality and gaming, agents and robots, and HCI applications in various domains such as education, health, urban sustainability, scientific discoveries, etc.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4901G - Human-Computer Interaction (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1865)</td>
                <td>WeFr 04:30PM - 05:50PM</td><td>Rm 6573, Lift 29-30 (60)</td><td><a href="/wcq/cgi-bin/1530/instructor/MA, Xiaojuan">MA, Xiaojuan</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[39][0][$i]); ?></td><td align="center">40</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4911">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PRE-REQUISITE</th><td>COMP 2011 OR COMP 2012H</td></tr><tr><th>EXCLUSION</th><td>ELEC 3710</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 310</td></tr><tr><th>DESCRIPTION</th><td>Basic elements of starting a new business in information technology; exploiting an "unfair" advantage; preparing a business plan; arranging financial support; accounting and legal requirements; exit strategy. Case studies of successful and failed ventures in Hong Kong and elsewhere.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4911 - IT Entrepreneurship (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1866)</td>
                <td>WeFr 01:30PM - 02:50PM</td><td>Rm 2504, Lift 25-26 (84)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Gary Shueng Han">CHAN, Gary Shueng Han</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[40][0][$i]); ?></td><td align="center">32</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971A">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 390A</td></tr><tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971A - Independent Work (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3738)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">20</td><td align="center"><?php print_r($big_course_array[41][0][$i]); ?></td><td align="center">8</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971B">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 390B</td></tr><tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971B - Independent Work (2 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3753)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Gary Shueng Han">CHAN, Gary Shueng Han</a><br><a href="/wcq/cgi-bin/1530/instructor/IEONG, Sze Chung Ricci">IEONG, Sze Chung Ricci</a></td><td align="center">20</td><td align="center"><?php print_r($big_course_array[42][0][$i]); ?></td><td align="center">17</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971C">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 390C</td></tr><tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971C - Independent Work (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1867)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MAK, Brian Kan Wing">MAK, Brian Kan Wing</a><br><a href="/wcq/cgi-bin/1530/instructor/ROSSITER, David">ROSSITER, David</a><br><a href="/wcq/cgi-bin/1530/instructor/WU, Dekai">WU, Dekai</a><br><a href="/wcq/cgi-bin/1530/instructor/YEUNG, Dit Yan">YEUNG, Dit Yan</a></td><td align="center">20</td><td align="center"><?php print_r($big_course_array[43][0][$i]); ?></td><td align="center">9</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971D">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971D - Independent Work (4 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3774)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Gary Shueng Han">CHAN, Gary Shueng Han</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[44][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971F">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971F - Independent Work (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3839)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/SANDER, Pedro">SANDER, Pedro</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[45][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4971G">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Independent studies or projects under the directed guidance of a faculty member on a computer science topic. A written report, presentation, and/or an examination are required. Enrollment in the course requires prior approval of the course instructor, and credits assigned depend on the workload. May be repeated for credits.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4971G - Independent Work (2 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3838)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/YEUNG, Dit Yan">YEUNG, Dit Yan</a></td><td align="center">2</td><td align="center"><?php print_r($big_course_array[46][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4981">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>EXCLUSION</th><td>COMP 4981H</td></tr><tr><th>DESCRIPTION</th><td>Students are expected to complete a project in an area of specialization in Computer Science and Engineering under the guidance of a faculty member. Objectives are to integrate the classroom material from several courses, and to apply them to solve practical problems. Credit load will be spread over the year. For students in the BEng in Computer Science and BEng in Computer Engineering programs under the four-year degree only.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4981 - Final Year Project (6 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1868)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">154</td><td align="center"><?php print_r($big_course_array[47][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Summer: 1; Fall: 2; Spring: 3</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4981H">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>EXCLUSION</th><td>COMP 4981</td></tr><tr><th>DESCRIPTION</th><td>Students are expected to conduct research under the supervision of a faculty member, summarize their work in an individual thesis and make a defense at the end. Credit load will be spread over the year. For students in the BEng in Computer Science and BEng in Computer Engineering programs under the four-year degree only. Instructor's approval is required for enrollment in the course.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4981H - Final Year Thesis (6 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1869)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">10</td><td align="center"><?php print_r($big_course_array[48][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Summer: 1; Fall: 2; Spring: 3</div></div><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course" >
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4982">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>EXCLUSION</th><td>COMP 4982H</td></tr><tr><th>DESCRIPTION</th><td>Students are expected to complete a project in an area of specialization in Computer Science under the guidance of a faculty member. Objectives are to integrate the classroom material from several courses, and to apply them to solve practical problems. Credit load will be spread over the year.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4982 - Final Year Project (7 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1870)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">20</td><td align="center"><?php print_r($big_course_array[49][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Fall: 3; Spring: 4</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4982H">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>EXCLUSION</th><td>COMP 4982</td></tr><tr><th>DESCRIPTION</th><td>Students are expected to conduct research work under the supervision of a faculty member, summarize their work in an individual thesis and make a presentation at the end. Enrollment in the course requires approval of the course instructor. Credit load will be spread over the year.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4982H - Final Year Thesis (Honors Study Track) (7 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3682)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">3</td><td align="center"><?php print_r($big_course_array[50][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Fall: 3; Spring: 4</div></div><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4988">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Each student of the Computer Engineering program is required to complete a final year project before graduation. The student is expected to conduct a project on a topic related to Computer Engineering and/or its application. The project is guided and conducted under the supervision of faculty members from the Department of Computer Science and Engineering and/or the Department of Electronic and Computer Engineering. Instructor's approval is required for enrollment in the course. For CPEG students under the four-year degree only. May be graded PP.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4988 - Computer Engineering Final Year Project (6 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1871)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">34</td><td align="center"><?php print_r($big_course_array[51][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Fall: 3; Spring: 3</div></div><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4989">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>DESCRIPTION</th><td>Each student taking the Research Option of the Computer Engineering program is required to complete an individual thesis before graduation. The student is expected to conduct a research on a topic related to Computer Engineering and/or its application. The thesis is conducted under the supervision of faculty members from the Department of Computer Science and Engineering and/or the Department of Electronic and Computer Engineering. Instructor's approval is required for enrollment in the course. For CPEG students under the four-year degree only. May be graded PP.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4989 - Computer Engineering Final Year Thesis (6 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1872)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">1</td><td align="center"><?php print_r($big_course_array[52][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Fall: 3; Spring: 3</div></div><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4991">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 391</td></tr><tr><th>DESCRIPTION</th><td>Each Computer Engineering student is required to complete a final year project before graduation. The project is conducted under the supervision of faculty members of the Department of Computer Science and Engineering and/or Department of Electronic and Computer Engineering. Credit load will be spread over 3 terms.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4991 - Computer Engineering Final Year Project (8 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1873)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">17</td><td align="center"><?php print_r($big_course_array[53][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Summer: 2; Fall: 3; Spring: 3</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP4992">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 392</td></tr><tr><th>DESCRIPTION</th><td>Only for honors students of the BEng Computer Engineering program. They are expected to conduct research/independent work under the supervision of faculty members of the Department of Computer Science and Engineering and/or Department of Electronic and Computer Engineering, summarize their work in an individual thesis and make a presentation at the end of the sequence. Credit load will be spread over 3 terms.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 4992 - Computer Engineering Final Year Thesis (8 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1874)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">1</td><td align="center"><?php print_r($big_course_array[54][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center"><div class="popup classnotes"><div class="popupdetail">&gt; The credit load will usually be spread in the following pattern: Summer: 2; Fall: 3; Spring: 3</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5112">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>EXCLUSION</th><td>COMP 6111B, COMP 6511A, COMP 6611A</td></tr><tr><th>DESCRIPTION</th><td>Introduction to parallel computer architectures; principles of parallel algorithm design; shared-memory programming models; message passing programming models used for cluster computing; data-parallel programming models for GPUs; case studies of parallel algorithms, systems, and applications; hands-on experience with writing parallel programs for tasks of interest.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5112 - Parallel Programming (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1074)</td>
                <td>TuTh 10:30AM - 11:50AM</td><td>Rm 2504, Lift 25-26 (84)</td><td><a href="/wcq/cgi-bin/1530/instructor/LUO, Qiong">LUO, Qiong</a></td><td class="quota" align="center"><span>60</span><div style="position: relative;"><div class="quotadetail"><b>Quota/Enrol/Avail</b><br>CSE: 40/19/21<br></div></div></td><td align="center"><?php print_r($big_course_array[55][0][$i]); ?></td><td align="center">31</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5212">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 522</td></tr><tr><th>DESCRIPTION</th><td>Introduction to major learning paradigms and techniques, basic applied statistics and information theory, decision trees, neural networks, Bayesian classification, kernel methods, clustering, density estimation, feature selection and extraction, hidden Markov models, reinforcement learning, case-based learning, model selection and various applications.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5212 - Machine Learning (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1075)</td>
                <td>TuTh 12:00PM - 01:20PM</td><td>Rm 1103, Acad Concourse (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/YEUNG, Dit Yan">YEUNG, Dit Yan</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[56][0][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5311">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 530</td></tr><tr><th>DESCRIPTION</th><td>Introduction to the relational model and SQL.  System architectures and implementation techniques of database management systems: disk and memory management, access methods, implementation of relational operators, query processing and optimization, transaction management and recovery.  Hands on experience with building the components of a small DBMS.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5311 - Database Architecture and Implementation (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1076)</td>
                <td>WeFr 03:00PM - 04:20PM</td><td>Rm 1103, Acad Concourse (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/PAPADIAS, Dimitrios">PAPADIAS, Dimitrios</a></td><td class="quota" align="center"><span>60</span><div style="position: relative;"><div class="quotadetail"><b>Quota/Enrol/Avail</b><br>CSE: 40/24/16<br></div></div></td><td align="center">26</td><td align="center"><?php print_r($big_course_array[57][0][$i]); ?></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5421">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 524</td></tr><tr><th>DESCRIPTION</th><td>Introduction to techniques for automatically describing visual data and tools for image analysis; perception of spatial organization; models of general purpose vision systems; computational and psychological models of perception.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5421 - Computer Vision (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1077)</td>
                <td>MoWe 12:00PM - 01:20PM</td><td>G009A, CYT Bldg (80)</td><td><a href="/wcq/cgi-bin/1530/instructor/TANG, Chi Keung">TANG, Chi Keung</a></td><td align="center">60</td><td align="center"><?php print_r($big_course_array[58][0][$i]); ?></td><td align="center">18</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5622">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 562</td></tr><tr><th>DESCRIPTION</th><td>Advanced principles in computer and communication networking: Internet multicast, overlay and peer-to-peer networks; wireless and mobile computing, multimedia networking, network security, selected topics of current interests: wireless protocols, wireless security, sensor networks, cloud computing, data centers, software-defined networks, network implementation, etc.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5622 - Advanced Computer Communications and Networking (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">L1 (1078)</td>
                <td>Tu 01:30PM - 04:20PM</td><td>G009A, CYT Bldg (80)</td><td><a href="/wcq/cgi-bin/1530/instructor/ZHANG, Qian">ZHANG, Qian</a></td><td class="quota" align="center"><span>60</span><div style="position: relative;"><div class="quotadetail"><b>Quota/Enrol/Avail</b><br>CSE: 40/11/29<br></div></div></td><td align="center"><?php print_r($big_course_array[59][0][$i]); ?></td><td align="center">48</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP5713">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[3-0-0:3]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 573</td></tr><tr><th>DESCRIPTION</th><td>An introductory course in Computational Geometry.  Algorithms for manipulating geometric objects.  Topics include Convex Hulls, Voronoi Diagrams, Point Location, Triangulations, Randomized Algorithms, Point-Line Duality.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 5713 - Computational Geometry (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center" rowspan="2">L1 (1079)</td>
                <td>Mo 01:30PM - 02:50PM</td><td>Rm 1103, Acad Concourse (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHENG, Siu Wing">CHENG, Siu Wing</a></td><td class="quota" align="center" rowspan="2"><span>60</span><div style="position: relative;"><div class="quotadetail"><b>Quota/Enrol/Avail</b><br>CSE: 40/21/19<br></div></div></td><td align="center" rowspan="2"><?php print_r($big_course_array[60][0][$i]); ?></td><td align="center" rowspan="2">22</td><td align="center" rowspan="2">0</td><td rowspan="2" align="center">&nbsp;</td></tr><tr class="secteven"><td>Fr 09:00AM - 10:20AM</td><td>Rm 1103, Acad Concourse (100)</td><td><a href="/wcq/cgi-bin/1530/instructor/CHENG, Siu Wing">CHENG, Siu Wing</a></td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6770">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[0-1-0:1]</td></tr><tr><th>DESCRIPTION</th><td>This one-credit course aims at providing research postgraduate students with basic training in teaching skills, research management, career development, and related professional skills. This course consists of a number of mini-workshops. Some department-specific workshops will be coordinated by Department of CSE. Graded PP, P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6770 - Professional Development in Computer Science and Engineering (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T1 (1080)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">100</td><td align="center"><?php print_r($big_course_array[61][0][$i]); ?></td><td align="center">41</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6911">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[0-1-0:0]</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 690</td></tr><tr><th>DESCRIPTION</th><td>A regular seminar presenting research problems currently under investigation. Students are expected to attend regularly. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6911 - Computer Science and Engineering Seminar I (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T1 (1081)</td>
                <td>Mo 04:00PM - 04:50PM</td><td>Lecture Theater F (134)</td><td>TBA</td><td align="center">100</td><td align="center"><?php print_r($big_course_array[62][0][$i]); ?></td><td align="center">91</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6912">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[0-1-0:1]</td></tr><tr><th>PRE-REQUISITE</th><td>COMP 6911</td></tr><tr><th>PREVIOUS CODE</th><td>COMP 691</td></tr><tr><th>DESCRIPTION</th><td>Continuation of COMP 6911. Graded P or F.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6912 - Computer Science and Engineering Seminar II (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">T1 (1082)</td>
                <td>Mo 04:00PM - 04:50PM</td><td>Lecture Theater F (134)</td><td>TBA</td><td align="center">100</td><td align="center">63</td><td align="center">61</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921E">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921E - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3852)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Lei">CHEN, Lei</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[64][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921H">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921H - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3845)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHAN, Gary Shueng Han">CHAN, Gary Shueng Han</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[65][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921M">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921M - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3653)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/QU, Huamin">QU, Huamin</a></td><td align="center">2</td><td align="center"><?php print_r($big_course_array[66][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921P">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921P - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3654)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/CHEN, Kai">CHEN, Kai</a></td><td align="center">2</td><td align="center"><?php print_r($big_course_array[67][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921R">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921R - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3811)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/HUI, Pan">HUI, Pan</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[68][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6921U">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[1 credit]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. This course is only available for exchange, visiting and visiting internship students.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6921U - Research Project (1 unit)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3832)</td>
                <td>TBA</td><td>TBA</td><td><a href="/wcq/cgi-bin/1530/instructor/MA, Xiaojuan">MA, Xiaojuan</a></td><td align="center">1</td><td align="center"><?php print_r($big_course_array[69][0][$i]); ?></td><td align="center"><strong>0</strong></td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6931A">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>VECTOR</th><td>[0-0-0:3]</td></tr><tr><th>DESCRIPTION</th><td>An independent research project carried out under the supervision of a faculty member. (Only one independent studies course may be used to satisfy the course requirements for any postgraduate program.)</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6931A - Independent Studies (3 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (3750)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">20</td><td align="center"><?php print_r($big_course_array[70][0][$i]); ?></td><td align="center">1</td><td align="center">0</td><td align="center"><div class="popup consent"><div class="popupdetail">Instructor Consent Required</div></div>&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP6990">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 699</td></tr><tr><th>DESCRIPTION</th><td>Master's thesis research supervised by a faculty member.  A successful defense of the thesis leads to Pass.  No course credit is assigned.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 6990 - MPhil Thesis Research (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1083)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">100</td><td align="center"><?php print_r($big_course_array[71][0][$i]); ?></td><td align="center">72</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
    <div class="course">
        <div class="courseanchor" style="position:relative; float:left; visibility:hidden;"><a name="COMP7990">&nbsp;</a></div>
        <div class="courseinfo">

            <div class="courseattr popup">
                <span style="font-size: 12px; color: #688; font-weight: bold;">COURSE INFO</span>
                <div class="popupdetail">
                    <table width="400">
                        <tr><th>PREVIOUS CODE</th><td>COMP 799</td></tr><tr><th>DESCRIPTION</th><td>Original and independent doctoral thesis research supervised by a faculty member.  A successful defense of the thesis leads to Pass.  No course credit is assigned.</td></tr>	</table>
                </div>
            </div>
        </div>
        <h2>COMP 7990 - Doctoral Thesis Research (0 units)</h2>
        <table class="sections" width="1012">
            <tr><th width="85">Section</th><th width="190" style="text-align: left">Date & Time</th><th width="160" style="text-align: left">Room</th><th width="190" style="text-align: left">Instructor</th><th width="45">Quota</th><th width="45">Enrol</th><th width="45">Avail</th><th width="45">Wait</th><th width="81">Remarks</th></tr>
            <tr class="newsect secteven">
                <td align="center">R1 (1084)</td>
                <td>TBA</td><td>TBA</td><td>TBA</td><td align="center">100</td><td align="center"><?php print_r($big_course_array[72][0][$i]); ?></td><td align="center">5</td><td align="center">0</td><td align="center">&nbsp;</td></tr></table>
    </div>
</div>
<script type="text/javascript">
    $(".courseanchor").css("top", (-navHeight - 15) + 'px');
    $("input#coursesearch").focus(function() {
        if ($("input#coursesearch").val()=="Course search..") {
            $("input#coursesearch").val("");
        } else {
            $("input#coursesearch").select();
        }
    });
    $("input#instructorsearch").focus(function() {
        if ($("input#instructorsearch").val()=="Instructor search..") {
            $("input#instructorsearch").val("");
        } else {
            $("input#instructorsearch").select();
        }
    });
    $("input#coursesearch").blur(function() {
        if ($("input#coursesearch").val()=="") {
            $("input#coursesearch").val("Course search..");
        }
    });
    $("input#instructorsearch").blur(function() {
        if ($("input#instructorsearch").val()=="") {
            $("input#instructorsearch").val("Instructor search..");
        }
    });
    var allcourses = ['ACCT 1010 - Accounting, Business and Society //// ACCT1010','ACCT 3020 - Financial Accounting II (ACCT 202) //// ACCT3020, ACCT 202, ACCT202','ACCT 3210 - Advanced Management Accounting (ACCT 221) //// ACCT3210, ACCT 221, ACCT221','ACCT 3610 - Functions of Law in Society and Business (ACCT 261) //// ACCT3610, ACCT 261, ACCT261','ACCT 4410 - Taxation (ACCT 341) //// ACCT4410, ACCT 341, ACCT341','ACCT 4610 - Company Law (ACCT 361) //// ACCT4610, ACCT 361, ACCT361','ACCT 5100 - Financial Accounting Foundations (ACCT 510) //// ACCT5100, ACCT 510, ACCT510','ACCT 5140 - Financial Statement Analysis (ACCT 514) //// ACCT5140, ACCT 514, ACCT514','ACCT 5160 - Corporate Financial Reporting I (ACCT 516) //// ACCT5160, ACCT 516, ACCT516','ACCT 5180 - Advanced Corporate Financial Reporting //// ACCT5180','ACCT 5210 - Managerial Accounting Foundations (ACCT 521) //// ACCT5210, ACCT 521, ACCT521','ACCT 5220 - International Treasury Management //// ACCT5220','ACCT 5310 - Fundamental and Quantitative Equity Analysis Using Accounting Information //// ACCT5310','ACCT 5410 - Taxation //// ACCT5410','ACCT 5510 - Auditing //// ACCT5510','ACCT 5630 - Business Law (ACCT 690O) //// ACCT5630, ACCT 690O, ACCT690O','ACCT 6990 - MPhil Thesis Research (ACCT 699) //// ACCT6990, ACCT 699, ACCT699','ACCT 7720 - Analytical Research in Accounting (ACCT 772) //// ACCT7720, ACCT 772, ACCT772','ACCT 7990 - Doctoral Thesis Research (ACCT 799) //// ACCT7990, ACCT 799, ACCT799','BIEN 5010 - Molecular Biology for Bioengineering (BIEN 501) //// BIEN5010, BIEN 501, BIEN501','BIEN 6800J - Bioengineering Seminar //// BIEN6800J','BIEN 6990 - MPhil Thesis Research (BIEN 699) //// BIEN6990, BIEN 699, BIEN699','BIEN 7990 - Doctoral Thesis Research (BIEN 799) //// BIEN7990, BIEN 799, BIEN799','BIPH 2010 - Introductory Biological Physics //// BIPH2010','BMED 4950D - Special Project //// BMED4950D','BMED 4950E - Special Project //// BMED4950E','BTEC 5220 - Business Operations of Biotechnology (BTEC 522) //// BTEC5220, BTEC 522, BTEC522','BTEC 5260 - Bioanalytical Technology (BTEC 526) //// BTEC5260, BTEC 526, BTEC526','BTEC 5340 - Biomarkers and Medical Devices //// BTEC5340','BTEC 6900 - Case Investigation in Biotechnology (BTEC 690) //// BTEC6900, BTEC 690, BTEC690','BTEC 6930 - Directed Biotechnological Research (BTEC 693) //// BTEC6930, BTEC 693, BTEC693','BTEC 6940 - Advanced Biotechnological Research //// BTEC6940','CBME 5210 - Advanced Separation Processes //// CBME5210','CBME 5830 - Electrochemical Energy Technologies //// CBME5830','CBME 5840 - Nanomaterials for Chemical Engineering Applications //// CBME5840','CBME 6000C - Gas and Particulates Removal Processes //// CBME6000C','CBME 6980B - Independent Project //// CBME6980B','CENG 1000 - Introduction to Chemical and Biomolecular Engineering //// CENG1000','CENG 1600 - Biotechnology and Its Business Opportunities (CENG 109) //// CENG1600, CENG 109, CENG109','CENG 1980 - Industrial Training (CENG 098) //// CENG1980, CENG 098, CENG098','CENG 1990 - Industrial Training (CENG 099) //// CENG1990, CENG 099, CENG099','CENG 2210 - Chemical Engineering Thermodynamics (CENG 131) //// CENG2210, CENG 131, CENG131','CENG 2220 - Process Fluid Mechanics (CENG 231) //// CENG2220, CENG 231, CENG231','CENG 3120 - Process Design and Integration (CENG 202) //// CENG3120, CENG 202, CENG202','CENG 3220 - Heat and Mass Transfer (CENG 241) //// CENG3220, CENG 241, CENG241','CENG 3920 - Chemical Engineering Laboratory II (CENG 298) //// CENG3920, CENG 298, CENG298','CENG 3926 - Biomolecular Engineering Laboratory (CENG 294) //// CENG3926, CENG 294, CENG294','CENG 3927 - Environmental Engineering Laboratory (CENG 296) //// CENG3927, CENG 296, CENG296','CENG 4000D - Advanced Chemical Product Design with Business Thinking //// CENG4000D','CENG 4630 - Food Processing Technology (CENG 4000C) //// CENG4630, CENG 4000C, CENG4000C','CENG 4640 - Biomolecular Engineering (CENG 364) //// CENG4640, CENG 364, CENG364','CENG 4670 - Pharmaceutical Engineering (CENG 367) //// CENG4670, CENG 367, CENG367','CENG 4720 - Environmental Impact Assessment and Management Systems (CENG 372) //// CENG4720, CENG 372, CENG372','CENG 4911 - Chemical Engineering Project //// CENG4911','CENG 4912 - Chemical and Environmental Engineering Project //// CENG4912','CENG 4913 - Chemical and Biomolecular Engineering Project //// CENG4913','CENG 4980G - Investigation Project //// CENG4980G','CENG 5100 - Advanced Reaction Engineering (CENG 510) //// CENG5100, CENG 510, CENG510','CENG 5300 - Advanced Chemical Engineering Thermodynamics (CENG 6000A, CENG 530) //// CENG5300, CENG 6000A, CENG 530, CENG6000A,CENG530','CENG 5910 - Energy, Environment and Sustainable Development //// CENG5910','CENG 6000E - Electrochemical Energy Technology //// CENG6000E','CENG 6000I - Advanced Chemical Product Design with Business Thinking //// CENG6000I','CENG 6770 - Professional Development in Chemical and Biomolecular Engineering //// CENG6770','CENG 6800J - Chemical and Biomolecular Engineering Seminar //// CENG6800J','CENG 6900C - Independent Study (CENG 690C) //// CENG6900C, CENG 690C, CENG690C','CENG 6990 - MPhil Thesis Research (CENG 699) //// CENG6990, CENG 699, CENG699','CENG 7990 - Doctoral Thesis Research (CENG 799) //// CENG7990, CENG 799, CENG799','CHEM 1004 - Chemistry in Everyday Life //// CHEM1004','CHEM 1010 - General Chemistry IA //// CHEM1010','CHEM 1020 - General Chemistry IB //// CHEM1020','CHEM 1030 - General Chemistry II //// CHEM1030','CHEM 1050 - Laboratory for General Chemistry I //// CHEM1050','CHEM 1055 - Laboratory for General Chemistry II //// CHEM1055','CHEM 2111 - Fundamentals of Organic Chemistry //// CHEM2111','CHEM 2155 - Fundamental Organic Chemistry Laboratory //// CHEM2155','CHEM 2311 - Analytical Chemistry //// CHEM2311','CHEM 2355 - Fundamental Analytical Chemistry Laboratory //// CHEM2355','CHEM 3120 - Organic Chemistry II (CHEM 212) //// CHEM3120, CHEM 212, CHEM212','CHEM 3220 - Inorganic Chemistry II (CHEM 232) //// CHEM3220, CHEM 232, CHEM232','CHEM 3320 - Instrumental Analysis (CHEM 244) //// CHEM3320, CHEM 244, CHEM244','CHEM 3420 - Physical Chemistry II (CHEM 222) //// CHEM3420, CHEM 222, CHEM222','CHEM 3550 - Synthetic Chemistry Laboratory //// CHEM3550','CHEM 3555 - Molecular Characterization Chemistry Laboratory //// CHEM3555','CHEM 4110 - Structural Elucidation in Organic Chemistry (CHEM 312) //// CHEM4110, CHEM 312, CHEM312','CHEM 4130 - Medicinal Chemistry //// CHEM4130','CHEM 4230 - Materials Characterization Method //// CHEM4230','CHEM 4330 - Separation Science //// CHEM4330','CHEM 4620 - Organometallic Chemistry (CHEM 332) //// CHEM4620, CHEM 332, CHEM332','CHEM 4640 - Chemistry for Advanced Solar Cell Technologies //// CHEM4640','CHEM 4680C - Undergraduate Research (CHEM 398C) //// CHEM4680C, CHEM 398C, CHEM398C','CHEM 4689 - Capstone Project //// CHEM4689','CHEM 4690 - Capstone Research //// CHEM4690','CHEM 5160 - Advanced Medicinal Chemistry (CHEM 516) //// CHEM5160, CHEM 516, CHEM516','CHEM 5210 - Computational Chemistry (CHEM 521) //// CHEM5210, CHEM 521, CHEM521','CHEM 5340 - Chemical X-ray Crystallography (CHEM 534) //// CHEM5340, CHEM 534, CHEM534','CHEM 5880 - Polymer Chemistry (CHEM 588) //// CHEM5880, CHEM 588, CHEM588','CHEM 6000J - Chemistry Seminar //// CHEM6000J','CHEM 6770 - Professional Development in Science (Chemistry) //// CHEM6770','CHEM 6980A - Research Project (CHEM 698A) //// CHEM6980A, CHEM 698A, CHEM698A','CHEM 6990 - MPhil Thesis Research (CHEM 699) //// CHEM6990, CHEM 699, CHEM699','CHEM 7990 - Doctoral Thesis Research (CHEM 799) //// CHEM7990, CHEM 799, CHEM799','CHMS 5050 - Optical and Electrical Methods //// CHMS5050','CHMS 5110 - Environmental and Food Analysis //// CHMS5110','CHMS 5130 - Materials Analysis //// CHMS5130','CHMS 5140 - Laboratory Management //// CHMS5140','CHMS 5201 - Analytical Instrumentation Laboratory I //// CHMS5201','CHMS 6980 - Analytical Research Project //// CHMS6980','CIEM 5160 - Construction Financial Management (CIEM 516) //// CIEM5160, CIEM 516, CIEM516','CIEM 5340 - Earthquake Engineering (CIEM 534) //// CIEM5340, CIEM 534, CIEM534','CIEM 5630 - Traffic Control Fundamentals and Practice (CIEM 563) //// CIEM5630, CIEM 563, CIEM563','CIEM 5790 - Slope Engineering and Management (CIEM 6000B) //// CIEM5790, CIEM 6000B, CIEM6000B','CIEM 5810 - Engineering Risk, Reliability and Decision (CIEM 581) //// CIEM5810, CIEM 581, CIEM581','CIEM 6000G - Façade Design and Materials //// CIEM6000G','CIEM 6000H - Design and Construction of Tall Buildings //// CIEM6000H','CIEM 6000I - Sustainable River and Water Management //// CIEM6000I','CIEM 6980 - MSc Project (CIEM 698) //// CIEM6980, CIEM 698, CIEM698','CIVL 1100 - Discovering Civil and Environmental Engineering //// CIVL1100','CIVL 1140 - Environmental Quality Control and Improvement (CIVL 142) //// CIVL1140, CIVL 142, CIVL142','CIVL 1160 - Civil Engineering and Modern Society (CIVL 161) //// CIVL1160, CIVL 161, CIVL161','CIVL 1170 - Climate Change, Sustainability and Big History (CIVL 171) //// CIVL1170, CIVL 171, CIVL171','CIVL 2020 - Industrial Training (CIVL 099) //// CIVL2020, CIVL 099, CIVL099','CIVL 2110 - Statics (CIVL 113) //// CIVL2110, CIVL 113, CIVL113','CIVL 2120 - Mechanics of Materials (CIVL 112) //// CIVL2120, CIVL 112, CIVL112','CIVL 2170 - Infrastructure Systems Engineering and Management //// CIVL2170','CIVL 2410 - Environmental Assessment and Management (CIVL 141) //// CIVL2410, CIVL 141, CIVL141','CIVL 2510 - Fluid Mechanics (CIVL 151) //// CIVL2510, CIVL 151, CIVL151','CIVL 3020 - Internship Training (CIVL 098) //// CIVL3020, CIVL 098, CIVL098','CIVL 3210 - Introduction to Construction Management //// CIVL3210','CIVL 3310 - Structural Analysis (CIVL 231) //// CIVL3310, CIVL 231, CIVL231','CIVL 3320 - Reinforced Concrete Design (CIVL 232) //// CIVL3320, CIVL 232, CIVL232','CIVL 3420 - Water and Wastewater Engineering (CIVL 2420, CIVL 242) //// CIVL3420, CIVL 2420, CIVL 242, CIVL2420,CIVL242','CIVL 3610 - Traffic and Transportation Engineering (CIVL 261) //// CIVL3610, CIVL 261, CIVL261','CIVL 3740 - Geotechnical Analysis and Design (CIVL 4720, CIVL 372) //// CIVL3740, CIVL 4720, CIVL 372, CIVL4720,CIVL372','CIVL 4100C - Construction Management Practices (CIVL 300W) //// CIVL4100C, CIVL 300W, CIVL300W','CIVL 4330 - Introduction to Structural Dynamics (CIVL 332) //// CIVL4330, CIVL 332, CIVL332','CIVL 4350 - Design of Structural Systems (CIVL 335) //// CIVL4350, CIVL 335, CIVL335','CIVL 4370 - Computer Methods of Structural Analysis (CIVL 337) //// CIVL4370, CIVL 337, CIVL337','CIVL 4430 - Environmental Impact Assessment (CIVL 343) //// CIVL4430, CIVL 343, CIVL343','CIVL 4710 - Soil Slope Engineering (CIVL 4100D) //// CIVL4710, CIVL 4100D, CIVL4100D','CIVL 4760 - Introduction to Rock Mechanics (CIVL 376) //// CIVL4760, CIVL 376, CIVL376','CIVL 4910 - Civil and Environmental Engineering Final Year Project //// CIVL4910','CIVL 4920 - Civil and Environmental Engineering Final Year Thesis //// CIVL4920','CIVL 4990 - Civil Engineering Project //// CIVL4990','CIVL 5110 - Engineering Risk, Reliability and Decision (CIVL 581) //// CIVL5110, CIVL 581, CIVL581','CIVL 5410 - Physical-Chemical Water/Wastewater Treatment (CIVL 541) //// CIVL5410, CIVL 541, CIVL541','CIVL 5430 - Aquatic Chemistry (CIVL 543) //// CIVL5430, CIVL 543, CIVL543','CIVL 5470 - Industrial Wastewater Treatment (CIVL 547) //// CIVL5470, CIVL 547, CIVL547','CIVL 5550 - Modeling Fluid Systems (CIVL 555) //// CIVL5550, CIVL 555, CIVL555','CIVL 5630 - Traffic Control Fundamentals (CIVL 563) //// CIVL5630, CIVL 563, CIVL563','CIVL 5720 - Advanced Foundation Design (CIVL 572) //// CIVL5720, CIVL 572, CIVL572','CIVL 5730 - Theoretical and Computational Soil Mechanics (CIVL 573) //// CIVL5730, CIVL 573, CIVL573','CIVL 5840 - Advanced Concrete Technology (CIVL 524) //// CIVL5840, CIVL 524, CIVL524','CIVL 5850 - Renovation Engineering (CIVL 525) //// CIVL5850, CIVL 525, CIVL525','CIVL 6010A - Directed Studies (CIVL 610A) //// CIVL6010A, CIVL 610A, CIVL610A','CIVL 6010C - Directed Studies (CIVL 610C) //// CIVL6010C, CIVL 610C, CIVL610C','CIVL 6050K - Civil Engineering Seminar I //// CIVL6050K','CIVL 6060P - Civil Engineering Seminar II //// CIVL6060P','CIVL 6770 - Professional Development in Civil and Environmental Engineering //// CIVL6770','CIVL 6990 - MPhil Thesis Research (CIVL 699) //// CIVL6990, CIVL 699, CIVL699','CIVL 7990 - Doctoral Thesis Research (CIVL 799) //// CIVL7990, CIVL 799, CIVL799','COMP 1001 - Exploring Multimedia and Internet Computing (COMP 101) //// COMP1001, COMP 101, COMP101','COMP 1021 - Introduction to Computer Science //// COMP1021','COMP 1022P - Introduction to Computing with Java //// COMP1022P','COMP 1022Q - Introduction to Computing with Excel VBA //// COMP1022Q','COMP 1029A - Introduction to Mobile Application Development Using Android (COMP 4901C) //// COMP1029A, COMP 4901C, COMP4901C','COMP 1029C - C Programming Bridging Course //// COMP1029C','COMP 1029J - Java Programming Bridging Course //// COMP1029J','COMP 1029P - Python Programming Bridging Course //// COMP1029P','COMP 1029V - Excel VBA Programming Bridging Course //// COMP1029V','COMP 1942 - Exploring and Visualizing Data (COMP 192) //// COMP1942, COMP 192, COMP192','COMP 1991 - Industrial Experience //// COMP1991','COMP 1999 - Industrial Training (COMP 2999, COMP 099) //// COMP1999, COMP 2999, COMP 099, COMP2999,COMP099','COMP 2011 - Introduction to Object-oriented Programming //// COMP2011','COMP 2012 - Object-Oriented Programming and Data Structures (COMP 152) //// COMP2012, COMP 152, COMP152','COMP 2021 - Unix and Script Programming (COMP 111) //// COMP2021, COMP 111, COMP111','COMP 2611 - Computer Organization (COMP 180) //// COMP2611, COMP 180, COMP180','COMP 2711 - Discrete Mathematical Tools for Computer Science (COMP 170) //// COMP2711, COMP 170, COMP170','COMP 2900 - Academic and Professional Development II (COMP 002) //// COMP2900, COMP 002, COMP002','COMP 3021 - Java Programming (COMP 201) //// COMP3021, COMP 201, COMP201','COMP 3071 - Honors Competitive Programming (COMP 291) //// COMP3071, COMP 291, COMP291','COMP 3111 - Software Engineering (COMP 211) //// COMP3111, COMP 211, COMP211','COMP 3211 - Fundamentals of Artificial Intelligence (COMP 221) //// COMP3211, COMP 221, COMP221','COMP 3311 - Database Management Systems (COMP 231) //// COMP3311, COMP 231, COMP231','COMP 3511 - Operating Systems (COMP 252) //// COMP3511, COMP 252, COMP252','COMP 3711 - Design and Analysis of Algorithms (COMP 271) //// COMP3711, COMP 271, COMP271','COMP 3721 - Theory of Computation (COMP 272) //// COMP3721, COMP 272, COMP272','COMP 3900 - Academic and Professional Development III (COMP 003) //// COMP3900, COMP 003, COMP003','COMP 4111 - Software Engineering Practices //// COMP4111','COMP 4211 - Machine Learning (COMP 328) //// COMP4211, COMP 328, COMP328','COMP 4321 - Search Engines for Web and Enterprise Data (COMP 336) //// COMP4321, COMP 336, COMP336','COMP 4332 - Big Data Mining and Management //// COMP4332','COMP 4421 - Image Processing (COMP 344) //// COMP4421, COMP 344, COMP344','COMP 4431 - Multimedia Computing (COMP 343) //// COMP4431, COMP 343, COMP343','COMP 4441 - Computer Music (COMP 342) //// COMP4441, COMP 342, COMP342','COMP 4511 - System and Kernel Programming in Linux //// COMP4511','COMP 4521 - Mobile Application Development (COMP 355) //// COMP4521, COMP 355, COMP355','COMP 4621 - Computer Communication Networks I (COMP 361) //// COMP4621, COMP 361, COMP361','COMP 4631 - Computer and Communication Security (COMP 364) //// COMP4631, COMP 364, COMP364','COMP 4900 - Academic and Professional Development //// COMP4900','COMP 4901E - Mobile Application Development Projects //// COMP4901E','COMP 4901G - Human-Computer Interaction //// COMP4901G','COMP 4911 - IT Entrepreneurship (COMP 310) //// COMP4911, COMP 310, COMP310','COMP 4971A - Independent Work (COMP 390A) //// COMP4971A, COMP 390A, COMP390A','COMP 4971B - Independent Work (COMP 390B) //// COMP4971B, COMP 390B, COMP390B','COMP 4971C - Independent Work (COMP 390C) //// COMP4971C, COMP 390C, COMP390C','COMP 4971D - Independent Work //// COMP4971D','COMP 4971F - Independent Work //// COMP4971F','COMP 4971G - Independent Work //// COMP4971G','COMP 4981 - Final Year Project //// COMP4981','COMP 4981H - Final Year Thesis //// COMP4981H','COMP 4982 - Final Year Project //// COMP4982','COMP 4982H - Final Year Thesis (Honors Study Track) //// COMP4982H','COMP 4988 - Computer Engineering Final Year Project //// COMP4988','COMP 4989 - Computer Engineering Final Year Thesis //// COMP4989','COMP 4991 - Computer Engineering Final Year Project (COMP 391) //// COMP4991, COMP 391, COMP391','COMP 4992 - Computer Engineering Final Year Thesis (COMP 392) //// COMP4992, COMP 392, COMP392','COMP 5112 - Parallel Programming //// COMP5112','COMP 5212 - Machine Learning (COMP 522) //// COMP5212, COMP 522, COMP522','COMP 5311 - Database Architecture and Implementation (COMP 530) //// COMP5311, COMP 530, COMP530','COMP 5421 - Computer Vision (COMP 524) //// COMP5421, COMP 524, COMP524','COMP 5622 - Advanced Computer Communications and Networking (COMP 562) //// COMP5622, COMP 562, COMP562','COMP 5713 - Computational Geometry (COMP 573) //// COMP5713, COMP 573, COMP573','COMP 6770 - Professional Development in Computer Science and Engineering //// COMP6770','COMP 6911 - Computer Science and Engineering Seminar I (COMP 690) //// COMP6911, COMP 690, COMP690','COMP 6912 - Computer Science and Engineering Seminar II (COMP 691) //// COMP6912, COMP 691, COMP691','COMP 6921E - Research Project //// COMP6921E','COMP 6921H - Research Project //// COMP6921H','COMP 6921M - Research Project //// COMP6921M','COMP 6921P - Research Project //// COMP6921P','COMP 6921R - Research Project //// COMP6921R','COMP 6921U - Research Project //// COMP6921U','COMP 6931A - Independent Studies //// COMP6931A','COMP 6990 - MPhil Thesis Research (COMP 699) //// COMP6990, COMP 699, COMP699','COMP 7990 - Doctoral Thesis Research (COMP 799) //// COMP7990, COMP 799, COMP799','CPEG 1971 - Industrial Experience (ELEC 1971) //// CPEG1971, ELEC 1971, ELEC1971','CPEG 2930 - Academic and Professional Development I (ELEC 2930, ELEC 010) //// CPEG2930, ELEC 2930, ELEC 010, ELEC2930,ELEC010','CPEG 3930 - Academic and Professional Development II (ELEC 3930, ELEC 020) //// CPEG3930, ELEC 3930, ELEC 020, ELEC3930,ELEC020','CSIT 5100 - Object-Oriented Software Development of Enterprise Systems (CSIT 510) //// CSIT5100, CSIT 510, CSIT510','CSIT 5130 - Building Applications for Computational Finance (CSIT 513, CSIT 600L) //// CSIT5130, CSIT 513, CSIT 600L, CSIT513,CSIT600L','CSIT 5300 - Advanced Database Systems (CSIT 530) //// CSIT5300, CSIT 530, CSIT530','CSIT 5400 - Computer Graphics (CSIT 540) //// CSIT5400, CSIT 540, CSIT540','CSIT 5410 - Recognition Systems (CSIT 600M) //// CSIT5410, CSIT 600M, CSIT600M','CSIT 6000D - Introduction to Big Data //// CSIT6000D','CSIT 6000E - Advanced Algorithms //// CSIT6000E','CSIT 6910A - Independent Project (CSIT 691A) //// CSIT6910A, CSIT 691A, CSIT691A','CSIT 6910D - Independent Project (CSIT 691D) //// CSIT6910D, CSIT 691D, CSIT691D','ECON 2103 - Principles of Microeconomics (ECON 110) //// ECON2103, ECON 110, ECON110','ECON 2113 - Microeconomics (ECON 111) //// ECON2113, ECON 111, ECON111','ECON 2123 - Macroeconomics (ECON 112) //// ECON2123, ECON 112, ECON112','ECON 3014 - Managerial Microeconomics (ECON 214) //// ECON3014, ECON 214, ECON214','ECON 3024 - Managerial Macroeconomics (ECON 216) //// ECON3024, ECON 216, ECON216','ECON 3113 - Microeconomic Theory I (ECON 198) //// ECON3113, ECON 198, ECON198','ECON 3123 - Macroeconomic Theory I (ECON 199) //// ECON3123, ECON 199, ECON199','ECON 3334 - Introduction to Econometrics (ECON 233) //// ECON3334, ECON 233, ECON233','ECON 4254 - Law and Economics (ECON 325) //// ECON4254, ECON 325, ECON325','ECON 4304 - Time Series Econometrics and Business Forecasting (ECON 330) //// ECON4304, ECON 330, ECON330','ECON 4584 - Topics in Economic Growth (ECON 4999C) //// ECON4584, ECON 4999C, ECON4999C','ECON 4670 - Economics Research and Communication (ECON 367) //// ECON4670, ECON 367, ECON367','ECON 4959B - Independent Study //// ECON4959B','ECON 4999G - Topics in Business Data Analysis //// ECON4999G','ECON 4999I - Financial Macroeconomics //// ECON4999I','ECON 5120 - China in the Global Economy (ECON 512) //// ECON5120, ECON 512, ECON512','ECON 5180 - Strategy and Organization (ECON 518, ECON 612D) //// ECON5180, ECON 518, ECON 612D, ECON518,ECON612D','ECON 5190 - Games and Strategic Behavior (ECON 6100M) //// ECON5190, ECON 6100M, ECON6100M','ECON 5220 - Microeconomic Theory II (ECON 522) //// ECON5220, ECON 522, ECON522','ECON 5260 - Macroeconomic Theory II (ECON 526) //// ECON5260, ECON 526, ECON526','ECON 5300 - Econometrics (ECON 530) //// ECON5300, ECON 530, ECON530','ECON 5320 - Topics in Growth and Development (ECON 6100I) //// ECON5320, ECON 6100I, ECON6100I','ECON 5330 - Information Economics (ECON 6100H) //// ECON5330, ECON 6100H, ECON6100H','ECON 5370 - Using Data for Economics Analysis (ECON 6100G) //// ECON5370, ECON 6100G, ECON6100G','ECON 5390 - Labor Economics (ECON 6100K) //// ECON5390, ECON 6100K, ECON6100K','ECON 5400 - Money and Macroeconomics (ECON 540, ECON 610B) //// ECON5400, ECON 540, ECON 610B, ECON540,ECON610B','ECON 5410 - Value Investing from an Economic Perspective (ECON 541, ECON 610C) //// ECON5410, ECON 541, ECON 610C, ECON541,ECON610C','ECON 5420 - Topics in Development Economics (ECON 6100L) //// ECON5420, ECON 6100L, ECON6100L','ECON 5570 - Advanced Topics in Macroeconomics (ECON 6120A) //// ECON5570, ECON 6120A, ECON6120A','ECON 6100S - Financial Economics II: Corporate Finance //// ECON6100S','ECON 6100T - International Macroeconomics and the Chinese Economy //// ECON6100T','ECON 6100U - China Economic Relations with the South : Key Implications //// ECON6100U','ECON 6100V - China’s Economic Model : Key Insights and the Way Forward //// ECON6100V','ECON 6120I - Industrial Organization //// ECON6120I','ECON 6950 - MSc Project (ECON 695) //// ECON6950, ECON 695, ECON695','ECON 6990 - MPhil Thesis Research (ECON 699) //// ECON6990, ECON 699, ECON699','ECON 7990 - Doctoral Thesis Research (ECON 799) //// ECON7990, ECON 799, ECON799','EEMT 5160 - Transportation and Logistics Management (EEMT 516) //// EEMT5160, EEMT 516, EEMT516','EEMT 5260 - Product Development Management (EEMT 526) //// EEMT5260, EEMT 526, EEMT526','EEMT 5360 - IT System for Global Enterprise (EEMT 536) //// EEMT5360, EEMT 536, EEMT536','EEMT 5530 - Financial Engineering and Risk Management (EEMT 6000A) //// EEMT5530, EEMT 6000A, EEMT6000A','EEMT 6900 - Independent Study //// EEMT6900','EESM 5020 - Digital VLSI System Design and Design Automation (EESM 516) //// EESM5020, EESM 516, EESM516','EESM 5120 - Advanced Analog IC Analysis and Design (EESM 504) //// EESM5120, EESM 504, EESM504','EESM 5310 - Power Management Circuits and Systems //// EESM5310','EESM 5540 - Introduction to Telecommunication Networks (EESM 540) //// EESM5540, EESM 540, EESM540','EESM 5546 - Wireless Communication Systems (EESM 546) //// EESM5546, EESM 546, EESM546','EESM 5547 - Multimedia Signal Processing (EESM 547) //// EESM5547, EESM 547, EESM547','EESM 5620 - Flat Panel Displays (EESM 525) //// EESM5620, EESM 525, EESM525','EESM 5670 - Advanced Computer and Networking Architectures (EESM 581) //// EESM5670, EESM 581, EESM581','EESM 5700 - Image and Video Signal Processing (EESM 532) //// EESM5700, EESM 532, EESM532','EESM 5720 - Signal Analysis and Pattern Recognition (EESM 534) //// EESM5720, EESM 534, EESM534','EESM 5810 - Business Development for Technological Innovations (EESM 5900E) //// EESM5810, EESM 5900E, EESM5900E','EESM 5900F - Current and Emerging Technologies in Telecommunications //// EESM5900F','EESM 6900 - Independent Study (EESM 690) //// EESM6900, EESM 690, EESM690','EESM 6980A - MSc Project (EESM 698A) //// EESM6980A, EESM 698A, EESM698A','EESM 6980G - MSc Project (EESM 698G) //// EESM6980G, EESM 698G, EESM698G','EESM 6980H - MSc Project (EESM 698H) //// EESM6980H, EESM 698H, EESM698H','EESM 6980I - MSc Project (EESM 698I) //// EESM6980I, EESM 698I, EESM698I','ELEC 1020 - Media Production: Technology and Design (ELEC 005) //// ELEC1020, ELEC 005, ELEC005','ELEC 1100 - Introduction to Electro-Robot Design (ELEC 125) //// ELEC1100, ELEC 125, ELEC125','ELEC 1200 - A System View of Communications: from Signals to Packets (ELEC 121) //// ELEC1200, ELEC 121, ELEC121','ELEC 1970 - Industrial Training (ELEC 097) //// ELEC1970, ELEC 097, ELEC097','ELEC 1990 - Industrial Training (ELEC 099) //// ELEC1990, ELEC 099, ELEC099','ELEC 1991 - Industrial Experience (Electronic Engineering) //// ELEC1991','ELEC 2100 - Signals and Systems (ELEC 211) //// ELEC2100, ELEC 211, ELEC211','ELEC 2200 - Digital Circuits and Systems (ELEC 151) //// ELEC2200, ELEC 151, ELEC151','ELEC 2300 - Computer Organization (ELEC 152) //// ELEC2300, ELEC 152, ELEC152','ELEC 2400 - Electronic Circuits (ELEC 102) //// ELEC2400, ELEC 102, ELEC102','ELEC 2600 - Probability and Random Processes in Engineering (ELEC 210) //// ELEC2600, ELEC 210, ELEC210','ELEC 2910 - Academic and Professional Development I (ELEC 195) //// ELEC2910, ELEC 195, ELEC195','ELEC 3100 - Signal Processing and Communications (ELEC 214) //// ELEC3100, ELEC 214, ELEC214','ELEC 3200 - System Modeling, Analysis and Control (ELEC 271) //// ELEC3200, ELEC 271, ELEC271','ELEC 3300 - Introduction to Embedded Systems (ELEC 254) //// ELEC3300, ELEC 254, ELEC254','ELEC 3600 - Electromagnetics: From Wireless to Photonic Applications (ELEC 241) //// ELEC3600, ELEC 241, ELEC241','ELEC 3910 - Academic and Professional Development II (ELEC 295) //// ELEC3910, ELEC 295, ELEC295','ELEC 4010H - Introduction to Smart Electric Power Systems //// ELEC4010H','ELEC 4120 - Computer Communication Networks (ELEC 315) //// ELEC4120, ELEC 315, ELEC315','ELEC 4220 - Introduction to Robotics: From Mobile Robots to Manipulators (ELEC 4010A) //// ELEC4220, ELEC 4010A, ELEC4010A','ELEC 4310 - Embedded System Design (ELEC 302) //// ELEC4310, ELEC 302, ELEC302','ELEC 4330 - Mobile Embedded Systems: Hardware Platform, Software Development, and Applications (ELEC 4010B) //// ELEC4330, ELEC 4010B, ELEC4010B','ELEC 4420 - Analogue Integrated Circuits Design and Analysis (ELEC 304) //// ELEC4420, ELEC 304, ELEC304','ELEC 4430 - Integrated Power Electronics (ELEC 351) //// ELEC4430, ELEC 351, ELEC351','ELEC 4520 - Integrated Circuit Fabrication Technology (ELEC 322) //// ELEC4520, ELEC 322, ELEC322','ELEC 4530 - Fundamentals of Photovoltaic and Renewable Energy (ELEC 4010C) //// ELEC4530, ELEC 4010C, ELEC4010C','ELEC 4610 - Engineering Optics (ELEC 308) //// ELEC4610, ELEC 308, ELEC308','ELEC 4900 - Final Year Design Project //// ELEC4900','ELEC 4901 - Final Year Thesis //// ELEC4901','ELEC 4907 - Final Year Project (ELEC 367) //// ELEC4907, ELEC 367, ELEC367','ELEC 4918 - Computer Engineering Final Year Project //// ELEC4918','ELEC 4930 - Academic and Professional Development III (ELEC 030) //// ELEC4930, ELEC 030, ELEC030','ELEC 4940A - Independent Study //// ELEC4940A','ELEC 5050 - Advanced CMOS Devices (ELEC 505) //// ELEC5050, ELEC 505, ELEC505','ELEC 5080 - Integrated-Circuit Fabrication Laboratory (ELEC 508) //// ELEC5080, ELEC 508, ELEC508','ELEC 5110 - Nanoelectronic Materials for Energy Technologies //// ELEC5110','ELEC 5180 - RF/Microwave Circuit Design and Measurement (ELEC 518) //// ELEC5180, ELEC 518, ELEC518','ELEC 5210 - Advanced Topics in Nanoelectronics (ELEC 521) //// ELEC5210, ELEC 521, ELEC521','ELEC 5460 - Advanced Stochastic Optimization for Wireless Systems (ELEC 546) //// ELEC5460, ELEC 546, ELEC546','ELEC 5510 - Switch Mode Power Converters (ELEC 551) //// ELEC5510, ELEC 551, ELEC551','ELEC 5530 - Mixed-Signal Integrated Bio-Sensory Circuit Design (ELEC 6910C, ELEC 692W) //// ELEC5530, ELEC 6910C, ELEC 692W, ELEC6910C,ELEC692W','ELEC 5810 - Introduction to Bioinformatics Algorithms (ELEC 581, ELEC 692T) //// ELEC5810, ELEC 581, ELEC 692T, ELEC581,ELEC692T','ELEC 5900 - Modern Engineering Research Methodologies (ELEC 590, ELEC692Y) //// ELEC5900, ELEC 590, ELEC692Y, ELEC590,ELEC692Y','ELEC 6770 - Professional Development in Electronic and Computer Engineering //// ELEC6770','ELEC 6900A - Independent Study (ELEC 690) //// ELEC6900A, ELEC 690, ELEC690','ELEC 6910H - Random Matrix Theory and Applications //// ELEC6910H','ELEC 6910K - Advanced Computer Architecture //// ELEC6910K','ELEC 6950A - Departmental Seminar (ELEC 695A) //// ELEC6950A, ELEC 695A, ELEC695A','ELEC 6950B - Departmental Seminar (ELEC 695B) //// ELEC6950B, ELEC 695B, ELEC695B','ELEC 6990 - MPhil Thesis Research (ELEC 699) //// ELEC6990, ELEC 699, ELEC699','ELEC 7990 - Doctoral Thesis Research (ELEC 799) //// ELEC7990, ELEC 799, ELEC799','EMBA 5010 - Frameworks for Strategic Analysis (EMBA 501) //// EMBA5010, EMBA 501, EMBA501','EMBA 5070 - Statistical Decision Analysis (EMBA 507) //// EMBA5070, EMBA 507, EMBA507','EMBA 5660 - Capstone //// EMBA5660','EMBA 5710 - Leading a Global Company //// EMBA5710','ENEG 5050 - Energy, Environment and Sustainable Development //// ENEG5050','ENEG 5200 - Nanoelectronic Materials for Energy Technologies //// ENEG5200','ENGG 1010 - Academic Orientation (ENGG 001) //// ENGG1010, ENGG 001, ENGG001','ENGG 1110 - Engineering Solutions to Grand Challenges of the 21st Century (ENGG 150B) //// ENGG1110, ENGG 150B, ENGG150B','ENGG 1130 - The Impact and Value of Technology Innovation (MECH 300J) //// ENGG1130, MECH 300J, MECH300J','ENGG 1150 - Information Technology Revolution: Past, Present and Future //// ENGG1150','ENGG 1200 - Engineering Team Design Experience: Airship (ENGG 2990D) //// ENGG1200, ENGG 2990D, ENGG2990D','ENGG 2010 - Engineering Seminar Series //// ENGG2010','ENGG 2900D - Community Services Project: Underwater Robot Community Engagement Project //// ENGG2900D','ENGG 2900F - Community Services Project: Waterproofing of YMCA Centre //// ENGG2900F','ENGG 2990F - Undergraduate Student-initiated Experiential Learning //// ENGG2990F','ENGG 2990G - Undergraduate Student-initiated Experiential Learning //// ENGG2990G','ENGG 2990H - Critical Steps to Successful Technology Startups //// ENGG2990H','ENGG 4950M - Engineering Special Project: ABU Robocon 2016 //// ENGG4950M','ENGG 4950N - Engineering Special Project: MATE ROV 2016 //// ENGG4950N','ENGG 4950O - Engineering Special Project: The NXP Cup National University Students Intelligent Car Race 2016 //// ENGG4950O','ENGG 4950P - Engineering Special Project: RoboMasters Robot Contest //// ENGG4950P','ENGG 6000D - Technology Leadership and Entrepreneurship Seminar //// ENGG6000D','ENGG 6770 - Professional Development in Engineering //// ENGG6770','ENGG 6990 - MPhil Thesis Research //// ENGG6990','ENTR 3020 - Identifying Innovation Opportunities //// ENTR3020','ENVR 1030 - Environment and Health (ENVR 003) //// ENVR1030, ENVR 003, ENVR003','ENVR 1040 - The Environment and Society - A Comprehensive Perspective (ENVR 004) //// ENVR1040, ENVR 004, ENVR004','ENVR 1050 - The Sustainable Citizen (ENVR 005) //// ENVR1050, ENVR 005, ENVR005','ENVR 2001 - Academic and Professional Development I (ENVR 1000) //// ENVR2001, ENVR 1000, ENVR1000','ENVR 3001 - Academic and Professional Development II (ENVR 2000) //// ENVR3001, ENVR 2000, ENVR2000','ENVR 3010C - Circular and Sharing Economy: Principles, Practices and Prospects in Hong Kong //// ENVR3010C','ENVR 3010D - Sustainable UST: Management Ideas in Action II //// ENVR3010D','ENVR 3210 - Environmental Technology //// ENVR3210','ENVR 3310 - Green Business Strategy //// ENVR3310','ENVR 3410 - Economics for Environmental Policy and Management //// ENVR3410','ENVR 4000L - Community EXPLORE: Science to Action II //// ENVR4000L','ENVR 4001 - Academic and Professional Development III (ENVR 3000) //// ENVR4001, ENVR 3000, ENVR3000','ENVR 4310 - Green Innovation and Entrepreneurship //// ENVR4310','ENVR 4320 - ESG Management and Reporting //// ENVR4320','ENVR 4330 - Environmental Geographical Information System //// ENVR4330','ENVR 4980 - Environmental Management and Technology Capstone Project I //// ENVR4980','ENVR 4990 - Environmental Management and Technology Capstone Project II //// ENVR4990','ENVR 5210 - Environmental Microbiology (ENVR 521, AMCE 521) //// ENVR5210, ENVR 521, AMCE 521, ENVR521,AMCE521','ENVR 5250 - Environmental Economics and Management (ENVR 525) //// ENVR5250, ENVR 525, ENVR525','ENVR 6010F - Postgraduate Seminar //// ENVR6010F','ENVR 6040D - Corporate Environmental Strategy //// ENVR6040D','ENVR 6770 - Professional Development in Environmental Science, Policy and Management //// ENVR6770','ENVR 6990 - MPhil Thesis Research (ENVR 699, AMCE 699) //// ENVR6990, ENVR 699, AMCE 699, ENVR699,AMCE699','ENVR 7990 - Doctoral Thesis Research (ENVR 799, AMCE 799) //// ENVR7990, ENVR 799, AMCE 799, ENVR799,AMCE799','ENVS 3002 - Introduction to Atmospheric Science //// ENVS3002','ENVS 4301 - Environmental Conservation //// ENVS4301','ENVS 4905 - Marine Molecular Biology and Ecology //// ENVS4905','ENVS 4964 - Environmental Science Capstone Project Research //// ENVS4964','ENVS 4984 - Environmental Science Project Research II //// ENVS4984','ENVS 5115 - Food Safety Control //// ENVS5115','ENVS 5116 - Case Studies in Environmental Risk Assessment //// ENVS5116','ENVS 5117 - Pharmacology, Toxicology and Health //// ENVS5117','ENVS 5119 - Pollution Monitoring and Control //// ENVS5119','ENVS 6011H - Postgraduate Seminar //// ENVS6011H','ENVS 6111 - Environmental Health Research Project //// ENVS6111','ENVS 6770 - Professional Development in Science (Environmental Science Programs) //// ENVS6770','ENVS 6990 - MPhil Thesis Research //// ENVS6990','ENVS 7990 - Doctoral Thesis Research //// ENVS7990','EVNG 6050J - Environmental Engineering Seminar //// EVNG6050J','EVNG 6770 - Professional Development in Environmental Engineering //// EVNG6770','EVNG 6990 - MPhil Thesis Research (EVNG 699) //// EVNG6990, EVNG 699, EVNG699','EVNG 7990 - Doctoral Thesis Research (EVNG 799) //// EVNG7990, EVNG 799, EVNG799','EVSM 5270 - Environmental Law (EVSM 527) //// EVSM5270, EVSM 527, EVSM527','EVSM 5280 - Introduction to Atmospheric Aerosols //// EVSM5280','EVSM 6070 - Environmental Impact Assessment (EVSM 607, ENVR 607, AMCE 607) //// EVSM6070, EVSM 607, ENVR 607, AMCE 607, EVSM607,ENVR607,AMCE607','EVSM 6950A - MSc Project (EVSM 695A) //// EVSM6950A, EVSM 695A, EVSM695A','EVSM 6950B - MSc Project (EVSM 695B) //// EVSM6950B, EVSM 695B, EVSM695B','FINA 1203 - Personal Finance //// FINA1203','FINA 2203 - Fundamentals of Business Finance (FINA 110) //// FINA2203, FINA 110, FINA110','FINA 2303 - Financial Management (FINA 111) //// FINA2303, FINA 111, FINA111','FINA 3104 - Investment Analysis and Portfolio Management (FINA 221) //// FINA3104, FINA 221, FINA221','FINA 3204 - Derivative Securities (FINA 222) //// FINA3204, FINA 222, FINA222','FINA 3304 - Financial Markets (FINA 232) //// FINA3304, FINA 232, FINA232','FINA 3404 - International Finance (FINA 342) //// FINA3404, FINA 342, FINA342','FINA 3820 - Thomson Reuters Certification Program (FINA 292) //// FINA3820, FINA 292, FINA292','FINA 4104 - Advanced Financial Management (FINA 321) //// FINA4104, FINA 321, FINA321','FINA 4414 - Financial Applications Using R //// FINA4414','FINA 4810 - Finance Practicum I (FINA 396) //// FINA4810, FINA 396, FINA396','FINA 4814 - Finance Practicum II (FINA 397) //// FINA4814, FINA 397, FINA397','FINA 4919A - Independent Study //// FINA4919A','FINA 5120 - Corporate Finance (FINA 512) //// FINA5120, FINA 512, FINA512','FINA 5140 - Advanced Topics in Financial Management (FINA 514) //// FINA5140, FINA 514, FINA514','FINA 5150 - Corporate Risk Management (FINA 515) //// FINA5150, FINA 515, FINA515','FINA 5160 - Private Equity Investing (FINA 6900F) //// FINA5160, FINA 6900F, FINA6900F','FINA 5190 - Family Business (FINA 691K, SBMT 601R) //// FINA5190, FINA 691K, SBMT 601R, FINA691K,SBMT601R','FINA 5220 - Equity Investment Management (FINA 522) //// FINA5220, FINA 522, FINA522','FINA 5300 - Advanced Derivatives Analysis (FINA 530) //// FINA5300, FINA 530, FINA530','FINA 5330 - Investment and Finance in China (FINA 533) //// FINA5330, FINA 533, FINA533','FINA 5350 - Strategic Finance and Value Creation (FINA 535) //// FINA5350, FINA 535, FINA535','FINA 5360 - Fixed Income Analysis (FINA 536) //// FINA5360, FINA 536, FINA536','FINA 5380 - Raising Debt in the Financial Markets (FINA 538, FINA 690I) //// FINA5380, FINA 538, FINA 690I, FINA538,FINA690I','FINA 5390 - Venture Capital and Private Equity (FINA 539) //// FINA5390, FINA 539, FINA539','FINA 5420 - Behavioral Finance (FINA 542, FINA 690E) //// FINA5420, FINA 542, FINA 690E, FINA542,FINA690E','FINA 5440 - Risk Management for Financial Institutions (FINA 544, FINA 690N) //// FINA5440, FINA 544, FINA 690N, FINA544,FINA690N','FINA 5450 - Hedge Funds (FINA 545, FINA 690P) //// FINA5450, FINA 545, FINA 690P, FINA545,FINA690P','FINA 5840 - Financial Modeling (FINA 584) //// FINA5840, FINA 584, FINA584','FINA 6900K - Alternative Investments //// FINA6900K','FINA 6900L - Debt Restructuring //// FINA6900L','FINA 6900M - Wealth Management //// FINA6900M','FINA 6900N - Startup Financing and Operations //// FINA6900N','FINA 6970A - Independent Study (FINA 697S) //// FINA6970A, FINA 697S, FINA697S','FINA 6990 - MPhil Thesis Research (FINA 699) //// FINA6990, FINA 699, FINA699','FINA 7900A - Doctoral Seminar: Theoretical Corporate Finance //// FINA7900A','FINA 7900B - Doctoral Seminar: Theoretical Asset Pricing //// FINA7900B','FINA 7900D - Doctoral Seminar: Empirical Asset Pricing //// FINA7900D','FINA 7980J - Finance Workshops //// FINA7980J','FINA 7990 - Doctoral Thesis Research (FINA 799) //// FINA7990, FINA 799, FINA799','FYTG 6990 - MPhil Thesis Research (FYTG 699) //// FYTG6990, FYTG 699, FYTG699','GBUS 1000 - Global Leadership Development (BMGB 100) //// GBUS1000, BMGB 100, BMGB100','GBUS 2010 - Global Business Analysis (BMGB 101) //// GBUS2010, BMGB 101, BMGB101','GBUS 2020 - Public Service Project (BMGB 102) //// GBUS2020, BMGB 102, BMGB102','GBUS 3010 - Global Perspectives on Contemporary Issues (BMGB 201) //// GBUS3010, BMGB 201, BMGB201','GBUS 3050 - Deal Making in Asia and Emerging Markets (BMGB 399E, GBUS 4000A) //// GBUS3050, BMGB 399E, GBUS 4000A, BMGB399E,GBUS4000A','GBUS 4910 - Capstone Project (BMGB 391) //// GBUS4910, BMGB 391, BMGB391','GFIN 5030 - Portfolio Management and Asset Allocation (GFIN 503) //// GFIN5030, GFIN 503, GFIN503','GFIN 5040 - Derivatives Markets (GFIN 504) //// GFIN5040, GFIN 504, GFIN504','GFIN 5050 - Applied Corporate Finance and Valuation (GFIN 505) //// GFIN5050, GFIN 505, GFIN505','GFIN 5080 - Fixed Income Instruments and Markets (GFIN 508) //// GFIN5080, GFIN 508, GFIN508','GNED 2510 - Career Building (GNED 151, GNED 051) //// GNED2510, GNED 151, GNED 051, GNED151,GNED051','HART 1001 - Arts and Creativity (HUMA 1151, GNED 161) //// HART1001, HUMA 1151, GNED 161, HUMA1151,GNED161','HART 1013 - Fundamental Technique of Chinese Painting //// HART1013','HART 1014 - Introduction to Chinese Calligraphy //// HART1014','HART 1018 - Introduction and Appreciation of Chinese Dance //// HART1018','HART 1025 - Introduction to New Topographic Photography //// HART1025','HART 1027 - Fundamental Techniques in Stage Movement //// HART1027','HART 1029 - Multicultural Dramatic Works //// HART1029','HART 1035 - Public Art Interventions //// HART1035','HART 1036 - Introduction to Graphic Design //// HART1036','HLTH 1010 - Healthy Lifestyle (HLTH 001) //// HLTH1010, HLTH 001, HLTH001','HMMA 5470 - China in Foreigners’ Eyes //// HMMA5470','HUMA 1000 - Cultures and Values //// HUMA1000','HUMA 1060 - Introduction to Mandarin Chinese Grammar (HUMA 2060, HUMA 106) //// HUMA1060, HUMA 2060, HUMA 106, HUMA2060,HUMA106','HUMA 1100 - Music of the World (HUMA 2100, HUMA 110) //// HUMA1100, HUMA 2100, HUMA 110, HUMA2100,HUMA110','HUMA 1102 - Enjoyment of Classical Music (HUMA 2102, HUMA 115) //// HUMA1102, HUMA 2102, HUMA 115, HUMA2102,HUMA115','HUMA 1231 - Popular Culture of East Asia //// HUMA1231','HUMA 1660 - Introduction to Chinese Art (HUMA 066) //// HUMA1660, HUMA 066, HUMA066','HUMA 1810 - Introduction to Chinese Philosophy (HUMA 081) //// HUMA1810, HUMA 081, HUMA081','HUMA 2050 - Classical Chinese (HUMA 105) //// HUMA2050, HUMA 105, HUMA105','HUMA 2103 - Introduction to Music Composition (HUMA 116) //// HUMA2103, HUMA 116, HUMA116','HUMA 2104 - Introduction to Music Theory (HUMA 117) //// HUMA2104, HUMA 117, HUMA117','HUMA 2105 - Music, Drama and Theatre (HUMA 3100, HUMA 210) //// HUMA2105, HUMA 3100, HUMA 210, HUMA3100,HUMA210','HUMA 2400 - Approaches to Humanities in China Studies (HUMA 3400, HUMA 240) //// HUMA2400, HUMA 3400, HUMA 240, HUMA3400,HUMA240','HUMA 2590 - The Making of the Modern World: Renaissance to the Present (HUMA 159) //// HUMA2590, HUMA 159, HUMA159','HUMA 2622 - Heritage and Culture (HUMA 3621) //// HUMA2622, HUMA 3621, HUMA3621','HUMA 2633 - Before Mao: Traditional Chinese Society from 1800 to 1949 //// HUMA2633','HUMA 2640 - Unofficial China: Social History 1800s-1930s (HUMA 164) //// HUMA2640, HUMA 164, HUMA164','HUMA 2670 - Understanding Western Painting (HUMA 167) //// HUMA2670, HUMA 167, HUMA167','HUMA 2830 - Core Values in Confucianism (HUMA 3830, HUMA 283) //// HUMA2830, HUMA 3830, HUMA 283, HUMA3830,HUMA283','HUMA 2840 - Buddhism and the Chinese Intellectual Tradition (HUMA 3820, HUMA 282) //// HUMA2840, HUMA 3820, HUMA 282, HUMA3820,HUMA282','HUMA 3030 - Language, Communication and Culture (HUMA 203) //// HUMA3030, HUMA 203, HUMA203','HUMA 3040 - Study of the Modern Chinese Writing System (HUMA 204) //// HUMA3040, HUMA 204, HUMA204','HUMA 3101 - Enjoyment of Western Opera (HUMA 211) //// HUMA3101, HUMA 211, HUMA211','HUMA 3103 - Making Chamber Music B //// HUMA3103','HUMA 3203 - Chinese Creative Writing: Reading Literary Classics and Writing Novels //// HUMA3203','HUMA 3220 - Modern Chinese Poetry (HUMA 222) //// HUMA3220, HUMA 222, HUMA222','HUMA 3630 - Community and Cultural Identity //// HUMA3630','HUMA 3800 - Guided Studies in Chinese Philosophical Classics (HUMA 382) //// HUMA3800, HUMA 382, HUMA382','HUMA 4610 - Heritage in Cross-cultural Perspective //// HUMA4610','HUMA 5180 - Chinese Historical Morphology (HUMA 518) //// HUMA5180, HUMA 518, HUMA518','HUMA 5470 - China in Foreigners\' Eyes (HUMA 6001S) //// HUMA5470, HUMA 6001S, HUMA6001S','HUMA 5480 - Lyricism in Literature and the Arts (HUMA 6001Q, HUMA 601Q) //// HUMA5480, HUMA 6001Q, HUMA 601Q, HUMA6001Q,HUMA601Q','HUMA 5515 - Readings in Song and Ming History (HUMA 602E) //// HUMA5515, HUMA 602E, HUMA602E','HUMA 5520 - Modern Chinese History (HUMA 552) //// HUMA5520, HUMA 552, HUMA552','HUMA 5844 - Reading Chan Buddhism //// HUMA5844','HUMA 5900 - Fundamentals of Comparative Philosophy (HUMA 590) //// HUMA5900, HUMA 590, HUMA590','HUMA 5910 - Philosophy of Religion: East and West //// HUMA5910','HUMA 6001V - Sentimental Republic: Emotion in Modern Chinese Literature //// HUMA6001V','HUMA 6001W - Late Qing Literature (HUMA 601E) //// HUMA6001W, HUMA 601E, HUMA601E','HUMA 6002P - Peasants and the Chinese Communist Party //// HUMA6002P','HUMA 6100B - Independent Study (HUMA 610B) //// HUMA6100B, HUMA 610B, HUMA610B','HUMA 6100G - Independent Study //// HUMA6100G','HUMA 6200 - Research Project in Humanities //// HUMA6200','HUMA 6300 - Postgraduate Seminar //// HUMA6300','HUMA 6990 - MPhil Thesis Research (HUMA 699) //// HUMA6990, HUMA 699, HUMA699','HUMA 7990 - Doctoral Thesis Research (HUMA 799) //// HUMA7990, HUMA 799, HUMA799','IBTM 5010 - Intelligent Building Facility Management (IBTM 501) //// IBTM5010, IBTM 501, IBTM501','IBTM 5330 - Energy Management in Buildings (IBTM 533) //// IBTM5330, IBTM 533, IBTM533','IBTM 5430 - Indoor Air Quality Technology and Management (IBTM 543) //// IBTM5430, IBTM 543, IBTM543','IBTM 5470 - Mechanical Vibration (IBTM 6010B) //// IBTM5470, IBTM 6010B, IBTM6010B','IBTM 5530 - Risk Management and Decision-Making in Intelligent Building (IBTM 553) //// IBTM5530, IBTM 553, IBTM553','IBTM 5620 - Electrical Facilities in Intelligent Buildings (IBTM 601A) //// IBTM5620, IBTM 601A, IBTM601A','IBTM 6950A - Independent Studies (IBTM 695A) //// IBTM6950A, IBTM 695A, IBTM695A','IBTM 6950B - Independent Studies (IBTM 695B) //// IBTM6950B, IBTM 695B, IBTM695B','IDPO 6770 - Professional Development for Interdisciplinary Programs //// IDPO6770','IELM 1010 - Academic and Professional Development I (IELM 001) //// IELM1010, IELM 001, IELM001','IELM 1020 - Academic and Professional Development II (IELM 002) //// IELM1020, IELM 002, IELM002','IELM 1990 - Industrial Training (IELM 099) //// IELM1990, IELM 099, IELM099','IELM 2100E - Computing in Industrial Applications //// IELM2100E','IELM 2100S - Computing in Industrial Applications (IELM 110) //// IELM2100S, IELM 110, IELM110','IELM 2200 - Engineering Management (IELM 120) //// IELM2200, IELM 120, IELM120','IELM 2410 - Logistics and Freight Transportation Operations (IELM 141) //// IELM2410, IELM 141, IELM141','IELM 2510 - Engineering Probability and Statistics (IELM 151) //// IELM2510, IELM 151, IELM151','IELM 3230 - Engineering Economy (IELM 223) //// IELM3230, IELM 223, IELM223','IELM 3250 - Operations Research II (IELM 225) //// IELM3250, IELM 225, IELM225','IELM 3270 - Quality Engineering (IELM 227) //// IELM3270, IELM 227, IELM227','IELM 3901 - Transportation Systems //// IELM3901','IELM 4100 - Integrated Production Systems (IELM 310) //// IELM4100, IELM 310, IELM310','IELM 4130 - System Simulation (IELM 313) //// IELM4130, IELM 313, IELM313','IELM 4170 - Product Design and Lifecycle Management (IELM 317) //// IELM4170, IELM 317, IELM317','IELM 4650 - Engineering Psychology (IELM 365) //// IELM4650, IELM 365, IELM365','IELM 4901 - Final Year Thesis //// IELM4901','IELM 4930 - Logistics Management and Engineering Project //// IELM4930','IELM 4990 - Industrial Engineering Design Project //// IELM4990','IELM 5110 - Information System Design (IELM 511, IEEM 511) //// IELM5110, IELM 511, IEEM 511, IELM511,IEEM511','IELM 5250 - Stochastic Models in Operations Research (IELM 525, IEEM 525) //// IELM5250, IELM 525, IEEM 525, IELM525,IEEM525','IELM 5320 - Design for People (IELM 532, IEEM 532) //// IELM5320, IELM 532, IEEM 532, IELM532,IEEM532','IELM 6770 - Professional Development in Industrial Engineering and Logistics Management //// IELM6770','IELM 6800J - Departmental Seminar //// IELM6800J','IELM 6850J - Advanced Seminar //// IELM6850J','IELM 6900A - Research Project (IELM 690A) //// IELM6900A, IELM 690A, IELM690A','IELM 6990 - MPhil Thesis Research (IELM 699, IEEM 699) //// IELM6990, IELM 699, IEEM 699, IELM699,IEEM699','IELM 7990 - Doctoral Thesis Research (IELM 799, IEEM 799) //// IELM7990, IELM 799, IEEM 799, IELM799,IEEM799','IMBA 5060 - Accounting for Decision Making and Control (IMBA 506) //// IMBA5060, IMBA 506, IMBA506','IMBA 5070 - Corporate Finance (IMBA 507) //// IMBA5070, IMBA 507, IMBA507','IMBA 5090 - Management of Organizations (IMBA 509) //// IMBA5090, IMBA 509, IMBA509','IMBA 5120 - Technology and Knowledge Management (IMBA 512) //// IMBA5120, IMBA 512, IMBA512','IMBA 5170 - Business Simulation (IMBA 517) //// IMBA5170, IMBA 517, IMBA517','IMBA 5290 - Global Macroeconomics //// IMBA5290','IMBA 5310 - Corporate Restructuring //// IMBA5310','IMBA 6100A - Global Field Trip Study //// IMBA6100A','IMBA 6970B - Independent Study //// IMBA6970B','ISOM 1090 - Social Media: Collective Intelligence & Creativity (ISOM 109) //// ISOM1090, ISOM 109, ISOM109','ISOM 1380 - Technology and Innovation: Social and Business Perspectives (ISOM 139) //// ISOM1380, ISOM 139, ISOM139','ISOM 2010 - Introduction to Information Systems (ISOM 101, ISMT 101) //// ISOM2010, ISOM 101, ISMT 101, ISOM101,ISMT101','ISOM 2030 - Business Protections for Innovations (ISOM 125, ISMT 125) //// ISOM2030, ISOM 125, ISMT 125, ISOM125,ISMT125','ISOM 2310 - Chronicle of Internet Commerce (ISOM 131) //// ISOM2310, ISOM 131, ISOM131','ISOM 2500 - Business Statistics (ISOM 111, ISMT 111) //// ISOM2500, ISOM 111, ISMT 111, ISOM111,ISMT111','ISOM 2700 - Operations Management (ISOM 161) //// ISOM2700, ISOM 161, ISOM161','ISOM 3180 - Telecommunications and Computer Networking Management (ISOM 235) //// ISOM3180, ISOM 235, ISOM235','ISOM 3210 - Information Systems Analysis and Design (ISOM 221) //// ISOM3210, ISOM 221, ISOM221','ISOM 3230 - Business Applications Programming (ISOM 223) //// ISOM3230, ISOM 223, ISOM223','ISOM 3260 - Database Design and Administration (ISOM 226) //// ISOM3260, ISOM 226, ISOM226','ISOM 3310 - Electronic Commerce and e-Business Management (ISOM 231) //// ISOM3310, ISOM 231, ISOM231','ISOM 3360 - Data Mining for Business Analytics (ISOM 326) //// ISOM3360, ISOM 326, ISOM326','ISOM 3380 - Advanced Network Management (CISCO - ICND) (ISOM 219) //// ISOM3380, ISOM 219, ISOM219','ISOM 3530 - A Second Course in Business Statistics (ISOM 253) //// ISOM3530, ISOM 253, ISOM253','ISOM 3710 - Management Science (ISOM 271) //// ISOM3710, ISOM 271, ISOM271','ISOM 3760 - Logistics Management (ISOM 366) //// ISOM3760, ISOM 366, ISOM366','ISOM 4300 - Information Systems Control and Assurance (ISOM 341) //// ISOM4300, ISOM 341, ISOM341','ISOM 4400 - Information Systems Project //// ISOM4400','ISOM 4490A - Independent Study in Information Systems //// ISOM4490A','ISOM 4520 - Statistics for Financial Risk Management (ISOM 352) //// ISOM4520, ISOM 352, ISOM352','ISOM 4540 - Time Series Analysis and Forecasting (ISOM 354) //// ISOM4540, ISOM 354, ISOM354','ISOM 4590B - Business Innovation with Social Network //// ISOM4590B','ISOM 4750 - Business Project Management (ISOM 365) //// ISOM4750, ISOM 365, ISOM365','ISOM 4770 - Supply Chain Management (ISOM 367) //// ISOM4770, ISOM 367, ISOM367','ISOM 4810 - OM Best Practices (ISOM 369A) //// ISOM4810, ISOM 369A, ISOM369A','ISOM 4820 - Revenue Management (ISOM 369C) //// ISOM4820, ISOM 369C, ISOM369C','ISOM 4880 - Operations Management Project (ISOM 388, ISOM 369B) //// ISOM4880, ISOM 388, ISOM 369B, ISOM388,ISOM369B','ISOM 5020 - Information and Technology Management (ISOM 502, ISMT 502) //// ISOM5020, ISOM 502, ISMT 502, ISOM502,ISMT502','ISOM 5030 - Business Simulation and Strategic Decisions (ISOM 503, ISMT 610X) //// ISOM5030, ISOM 503, ISMT 610X, ISOM503,ISMT610X','ISOM 5100 - Information Strategy and Management (ISOM 510, ISMT 510) //// ISOM5100, ISOM 510, ISMT 510, ISOM510,ISMT510','ISOM 5130 - Outsourcing Management (ISOM 611B) //// ISOM5130, ISOM 611B, ISOM611B','ISOM 5270 - Big Data Analytics (ISOM 527, ISMT 527) //// ISOM5270, ISOM 527, ISMT 527, ISOM527,ISMT527','ISOM 5280 - Computer and Internet Security Management (ISOM 528, ISMT 528) //// ISOM5280, ISOM 528, ISMT 528, ISOM528,ISMT528','ISOM 5320 - Electronic Commerce (ISOM 532, ISMT 532) //// ISOM5320, ISOM 532, ISMT 532, ISOM532,ISMT532','ISOM 5360 - Information Systems Auditing (ISOM 536) //// ISOM5360, ISOM 536, ISOM536','ISOM 5480 - Technology Entrepreneurship (ISOM 550, ISMT 610Y) //// ISOM5480, ISOM 550, ISMT 610Y, ISOM550,ISMT610Y','ISOM 5550 - Statistical Methods for Business and Economics I (ISOM 582, ISMT 582) //// ISOM5550, ISOM 582, ISMT 582, ISOM582,ISMT582','ISOM 5700 - Operations Management (ISOM 561, ISMT 561) //// ISOM5700, ISOM 561, ISMT 561, ISOM561,ISMT561','ISOM 5710 - Quality Management //// ISOM5710','ISOM 5720 - ERP and Enterprise Systems Management (ISOM 564, ISMT 564) //// ISOM5720, ISOM 564, ISMT 564, ISOM564,ISMT564','ISOM 5740 - Managing Financial Services Operations //// ISOM5740','ISOM 5750 - Demand and Revenue Management //// ISOM5750','ISOM 5780 - Global Operations Strategy //// ISOM5780','ISOM 5800 - Business Modeling (ISOM 580, ISOM 669B, MGMT 650F) //// ISOM5800, ISOM 580, ISOM 669B, MGMT 650F, ISOM580,ISOM669B,MGMT650F','ISOM 5810 - Business Modeling and Optimization (ISOM 571, ISMT 571, ISMT 669I) //// ISOM5810, ISOM 571, ISMT 571, ISMT 669I, ISOM571,ISMT571,ISMT669I','ISOM 5820 - OM Best Practices //// ISOM5820','ISOM 6000D - Digital Marketing Strategy and Analytics //// ISOM6000D','ISOM 6000E - Financial Technology (FinTech) //// ISOM6000E','ISOM 6790B - Operational Mindset - Key to Maximizing Career Potential //// ISOM6790B','ISOM 6890A - Independent Study in Operations Management //// ISOM6890A','ISOM 6990 - MPhil Thesis Research (ISOM 699, ISMT 699) //// ISOM6990, ISOM 699, ISMT 699, ISOM699,ISMT699','ISOM 7990 - Doctoral Thesis Research (ISOM 799, ISMT 799) //// ISOM7990, ISOM 799, ISMT 799, ISOM799,ISMT799','JEVE 5430 - Solid Waste Landfill Engineering Design (JEVE 543) //// JEVE5430, JEVE 543, JEVE543','JEVE 5460 - Design and Management of Physico/Chemical Processes of Environmental Engineering (JEVE 546) //// JEVE5460, JEVE 546, JEVE546','JEVE 5490 - Modeling of Biological Treatment (JEVE 549) //// JEVE5490, JEVE 549, JEVE549','JEVE 5510 - Municipal Hydraulic System Design and Management (JEVE 6000A) //// JEVE5510, JEVE 6000A, JEVE6000A','JEVE 5900 - Carbon Management for Sustainable Environment (JEVE 590) //// JEVE5900, JEVE 590, JEVE590','JEVE 6980B - Independent Project (JEVE 698B) //// JEVE6980B, JEVE 698B, JEVE698B','LABU 2020 - Effective Communication in Business (SBMT 2020) //// LABU2020, SBMT 2020, SBMT2020','LABU 2020G - Effective Communication in Business (SBMT 2020G) //// LABU2020G, SBMT 2020G, SBMT2020G','LABU 2052 - Business Case Analyses II (LABU 104) //// LABU2052, LABU 104, LABU104','LANG 1003A - English for University Studies II //// LANG1003A','LANG 1003I - English for University Studies II //// LANG1003I','LANG 1003S - English for University Studies II //// LANG1003S','LANG 1113 - Effective Chinese Communication //// LANG1113','LANG 1113I - Effective Chinese Communication //// LANG1113I','LANG 1114 - Critical Reading and Writing in Chinese //// LANG1114','LANG 1115 - Critical Reading and Speaking in Chinese //// LANG1115','LANG 1116 - Advanced Critical Reading and Speaking in Chinese //// LANG1116','LANG 1120 - Chinese for Non-Chinese Language Background Students I (LANG 113) //// LANG1120, LANG 113, LANG113','LANG 1121 - Chinese for Non-Chinese Language Background Students II (LANG 114) //// LANG1121, LANG 114, LANG114','LANG 1122 - Chinese for Non-Chinese Language Background Students III (LANG 115) //// LANG1122, LANG 115, LANG115','LANG 1123 - Chinese for Non-Chinese Language Background Students IV (LANG 116) //// LANG1123, LANG 116, LANG116','LANG 1124 - Chinese for Non-Chinese Language Background Students V //// LANG1124','LANG 1125 - Chinese for Non-Chinese Language Background Students VI //// LANG1125','LANG 1126 - Chinese for Non-Chinese Language Background Students VII //// LANG1126','LANG 1127 - Chinese for Non-Chinese Language Background Students VIII //// LANG1127','LANG 1210 - Japanese Language and Related Culture (LANG 024) //// LANG1210, LANG 024, LANG024','LANG 1310 - French: World Language and Culture (LANG 031) //// LANG1310, LANG 031, LANG031','LANG 1320 - German in the World of Science and Technology (LANG 051) //// LANG1320, LANG 051, LANG051','LANG 1330 - Spanish and the Other America (LANG 061) //// LANG1330, LANG 061, LANG061','LANG 1410 - Latin and the Legacy of the Roman World (LANG 041) //// LANG1410, LANG 041, LANG041','LANG 2010 - English for Science I //// LANG2010','LANG 2010H - English for Science I //// LANG2010H','LANG 2030 - Technical Communication I //// LANG2030','LANG 2030H - Technical Communication I //// LANG2030H','LANG 2070 - English Communication for Global China Studies I //// LANG2070','LANG 2083 - Communication for Environmental Management and Technology II //// LANG2083','LANG 3010 - English for Mathematics and Economics //// LANG3010','LANG 3011 - English for Mathematics //// LANG3011','LANG 3012 - Laboratory Report Writing for Chemistry Students //// LANG3012','LANG 3013 - Laboratory Report Writing for Physics Students //// LANG3013','LANG 3014 - Laboratory Report Writing for Biological Science and Biochemistry Students //// LANG3014','LANG 3080 - Communication for International Management (LANG 307) //// LANG3080, LANG 307, LANG307','LANG 4012 - English for Chemistry Capstone Projects //// LANG4012','LANG 4013 - English for Physics Capstone Projects //// LANG4013','LANG 4015 - English for Biotechnology Capstone Projects //// LANG4015','LANG 4016 - English for Environmental Science Capstone Projects //// LANG4016','LANG 4017 - English for Biological Science Capstone Projects //// LANG4017','LANG 4030 - Technical Communication II for CSE & CPEG //// LANG4030','LANG 4031 - Technical Communication II for ECE & CPEG //// LANG4031','LANG 4032 - Technical Communication II for Industrial Engineering and Logistics Management //// LANG4032','LANG 4033 - Technical Communication II for Civil and Environmental Engineering //// LANG4033','LANG 4034 - Technical Communication II for Mechanical and Aerospace Engineering //// LANG4034','LANG 4070 - Academic Writing in Context - Global China Studies //// LANG4070','LANG 5000 - Foundation in Listening & Speaking for Postgraduate Students (LANG 500) //// LANG5000, LANG 500, LANG500','LANG 5001 - Postgraduate English for Engineering Research Studies (LANG 501) //// LANG5001, LANG 501, LANG501','LANG 5002 - Postgraduate English for Business and Social Science Studies //// LANG5002','LANG 5010 - Postgraduate English for Science Studies //// LANG5010','LANG 5080 - English Seminar and Presentation Skills //// LANG5080','LANG 5081 - Research Writing Skills //// LANG5081','LANG 5101 - Basic Chinese for International Management //// LANG5101','LANG 5330 - Basic Spanish for International Management //// LANG5330','LIFS 1020 - Biology of Human Health (BISC 002) //// LIFS1020, BISC 002, BISC002','LIFS 1901 - General Biology I //// LIFS1901','LIFS 1902 - General Biology II //// LIFS1902','LIFS 1904 - Laboratory for General Biology II //// LIFS1904','LIFS 1930 - Nature of Life Sciences //// LIFS1930','LIFS 2011 - A Practicum on Wetland Conservation (LIFS 1011, BIOL 001) //// LIFS2011, LIFS 1011, BIOL 001, LIFS1011,BIOL001','LIFS 2040 - Cell Biology (BIOL 104) //// LIFS2040, BIOL 104, BIOL104','LIFS 2080 - Plant Biology (BIOL 108) //// LIFS2080, BIOL 108, BIOL108','LIFS 2220 - Biochemistry II (BICH 122) //// LIFS2220, BICH 122, BICH122','LIFS 2240 - Cell Biology Laboratory (BIOL 124) //// LIFS2240, BIOL 124, BIOL124','LIFS 2280 - Plant Biology Laboratory (BIOL 128) //// LIFS2280, BIOL 128, BIOL128','LIFS 3020 - Molecular and Cellular Biology II (BICH 202) //// LIFS3020, BICH 202, BICH202','LIFS 3040 - Animal Physiology (BIOL 202) //// LIFS3040, BIOL 202, BIOL202','LIFS 3060 - Microbiology (BIOL 206) //// LIFS3060, BIOL 206, BIOL206','LIFS 3070 - Biophysics and Physical Biochemistry (BISC 207) //// LIFS3070, BISC 207, BISC207','LIFS 3150 - Biostatistics (BISC 215) //// LIFS3150, BISC 215, BISC215','LIFS 3220 - Animal Physiology Laboratory (BIOL 222) //// LIFS3220, BIOL 222, BIOL222','LIFS 3260 - Microbiology Laboratory (BIOL 226) //// LIFS3260, BIOL 226, BIOL226','LIFS 3510 - Junior Research Project I (BIOL 251) //// LIFS3510, BIOL 251, BIOL251','LIFS 3520 - Junior Research Project II (BIOL 252) //// LIFS3520, BIOL 252, BIOL252','LIFS 4060 - Immunobiology (BISC 306) //// LIFS4060, BISC 306, BISC306','LIFS 4090 - Developmental Biology (BISC 309) //// LIFS4090, BISC 309, BISC309','LIFS 4140 - Cancer Biology (BISC 314) //// LIFS4140, BISC 314, BISC314','LIFS 4360 - Aquaculture Biotechnology (BISC 336) //// LIFS4360, BISC 336, BISC336','LIFS 4540 - Structure and Function of Proteins (BISC 354) //// LIFS4540, BISC 354, BISC354','LIFS 4550 - Biochemistry of Nutrition (BISC 355) //// LIFS4550, BISC 355, BISC355','LIFS 4580 - Bioinformatics (BISC 358) //// LIFS4580, BISC 358, BISC358','LIFS 4620 - Advanced Biological Chemistry (BISC 362) //// LIFS4620, BISC 362, BISC362','LIFS 4800 - Epigenetics and Chromosome Biology //// LIFS4800','LIFS 4910A - Independent Study (BIOL 391A) //// LIFS4910A, BIOL 391A, BIOL391A','LIFS 4950 - Neurochemistry (BISC 395) //// LIFS4950, BISC 395, BISC395','LIFS 4960 - Biological Science Capstone Project (BIOL 396) //// LIFS4960, BIOL 396, BIOL396','LIFS 4961 - Biochemistry and Cell Biology Capstone Project //// LIFS4961','LIFS 4963 - Biotechnology Capstone Project //// LIFS4963','LIFS 4980 - Biological Science Project Research II (BIOL 398) //// LIFS4980, BIOL 398, BIOL398','LIFS 4981 - Biochemistry and Cell Biology Project Research II (BICH 398) //// LIFS4981, BICH 398, BICH398','LIFS 4983 - Biotechnology Project Research II //// LIFS4983','LIFS 5240 - Molecular and Developmental Neurobiology (BISC 524) //// LIFS5240, BISC 524, BISC524','LIFS 5260 - Biochemical and Molecular Basis of Diseases (BISC 526) //// LIFS5260, BISC 526, BISC526','LIFS 5320 - Ecotoxicology (BISC 532) //// LIFS5320, BISC 532, BISC532','LIFS 6111D - Life Science Postgraduate Student Seminar //// LIFS6111D','LIFS 6170 - Special Topics in Molecular, Cell and Developmental Biology (BISC 617) //// LIFS6170, BISC 617, BISC617','LIFS 6410P - Seminar Enrichment Course //// LIFS6410P','LIFS 6420A - Project Research //// LIFS6420A','LIFS 6660 - Molecular Medicine (BISC 666) //// LIFS6660, BISC 666, BISC666','LIFS 6770 - Professional Development in Science (Life Science) //// LIFS6770','LIFS 6990 - MPhil Thesis Research (BICH 699, BIOL 699) //// LIFS6990, BICH 699, BIOL 699, BICH699,BIOL699','LIFS 7990 - Doctoral Thesis Research (BICH 799, BIOL 799) //// LIFS7990, BICH 799, BIOL 799, BICH799,BIOL799','MAFS 5040 - Quantitative Methods for Fixed-Income Instruments (MAFS 504) //// MAFS5040, MAFS 504, MAFS504','MAFS 5130 - Quantitative Analysis of Financial Time Series (MAFS 513) //// MAFS5130, MAFS 513, MAFS513','MAFS 5220 - Quantitative and Statistical Risk Analysis (MAFS 522) //// MAFS5220, MAFS 522, MAFS522','MAFS 5250 - Computational Methods for Pricing Structured Products (MAFS 525) //// MAFS5250, MAFS 525, MAFS525','MAFS 6010F - Structuring and Trading Strategies in Derivative Markets //// MAFS6010F','MAFS 6010G - Mathematical Market Microstructure - Theory and Applications //// MAFS6010G','MAFS 6100A - Independent Project //// MAFS6100A','MALE 5101 - Discourse Analysis //// MALE5101','MALE 5103 - Testing and Assessment //// MALE5103','MALE 5106 - Contrastive Analysis between Chinese and English //// MALE5106','MALE 5202 - Teaching Second Language Vocabulary //// MALE5202','MALE 5206 - Teaching English for Academic Purposes //// MALE5206','MALE 5303 - Phonetics and Phonology of the Chinese Language //// MALE5303','MALE 5304 - Chinese Lexicology //// MALE5304','MALE 6000 - Supervised Teaching Practicum //// MALE6000','MALE 6980 - Research Project in International Language Education //// MALE6980','MARK 1220 - Marketing and Society //// MARK1220','MARK 1230 - Consumerism and Happiness //// MARK1230','MARK 2120 - Marketing Management (MARK 112) //// MARK2120, MARK 112, MARK112','MARK 3420 - Consumer Behavior (MARK 242) //// MARK3420, MARK 242, MARK242','MARK 3460 - Retailing //// MARK3460','MARK 3470 - Services Marketing (MARK 247) //// MARK3470, MARK 247, MARK247','MARK 4210 - Strategic Marketing (MARK 321) //// MARK4210, MARK 321, MARK321','MARK 4290A - The Art and Science of Digital and Direct Marketing //// MARK4290A','MARK 4450 - Brand Management (MARK 345) //// MARK4450, MARK 345, MARK345','MARK 5120 - Marketing Strategy and Policy (MARK 512) //// MARK5120, MARK 512, MARK512','MARK 5230 - Marketing and Behavioral Economics for Public Policy //// MARK5230','MARK 5280 - Doing Business in China (MARK 528) //// MARK5280, MARK 528, MARK528','MARK 5310 - Marketing Research (MARK 531) //// MARK5310, MARK 531, MARK531','MARK 5330 - Brand Management (MARK 533, MARK 690C) //// MARK5330, MARK 533, MARK 690C, MARK533,MARK690C','MARK 5410 - Seminar in Quantitative Modeling (MARK 541) //// MARK5410, MARK 541, MARK541','MARK 5460 - Seminar in Consumer Behavior (MARK 546) //// MARK5460, MARK 546, MARK546','MARK 6900L - Consumer Psychology: A CHINDIA Focus //// MARK6900L','MARK 7990 - Doctoral Thesis Research (MARK 799) //// MARK7990, MARK 799, MARK799','MATH 1012 - Calculus IA //// MATH1012','MATH 1013 - Calculus IB (MATH 013) //// MATH1013, MATH 013, MATH013','MATH 1014 - Calculus II (MATH 014) //// MATH1014, MATH 014, MATH014','MATH 1024 - Honors Calculus II (MATH 024) //// MATH1024, MATH 024, MATH024','MATH 2011 - Introduction to Multivariable Calculus (MATH 100) //// MATH2011, MATH 100, MATH100','MATH 2023 - Multivariable Calculus (MATH 101) //// MATH2023, MATH 101, MATH101','MATH 2033 - Mathematical Analysis (MATH 201) //// MATH2033, MATH 201, MATH201','MATH 2043 - Honors Mathematical Analysis (MATH 203) //// MATH2043, MATH 203, MATH203','MATH 2111 - Matrix Algebra and Applications (MATH 113) //// MATH2111, MATH 113, MATH113','MATH 2121 - Linear Algebra (MATH 111) //// MATH2121, MATH 111, MATH111','MATH 2343 - Discrete Structures (MATH 132) //// MATH2343, MATH 132, MATH132','MATH 2351 - Introduction to Differential Equations (MATH 150) //// MATH2351, MATH 150, MATH150','MATH 2352 - Differential Equations (MATH 151) //// MATH2352, MATH 151, MATH151','MATH 2411 - Applied Statistics (MATH 144) //// MATH2411, MATH 144, MATH144','MATH 2421 - Probability (MATH 241) //// MATH2421, MATH 241, MATH241','MATH 2741 - Geometric Constructions //// MATH2741','MATH 3131 - Honors in Linear and Abstract Algebra II (MATH 218) //// MATH3131, MATH 218, MATH218','MATH 3343 - Combinatorial Analysis (MATH 232) //// MATH3343, MATH 232, MATH232','MATH 3424 - Regression Analysis (MATH 342) //// MATH3424, MATH 342, MATH342','MATH 3425 - Stochastic Modeling (MATH 341) //// MATH3425, MATH 341, MATH341','MATH 4023 - Complex Analysis (MATH 304) //// MATH4023, MATH 304, MATH304','MATH 4051 - Theory of Ordinary Differential Equations (MATH 303) //// MATH4051, MATH 303, MATH303','MATH 4221 - Euclidean and Non-Euclidean Geometries (MATH 320) //// MATH4221, MATH 320, MATH320','MATH 4225 - Topology (MATH 323) //// MATH4225, MATH 323, MATH323','MATH 4321 - Game Theory (MATH 310) //// MATH4321, MATH 310, MATH310','MATH 4333 - Mathematical Biology (MATH 365) //// MATH4333, MATH 365, MATH365','MATH 4336 - Introduction to Mathematics of Image Processing //// MATH4336','MATH 4351 - Numerical Solutions of Partial Differential Equations (MATH 331) //// MATH4351, MATH 331, MATH331','MATH 4425 - Introductory Time Series (MATH 348) //// MATH4425, MATH 348, MATH348','MATH 4426 - Survival Analysis //// MATH4426','MATH 4512 - Fundamentals of Mathematical Finance (MATH 362) //// MATH4512, MATH 362, MATH362','MATH 4513 - Life Contingencies Models and Insurance Risk //// MATH4513','MATH 4825A - Financial Economics //// MATH4825A','MATH 4921C - Student Seminars: Lie Groups //// MATH4921C','MATH 4982R - Independent Study: Weather Research Forecast //// MATH4982R','MATH 4999 - Capstone Project //// MATH4999','MATH 5030 - Complex Function Theory (MATH 503) //// MATH5030, MATH 503, MATH503','MATH 5112 - Advanced Algebra II (MATH 512) //// MATH5112, MATH 512, MATH512','MATH 5143 - Introduction to Lie Algebras (MATH 514) //// MATH5143, MATH 514, MATH514','MATH 5240 - Algebraic Topology (MATH 524) //// MATH5240, MATH 524, MATH524','MATH 5261 - Algebraic Geometry II //// MATH5261','MATH 5312 - Advanced Numerical Methods II (MATH 532) //// MATH5312, MATH 532, MATH532','MATH 5352 - Mathematical Methods in Science and Engineering II (MATH 552) //// MATH5352, MATH 552, MATH552','MATH 5432 - Advanced Mathematical Statistics II (MATH 544) //// MATH5432, MATH 544, MATH544','MATH 6380I - Introduction to Molecular Modeling //// MATH6380I','MATH 6385D - Multiscale Modeling and Computation for Non-equilibrium Flows //// MATH6385D','MATH 6450B - Statistical Learning //// MATH6450B','MATH 6770 - Professional Development in Science (Mathematics) //// MATH6770','MATH 6900A - Mathematics Seminar (MATH 600A) //// MATH6900A, MATH 600A, MATH600A','MATH 6900B - Mathematics Seminar (MATH 600B) //// MATH6900B, MATH 600B, MATH600B','MATH 6900D - Mathematics Seminar (MATH 600D) //// MATH6900D, MATH 600D, MATH600D','MATH 6911Q - Reading Course: On Phase Retrieval //// MATH6911Q','MATH 6911R - Reading Course: Nonlinear Dynamical Systems //// MATH6911R','MATH 6911S - Reading Course: Invariants, Harmonics and Representations //// MATH6911S','MATH 6911T - Reading Course: Geometric Measure Theory //// MATH6911T','MATH 6911U - Reading Course: Analysis of Hardy Spaces //// MATH6911U','MATH 6911V - Reading Course: Fractal Geometry //// MATH6911V','MATH 6911W - Reading Course: Atmospheric Dynamics and Meteorology //// MATH6911W','MATH 6911X - Reading Course: Statistical Network Analysis //// MATH6911X','MATH 6915 - Scientific Computation Seminar //// MATH6915','MATH 6990 - MPhil Thesis Research (MATH 699) //// MATH6990, MATH 699, MATH699','MATH 7990 - Doctoral Thesis Research (MATH 799) //// MATH7990, MATH 799, MATH799','MECH 1030 - Academic and Professional Development II (MECH 003) //// MECH1030, MECH 003, MECH003','MECH 1901 - Automotive Engineering //// MECH1901','MECH 1905 - Buildings for Contemporary Living (MECH 113) //// MECH1905, MECH 113, MECH113','MECH 1907 - Introduction to Aerospace Engineering //// MECH1907','MECH 1990 - Industrial Training (MECH 099) //// MECH1990, MECH 099, MECH099','MECH 2040 - Solid Mechanics I (MECH 3010, MECH 2010, MECH 101) //// MECH2040, MECH 3010, MECH 2010, MECH 101, MECH3010,MECH2010,MECH101','MECH 2210 - Fluid Mechanics (MECH 3210, MECH 221) //// MECH2210, MECH 3210, MECH 221, MECH3210,MECH221','MECH 2410 - Engineering Materials I (MECH 141) //// MECH2410, MECH 141, MECH141','MECH 2520 - Design and Manufacturing I (MECH 152) //// MECH2520, MECH 152, MECH152','MECH 2907 - Mechatronic Design and Prototyping //// MECH2907','MECH 3020 - Solid Mechanics II (MECH 202) //// MECH3020, MECH 202, MECH202','MECH 3310 - Heat Transfer (MECH 231) //// MECH3310, MECH 231, MECH231','MECH 3610 - Control Principles (MECH 2610, MECH 261) //// MECH3610, MECH 2610, MECH 261, MECH2610,MECH261','MECH 3650 - Aircraft Structure (MECH 4620) //// MECH3650, MECH 4620, MECH4620','MECH 3670 - Aircraft Performance and Stability (MECH 4640) //// MECH3670, MECH 4640, MECH4640','MECH 3710 - Manufacturing Processes and Systems (MECH 271) //// MECH3710, MECH 271, MECH271','MECH 3830 - Laboratory (MECH 283) //// MECH3830, MECH 283, MECH283','MECH 4000C - Experiential Approach to Aviation //// MECH4000C','MECH 4000D - Experiential Learning in Robotics Technologies //// MECH4000D','MECH 4340 - Air Conditioning Systems (MECH 334) //// MECH4340, MECH 334, MECH334','MECH 4350 - Indoor Air Quality in Buildings (MECH 335) //// MECH4350, MECH 335, MECH335','MECH 4720 - Introduction to Precision Engineering (MECH 372) //// MECH4720, MECH 372, MECH372','MECH 4740 - Numerical Methods in Engineering (MECH 374) //// MECH4740, MECH 374, MECH374','MECH 4900 - Final Year Design Project //// MECH4900','MECH 4910 - Final Year Design Project //// MECH4910','MECH 4950 - Co-op Program (MECH 395) //// MECH4950, MECH 395, MECH395','MECH 4995 - Research Project //// MECH4995','MECH 5010 - Foundation of Solid Mechanics (MECH 501) //// MECH5010, MECH 501, MECH501','MECH 5230 - Computational Fluid Dynamics and Heat Transfer (MECH 523) //// MECH5230, MECH 523, MECH523','MECH 5320 - Convective Heat and Mass Transfer (MECH 532) //// MECH5320, MECH 532, MECH532','MECH 5410 - Advanced Mechanical Behavior of Materials (MECH 541) //// MECH5410, MECH 541, MECH541','MECH 5480 - Nanocomposite Science and Technology (MECH 548) //// MECH5480, MECH 548, MECH548','MECH 5950 - Introduction to Microsystems: Technology and Devices (MECH 595) //// MECH5950, MECH 595, MECH595','MECH 6090J - Seminar in Mechanical Engineering //// MECH6090J','MECH 6770 - Professional Development in Mechanical Engineering //// MECH6770','MECH 6910K - Advanced Flow Instability //// MECH6910K','MECH 6950C - Independent Studies (MECH 695C) //// MECH6950C, MECH 695C, MECH695C','MECH 6990 - MPhil Thesis Research (MECH 699) //// MECH6990, MECH 699, MECH699','MECH 7990 - Doctoral Thesis Research (MECH 799) //// MECH7990, MECH 799, MECH799','MESF 5410 - Advanced Mechanical Behavior of Materials (MESF 541) //// MESF5410, MESF 541, MESF541','MESF 5450 - Intermediate Heat and Mass Transfer (MESF 6910F) //// MESF5450, MESF 6910F, MESF6910F','MESF 5520 - Theories and Practice of CAD/CAM/CAE (MESF 552) //// MESF5520, MESF 552, MESF552','MESF 5550 - Robotics (MESF 555, MESF 691A) //// MESF5550, MESF 555, MESF 691A, MESF555,MESF691A','MESF 5920 - Fundamentals of Electronic Packaging (MESF 592) //// MESF5920, MESF 592, MESF592','MESF 6950A - Independent Project (MESF 695A) //// MESF6950A, MESF 695A, MESF695A','MESF 6950C - Independent Project (MESF 695C) //// MESF6950C, MESF 695C, MESF695C','MGCS 5005 - Narratives on China’s Legal Past and Present //// MGCS5005','MGCS 5012 - Quantitative Data Analysis //// MGCS5012','MGCS 5022 - Political Economy of China //// MGCS5022','MGCS 6000A - China and the Developing World //// MGCS6000A','MGMT 1110 - Introduction to Management (MGMT 120) //// MGMT1110, MGMT 120, MGMT120','MGMT 1120 - Developing the Leader in You (MGMT 233) //// MGMT1120, MGMT 233, MGMT233','MGMT 1130 - Traps and Pitfalls in Judgment and Decision Making //// MGMT1130','MGMT 2110 - Organizational Behavior (MGMT 121) //// MGMT2110, MGMT 121, MGMT121','MGMT 2130 - Business Ethics and Social Responsibility //// MGMT2130','MGMT 3120 - Managerial Leadership (MGMT 234) //// MGMT3120, MGMT 234, MGMT234','MGMT 3140 - Negotiation (MGMT 235) //// MGMT3140, MGMT 235, MGMT235','MGMT 3160 - Environmental Business Strategies //// MGMT3160','MGMT 3170 - Managing CSR (Corporate Social Responsibility) //// MGMT3170','MGMT 4000B - Training and Development //// MGMT4000B','MGMT 4210 - Corporate Strategy (MGMT 321) //// MGMT4210, MGMT 321, MGMT321','MGMT 4220 - Entrepreneurship and Small Business Studies (MGMT 331) //// MGMT4220, MGMT 331, MGMT331','MGMT 4240 - Strategic Management in China (MGMT 337) //// MGMT4240, MGMT 337, MGMT337','MGMT 5230 - Management of Organizations (MGMT 523, MGTO 523) //// MGMT5230, MGMT 523, MGTO 523, MGMT523,MGTO523','MGMT 5410 - Strategic Management (MGMT 541, MGTO 541) //// MGMT5410, MGMT 541, MGTO 541, MGMT541,MGTO541','MGMT 5470 - Strategic Management of Human Assets (MGMT 547, MGTO 547, MGTO 630D) //// MGMT5470, MGMT 547, MGTO 547, MGTO 630D, MGMT547,MGTO547,MGTO630D','MGMT 5480 - Strategic Management in China (MGMT 548, MGTO 548, MGTO 650U) //// MGMT5480, MGMT 548, MGTO 548, MGTO 650U, MGMT548,MGTO548,MGTO650U','MGMT 5510 - Applied Strategic Thinking (MGMT 551, MGTO 651Q) //// MGMT5510, MGMT 551, MGTO 651Q, MGMT551,MGTO651Q','MGMT 5550 - Effective Negotiations (MGMT 555, MGTO 651V) //// MGMT5550, MGMT 555, MGTO 651V, MGMT555,MGTO651V','MGMT 5570 - Applied Merger and Acquisition (MGMT 557, MGMT 650G) //// MGMT5570, MGMT 557, MGMT 650G, MGMT557,MGMT650G','MGMT 5580 - China\'s External Relations and Their Economic Impact (MGMT 558, SBMT 541, SBMT 601D) //// MGMT5580, MGMT 558, SBMT 541, SBMT 601D, MGMT558,SBMT541,SBMT601D','MGMT 5590 - Responsible Leadership and Ethics (MGMT 559, SBMT 543) //// MGMT5590, MGMT 559, SBMT 543, MGMT559,SBMT543','MGMT 5690 - Southeast Asia\'s Economies in Transition: Bubble, Crisis, and Renewal (SBMT 6010F) //// MGMT5690, SBMT 6010F, SBMT6010F','MGMT 5710 - Business, Environment and Sustainability (MGMT 6500K) //// MGMT5710, MGMT 6500K, MGMT6500K','MGMT 6500B - Managing Alliances in China //// MGMT6500B','MGMT 6500L - Emerging Challenges in International Business for Managers //// MGMT6500L','MGMT 6500P - Global Business Opportunities in Africa //// MGMT6500P','MGMT 6500Q - Understanding and Leading in the Sports Industry //// MGMT6500Q','MGMT 6500S - Consulting Skills Set with Life Project //// MGMT6500S','MGMT 6500T - South-East Asia: The Next Asia-Pacific Powerhouse //// MGMT6500T','MGMT 6510E - Strategic Management Research //// MGMT6510E','MGMT 6510H - Theory and Research on Creativity, Innovation and Entrepreneuship //// MGMT6510H','MGMT 6510I - Psychological and Sociological Foundations of Management //// MGMT6510I','MGMT 6970A - Independent Study //// MGMT6970A','MGMT 6990 - MPhil Thesis Research (MGMT 699, MGTO 699) //// MGMT6990, MGMT 699, MGTO 699, MGMT699,MGTO699','MGMT 7990 - Doctoral Thesis Research (MGMT 799, MGTO 799) //// MGMT7990, MGMT 799, MGTO 799, MGMT799,MGTO799','MIMT 5110 - Doing Business in Asia //// MIMT5110','MIMT 5200 - Responsible Global Leadership //// MIMT5200','MIMT 5210 - Managing Global Complexity //// MIMT5210','MIMT 5310 - Understanding Consumers: A Strategic Approach //// MIMT5310','MIMT 6120 - Skill Seminar II //// MIMT6120','MIMT 6200 - Business Project //// MIMT6200','MIMT 6300 - International Internship //// MIMT6300','NANO 5200 - Physics of Nanostructured Semiconductors (NANO 520) //// NANO5200, NANO 520, NANO520','NANO 6100 - Independent Study in Nano Science and Technology (NANO 610) //// NANO6100, NANO 610, NANO610','NANO 6990 - MPhil Thesis Research (NANO 699) //// NANO6990, NANO 699, NANO699','NANO 7990 - Doctoral Thesis Research (NANO 799) //// NANO7990, NANO 799, NANO799','PHYS 1001 - Physics and the Modern Society //// PHYS1001','PHYS 1002 - Introduction to Astrophysics and Astronomy (PHYS 002) //// PHYS1002, PHYS 002, PHYS002','PHYS 1003 - Energy and Related Environmental Issues (PHYS 006) //// PHYS1003, PHYS 006, PHYS006','PHYS 1112 - General Physics I with Calculus //// PHYS1112','PHYS 1113 - Laboratory for General Physics I //// PHYS1113','PHYS 1114 - General Physics II //// PHYS1114','PHYS 1115 - Laboratory for General Physics II //// PHYS1115','PHYS 1314 - Honors General Physics II //// PHYS1314','PHYS 2080 - Physics Seminar (PHYS 180) //// PHYS2080, PHYS 180, PHYS180','PHYS 2090 - Directed Studies in Physics I (PHYS 191) //// PHYS2090, PHYS 191, PHYS191','PHYS 2124 - Mathematical Methods in Physics I //// PHYS2124','PHYS 3032 - Classical Mechanics (PHYS 221) //// PHYS3032, PHYS 221, PHYS221','PHYS 3034 - Electricity and Magnetism II (PHYS 224) //// PHYS3034, PHYS 224, PHYS224','PHYS 3036 - Quantum Mechanics I (PHYS 234) //// PHYS3036, PHYS 234, PHYS234','PHYS 3037 - Honors Quantum Mechanics I (PHYS 236) //// PHYS3037, PHYS 236, PHYS236','PHYS 3090 - Directed Studies in Physics II (PHYS 291) //// PHYS3090, PHYS 291, PHYS291','PHYS 3090A - Directed Studies in Physics II //// PHYS3090A','PHYS 3090B - Directed Studies in Physics II //// PHYS3090B','PHYS 3142 - Computational Methods in Physics //// PHYS3142','PHYS 3152 - Methods of Experimental Physics I //// PHYS3152','PHYS 3153 - Methods of Experimental Physics II //// PHYS3153','PHYS 4052 - Introductory Solid State Physics (PHYS 332) //// PHYS4052, PHYS 332, PHYS332','PHYS 4053 - Lasers and Optical Electronics (PHYS 335) //// PHYS4053, PHYS 335, PHYS335','PHYS 4060 - Computational Physics (PHYS 381) //// PHYS4060, PHYS 381, PHYS381','PHYS 4071 - Big Bang Cosmology and Inflation //// PHYS4071','PHYS 4080 - Physics Seminar and Tutorial II (PHYS 380) //// PHYS4080, PHYS 380, PHYS380','PHYS 4090 - Directed Studies in Physics III (PHYS 391) //// PHYS4090, PHYS 391, PHYS391','PHYS 4090A - Directed Studies in Physics III //// PHYS4090A','PHYS 4191 - Capstone Project //// PHYS4191','PHYS 4291 - Capstone Research //// PHYS4291','PHYS 5310 - Statistical Mechanics I (PHYS 531) //// PHYS5310, PHYS 531, PHYS531','PHYS 5410 - Numerical Modeling in Physics //// PHYS5410','PHYS 5810 - Modern Semiconductor Physics (PHYS 581) //// PHYS5810, PHYS 581, PHYS581','PHYS 6000J - Physics Seminar //// PHYS6000J','PHYS 6100B - Individual Study in Physics //// PHYS6100B','PHYS 6770 - Professional Development in Science (Physics) //// PHYS6770','PHYS 6810B - Solid State II //// PHYS6810B','PHYS 6810D - Introduction to Quantum Field Theory //// PHYS6810D','PHYS 6990 - MPhil Thesis Research (PHYS 699) //// PHYS6990, PHYS 699, PHYS699','PHYS 7990 - Doctoral Thesis Research (PHYS 799) //// PHYS7990, PHYS 799, PHYS799','RMBI 1020 - Business Intelligence in Contemporary Society //// RMBI1020','RMBI 4220 - Life Contingencies Models and Insurance Risk //// RMBI4220','RMBI 4310 - Advanced Data Mining for Risk Management and Business Intelligence //// RMBI4310','RMBI 4980 - Risk Management and Business Intelligence Capstone Project I //// RMBI4980','RMBI 4990 - Risk Management and Business Intelligence Capstone Project II //// RMBI4990','SBMT 1111 - Business Student Induction (SBMT 111) //// SBMT1111, SBMT 111, SBMT111','SBMT 2010 - Business Ethics and the Individual //// SBMT2010','SBMT 2100H - Social Responsibilities Project //// SBMT2100H','SBMT 2110F - Social Services Project //// SBMT2110F','SBMT 2110G - Social Services Project //// SBMT2110G','SBMT 3200F - Corporate Project //// SBMT3200F','SBMT 3210J - Business Project //// SBMT3210J','SBMT 5020 - Fundamentals of Economics and Finance (SBMT 502) //// SBMT5020, SBMT 502, SBMT502','SBMT 5030 - Marketing Management and Strategy (SBMT 503) //// SBMT5030, SBMT 503, SBMT503','SBMT 5460 - Business Plans Competition (SBMT 546, SBMT 601H) //// SBMT5460, SBMT 546, SBMT 601H, SBMT546,SBMT601H','SBMT 5470 - Case Analysis Competition (SBMT 547, SBMT 601I) //// SBMT5470, SBMT 547, SBMT 601I, SBMT547,SBMT601I','SBMT 5490 - Asia Study Tour (SBMT 6010C) //// SBMT5490, SBMT 6010C, SBMT6010C','SBMT 6010H - Business Chinese for MBA students //// SBMT6010H','SBMT 6010M - HKUST Global Network Week //// SBMT6010M','SBMT 6010N - Global Study Tour //// SBMT6010N','SBMT 6200A - Independent Study //// SBMT6200A','SBMT 6200B - Independent Study //// SBMT6200B','SBMT 6770 - Professional Development in Academia for Business //// SBMT6770','SCIE 1000 - Science School Induction //// SCIE1000','SCIE 1090D - Service Learning Program: Underwater Robot Community Engagement Project //// SCIE1090D','SCIE 1090E - Service Learning Program: Wofoo Grace Nursing Home //// SCIE1090E','SCIE 1100 - Career Building for Science Students //// SCIE1100','SCIE 1110 - Great Ideas in Science //// SCIE1110','SCIE 1120 - Chemistry and Life //// SCIE1120','SCIE 1500 - Guided Study on Research I //// SCIE1500','SCIE 2500 - Guided Study on Research II //// SCIE2500','SCIE 3500 - IRE Research Project I //// SCIE3500','SCIE 4500 - IRE Research Project II //// SCIE4500','SCIE 4850 - Young Entrepreneurship Syndicate in Applied Sciences Workshop //// SCIE4850','SHSS 1010 - First-year Seminar (SHSS 101) //// SHSS1010, SHSS 101, SHSS101','SHSS 1030 - Career Building for Global China Studies Students //// SHSS1030','SHSS 4991 - Capstone Project (SHSS 302) //// SHSS4991, SHSS 302, SHSS302','SHSS 4992 - Honors Thesis //// SHSS4992','SHSS 4993 - Honors Research (SHSS 4990, SHSS 301) //// SHSS4993, SHSS 4990, SHSS 301, SHSS4990,SHSS301','SHSS 6770 - Professional Development in Humanities and Social Science //// SHSS6770','SOSC 1110 - Science, Technology and Society (SOSC 111) //// SOSC1110, SOSC 111, SOSC111','SOSC 1190 - China and the World:  China\'s Development in Historical and Comparative Perspectives (SOSC 119) //// SOSC1190, SOSC 119, SOSC119','SOSC 1340 - China-United States Relations (SOSC 134) //// SOSC1340, SOSC 134, SOSC134','SOSC 1420 - Poverty (SOSC 142) //// SOSC1420, SOSC 142, SOSC142','SOSC 1662 - Contemporary Hong Kong: Society (SOSC 166) //// SOSC1662, SOSC 166, SOSC166','SOSC 1850 - Understanding Society (SOSC 185) //// SOSC1850, SOSC 185, SOSC185','SOSC 1960 - Discovering Mind and Behavior (SOSC 196) //// SOSC1960, SOSC 196, SOSC196','SOSC 1980 - Psychology and Everyday Life (SOSC 198) //// SOSC1980, SOSC 198, SOSC198','SOSC 2120 - The Party-state System in China: Origins and Developments //// SOSC2120','SOSC 2130 - Education and Society //// SOSC2130','SOSC 2280 - International Relations of East Asia (SOSC 228) //// SOSC2280, SOSC 228, SOSC228','SOSC 2290 - Understanding Globalization (SOSC 229) //// SOSC2290, SOSC 229, SOSC229','SOSC 2960 - Educational Psychology (SOSC 1000B) //// SOSC2960, SOSC 1000B, SOSC1000B','SOSC 3000D - Psychology of Environmental Sustainability //// SOSC3000D','SOSC 3000F - Gender and Development //// SOSC3000F','SOSC 3130 - Hong Kong Culture (SOSC 313) //// SOSC3130, SOSC 313, SOSC313','SOSC 3410 - East Asian Economic Development (SOSC 341) //// SOSC3410, SOSC 341, SOSC341','SOSC 3520 - Understanding Comparative Politics (SOSC 152) //// SOSC3520, SOSC 152, SOSC152','SOSC 3530 - Social Movements and Contentious Politics //// SOSC3530','SOSC 4000D - Chinese Capitalism: Historical and Comparative Perspectives //// SOSC4000D','SOSC 4280 - China in the Global Political Economy //// SOSC4280','SOSC 5170 - Systematic Methods in Qualitative Research (SOSC 517) //// SOSC5170, SOSC 517, SOSC517','SOSC 5340 - Quantitative Analysis in Social Science (SOSC 534) //// SOSC5340, SOSC 534, SOSC534','SOSC 5620 - Sustainable Development (SOSC 562) //// SOSC5620, SOSC 562, SOSC562','SOSC 5720 - Economic Development in China (SOSC 6030A, SOSC 603L) //// SOSC5720, SOSC 6030A, SOSC 603L, SOSC6030A,SOSC603L','SOSC 5760 - Structural Equation Modeling (SOSC 602M) //// SOSC5760, SOSC 602M, SOSC602M','SOSC 6030G - Chinese Capitalism: Historical and Comparative Perspectives //// SOSC6030G','SOSC 6100A - Independent Study (SOSC 610A) //// SOSC6100A, SOSC 610A, SOSC610A','SOSC 6100C - Independent Study (SOSC 610C) //// SOSC6100C, SOSC 610C, SOSC610C','SOSC 6990 - MPhil Thesis Research (SOSC 699) //// SOSC6990, SOSC 699, SOSC699','SOSC 7990 - Doctoral Thesis Research (SOSC 799) //// SOSC7990, SOSC 799, SOSC799','SSMA 5040 - Understanding Human Behavior (SSMA 504) //// SSMA5040, SSMA 504, SSMA504','SSMA 5110 - Quantitative Data Analysis //// SSMA5110','SSMA 5180 - Migration and Globalization //// SSMA5180','SSMA 5190 - Analyzing International Relations: China and the U.S. //// SSMA5190','TEMG 1010 - Technology and Management Professional Activities (TEMG 001) //// TEMG1010, TEMG 001, TEMG001','TEMG 4950S - Special Project: Smart Homes for Global Markets //// TEMG4950S','UROP 1100N - Undergraduate Research Opportunities Series 1 (UROP 110) //// UROP1100N, UROP 110, UROP110','UROP 2100N - Undergraduate Research Opportunities Series 2 (UROP 120, UROP 1200) //// UROP2100N, UROP 120, UROP 1200, UROP120,UROP1200','UROP 3100N - Undergraduate Research Opportunities Series 3 (UROP 130, UROP 1300) //// UROP3100N, UROP 130, UROP 1300, UROP130,UROP1300','UROP 4100N - Undergraduate Research Opportunities Series 4 (UROP 1400) //// UROP4100N, UROP 1400, UROP1400','WBBA 2010 - Understanding Business in Asia //// WBBA2010','WBBA 2020 - Seminars in Asia\'s Business //// WBBA2020'];
    var allinstructors = ['ADAVAL, Rashmi','ALTMAN, Michael Scott','ARYA, Sunil','AU, Chui Han Anita','BAARK, Erik','BALASUBRAMANIAN, Sujata','BANFIELD, David Karl','BARFORD, John Patrick','BENSAOU, Brahim','BHATTACHARYA, Utpal','BOOKHART, Davis Boyd','BRACHT, Philine','CAI, Lilong','CAI, Ning','CAI, Yongshun','CAO, Zike','CARMICHAEL, Sarah','CHAN, Charles Wing Hoi','CHAN, Chi Ming','CHAN, Chun Man','CHAN, Dennis Ho Wai','CHAN, Dennis Suk Sun','CHAN, Gary Shueng Han','CHAN, Hilton Kwok Hung','CHAN, Ho Bun','CHAN, Jessica','CHAN, Jimmy Wai Man','CHAN, Ki Cecia','CHAN, Kin Sek Raymond','CHAN, Kit Yu Karen','CHAN, Kwan Kit Jason','CHAN, Man Sun','CHAN, Pak To','CHAN, Wan','CHAN, Yiu Nam','CHAN, Yui Bun','CHAN, Yung','CHANG, Chih-chen','CHANG, David Cheng','CHANG, Huai-Liang','CHANG, Mang Yee','CHANG, Sue Chee Fong','CHAO, Melody Man Chi','CHAO, Yu Hang Christopher','CHASNOV, Jeffrey Robert','CHAU, Ying','CHEN, Beifang','CHEN, Eva E','CHEN, Fong Fong','CHEN, Guanghao','CHEN, Guohua','CHEN, Johnny','CHEN, Kai','CHEN, Kani','CHEN, Kevin Chien-Wen','CHEN, Kevin Jing','CHEN, Kim Heng','CHEN, Lei','CHEN, Songnian','CHEN, Tai-Yuan','CHEN, Tian Wen','CHEN, Ying Ju','CHENG, Chi Wai George','CHENG, Jack Chin Pang','CHENG, Jinping','CHENG, Siu Wing','CHENG, Wai Yi Rosita','CHEUNG, Cassian','CHEUNG, Helen','CHEUNG, Ka Man Annie','CHEUNG, Ki Ling','CHEUNG, Man Fung','CHEUNG, Pak Hang Peter','CHEUNG, Shing Chi','CHEUNG, Siu Woo','CHEUNG, Tsz Lok','CHEUNG, Yat Ming','CHEW, Chiat Thian','CHI, Chia-Fen','CHI, Man Lai Amy','CHIANG, Yik Man','CHIGRINOV, Vladimir','CHING, Avery','CHING, Frank','CHO, Hye Jee','CHOI, Ricky Yiu Kee','CHOI, Timture','CHOI, Yuet Ngor','CHONG, Kim Chong','CHONG, Siu Chung','CHOW, Cupid','CHOW, King Lau','CHOY, Ting Pong','CHUI, Hiu Yeung Samson','CHUNG, Albert Chi Shing','CHUNG, Esther LC','CHUNG, Kenny K','CHUNG, Kun Yee','CHUNG, Wai Keung Philip','CIUCCI, Francesco','CLARK, Theodore Henry King','CLAYTON, Anne Catherine','CUI, Zhijian','DAI, Wei Min','DALTON, Amy Nicole','DIAS, Garvin Percy','DIMITRAKOPOULOS, Ilias','DING, Cunsheng','DING, Fei','DING, Xueliang','DORAN, Christopher','DROSCHA, Isaac David','DU, Lilun','DU, Shengwang','EL-HAWARY, Mohamed El-Aref','ENGLAND, Graham James Fisher','ERDMANN, Cornelia Heidemarie','FAN, Xiaopeng','FAN, Yiu Kwan','FAN, Zhiyong','FANG, Lu','FARH, Ching-ping Patty','FARH, Larry Jiing-lih','FARMER, Rebecca','FENG, Yue','FERGUSON, Sean Omar','FOK, Pik Lin','FONG, Tsz Ho','FOO, Pionie Kim Ling','FORSTER, Paul Whitfield','FRANKLIN, Laurence Craig','FREEMAN, Danyal Jonathan','FU, Kit Yu','FU, Li-tsui','FUNG, Hon Fai','FUNG, Jimmy Chi Hung','FUNG, John','GAN, Jianping','GAO, Paul','GAO, Ping','GAO, Yongsheng','GARCIA HERRERO, Alicia','GARG, Sam','GASKELL, Delian Dawn','GEORGE, Elizabeth','GHIDAOUI, Mohamed Salah Ben Habib','GIBSON, J Robert','GOLIN, Mordecai Jay','GONG, Yaping','GOONETILLEKE, Ravindra Stephen','GOYAL, Vidhan Krishan','GRIFFITH, Stephen Miles','GROVES, Julian Mcallister','GU, Jiaying','GUO, Bing','GUO, Yusong','GUO, Zhihong','HA, Albert Yiu Cheung','HAN, Wei','HAN, Yilong','HARDING JR, Harry','HE, Guojun','HE, Jinyu','HE, Wenkai','HERRUP, Karl','HO, Ching Ching Mary','HO, Hon Ming','HO, Kin Sang Kenneth','HO, Susanna Pui San','HO, Vincent Simon','HO, Virgil Kit Yiu','HONG, Jean (Ji Yeon)','HONG, Se-Joon','HOPKINS, Mark','HORNER, Andrew Brian','HSING, I-ming','HSU, Chin Tsau','HU, Inchi','HU, Jishan','HU, Paul Jen-Hwa','HU, Wei Chung','HU, Xijun','HUA, Xinyu','HUANG, Baoling','HUANG, Jingsong','HUANG, Pingbo','HUANG, Xuhui','HUANG, Xun','HUCKSTEP, Nigel John','HUI, Chi Wai','HUI, Kai Lung','HUI, Kai Wai','HUI, Pan','HUNG, Siu Chun','HUSSIN, Nora Anniesha Binte','IEONG, Sze Chung Ricci','ISHIBASHI, Toyotaka','JAISINGH, Jeevan','JAMES, Lancelot Fitzgerald','JIA, Guocheng','JIA, Jia','JING, Bing-yi','JO, Gyu Boong','JONEJA, Ajay','KAILA, Ilari Julius','KAO, Tsui Fen','KARHADE, Prasanna','KASTEN, Keven Sterling','KATAFYGIOTIS, Lambros','KE, Ping Fan','KI, Wing Hung','KIM, Jang Kyo','KIM, Jun Beom','KIM, Sung Hun','KING, Roger','KO, Ice Wai Ping','KO, Lawrence','KO, Robert Kam Ming','KOH, Ping Sheng','KOH, Tat Koon','KONG, Yeung Yeung Ava','KU, Shuk Mei Agnes','KU, Yin Bon','KUANG, Jun Shang','KUO, Allen Chung','KURSUN, Volkan','KWAN, Charles Chi-Fong','KWAN, Joseph Kai Cho','KWAN, Yuen Tung Gloria','KWOK, Hoi Sing','KWOK, James Sai Ho','KWOK, James Tin Yau','KWOK, Yue Kuen','KWONG, Yee Ngan','LADAO, Miguel Antonio','LAFON-VINAIS, Veronique J A','LAI, Man Kit','LAI, Pui Yee','LAI, Tai Wai David','LAKERVELD, Richard','LAM, Chak Yan Jessie Teresa','LAM, Charles','LAM, David Chuen Chun','LAM, Gibson','LAM, Henry Hei Ning','LAM, Ka Sin Cindy','LAM, Leung Yuk Frank','LAM, Levi','LAM, Martha Pik Har TANG','LAM, Ngok','LAM, Toni','LAM, Tsz Kin','LAM, Yeung','LAM, Yin','LAU, Alexis Kai Hon','LAU, Chun Yin','LAU, Kei May','LAU, Ngai Ting','LAU, Pui Sang','LAU, Ronald','LAU, Sau Mui','LAU, Stanley Chun Kwan','LAU, Tak Yee','LAU, Vincent Kin Nang','LAW, Kam Tuen','LEA, Chin-Tau','LEE, Bernard','LEE, Chung-Yee','LEE, Dik Lun','LEE, Hoi Ming','LEE, Hong Seng Daniel','LEE, Joyce Yuen Yee','LEE, Ping Chung Eric','LEE, Pui','LEE, Ricky Shi-wei','LEE, Stephen Kim Lon','LEE, Steve Hon-keung','LEE, Wai Hong','LEE, Wing Lung','LEE, Yi-Kuen','LEE, Yonghoon','LEUNG, Chi Sun Benjamin','LEUNG, Christopher Kin Ying','LEUNG, Danny Chi Yeu','LEUNG, Kar Wah','LEUNG, Pak Wo','LEUNG, Shing Yu','LEUNG, Siu Fai','LEUNG, Suk Wai Winnie','LEUNG, Tsung Hsien Johnny','LEUNG, Wa Hung','LEUNG, Wai Ting','LEVERMORE, Roger John','LHABITANT, Francois-Serge','LI, Angie Eugenia','LI, Edward Siu Leung','LI, Eugene','LI, Hung Ha Wendy','LI, J.T.','LI, Kai','LI, Kin Yin','LI, Larry','LI, Ning','LI, Po Lung','LI, Qing','LI, Xiaoyuan','LI, Xin','LI, Yingying','LI, Yiu Fai Vincent','LI, Zexiang','LI, Zhigang','LI, Zongjin','LIANG, Chun','LIANG, Xin','LIEM, Rhea Patricia','LIM, Dennis Tan','LIM, Woo Young','LIN, Betty Fwei-chien','LIN, Fangzhen','LIN, Nian','LIN, Yi-Min','LIN, Zhenyang','LING, Shiqing','LIU, Chi Leung','LIU, Hongbin','LIU, Jianmei','LIU, Kai','LIU, Qian','LIU, Tao','LIU, William Guanglin','LIU, Xuewen','LIU, Yuanshuai','LO, Chi Wai','LO, Hong Kam','LO, Irene Man Chi','LOCHOVSKY, Frederick Horst','LORTZ, Rolf Walter','LOY, Michael Ming-tak','LUI, Francis T','LUO, Jun','LUO, Qiong','LUO, Shuangyu','LUO, Zhengtang','LUONG, Howard Cam','MA, Jianxiong','MA, John Zhongdong','MA, Kwong Wai Bruce','MA, Lok Wang','MA, Xiaojuan','MACKAY, Peter','MAK, Brian Kan Wing','MAK, Ho Yi','MAK, Kelvin P','MAK, Linda Yeung Oi','MAK, Yiu Wing','MCKAY, Matthew Robert','MCMINN, Sean William John','MEGAN, Melissa Jane','MENG, Guowu','MEYER, Marshall Warner','MIHOREAN, Mark Andrew','MILLER, Andrew Leitch','MOK, Helen W','MOK, Philip Kwok Tai','MOW, Wai Ho','MOY, Allen','MU, Mo','MUKHOPADHYAY, Anirban','MUPPALA, Kumaraswamy R Jogesh','NAM, Sai Lok','NASIRY, Javad','NASON, Emily M','NASON, Stephen William','NELSON, Eric S','NEW, Christopher','NG, Choi Ping Martha','NG, Irene Wai Yee','NG, Jay Barry','NG, Ka Man','NG, Ka Ming','NG, Ka Wai Tommy','NG, Lung Fai Moses','NG, Shi Chung','NG, Shu Ming','NG, Tze Ling','NG, Wilfred Siu Hung','NG, Yee Fai','NI, Rong','NI, Sophie Xiaoyan','NIELSEN, Kasper Meisner','NORTHERN, Andrew Christopher','NUO, Min','OLSON, Stephen James','PAN, Baoqian','PAN, Ping','PANAYOTOV, George Kamenov','PAPADIAS, Dimitrios','PARK, Hyo Keun','PATCHELL, Gerald Roe','PAU, Mo Ching','PENG, Xianhua','PEREZ PALOMAR, Daniel','PHI, Joseph C.','PI, Lynn','PONG, James Kenneth','PONG, Ting Chuen','POON, Andrew Wing On','POON, Randy Yat Choi','PUN, Wing Man Winnie','QI, Jin','QI, Qi','QI, Robert Zhong','QI, Xiangtong','QIAN, Peiyuan','QIAN, Tiezheng','QIU, Huihe','QIU, Xuan','QU, Huamin','QU, Jianan','QUAN, Long','RAITT, Gene','RAO, Milind Shankar','RAO, Yu Jing','REN, Tao','RENNEBERG, Alfred Herbert Reinhard','ROSENCRANTZ, Louise Marie Ariadne','ROSSITER, David','SADHWANI, Dinesh Arjan','SAENYASIRI, Ekkachai','SALUJA, Geetanjali','SALVACRUZ, Joseph','SANDER, Pedro','SAUTMAN, Barry Victor','SEK, Man Chi Ivy','SEN, Rik S','SENGUPTA, Jaideep','SEPULCHRE, Alain Jean Charles','SHANG, Chii','SHAO, Minhua','SHARE, Michael Barry','SHAW, May-yi','SHE, James','SHEN, Shaojie','SHENG, Ping','SHI, Bertram Emil','SHI, Ling','SHI, Yang','SHIEH, Tony','SHUM, Chung Dak','SHUM, Kwok Leung','SIN, Johnny Kin On','SIN, Kathy Mun Yee','SIU, Chi Ming Anthony','SIU, Kam Wing','SIU, Wai Sze Grace','SO, Billy Kee Long','SO, Man Chung Mandy','SO, Richard Hau Yue','SO, Ting Pat Albert','SONG, Shenghui','SOU, Iam Keong','STICE, Derrald','SU, Yumian','SUEN, Shu Kwan','SULLIVAN, Bilian NI','SUN, Fei','SUN, Hepn Wing','SUN, Jianwei','SUN, Jingtao','SUN, Karina','SUN, Qingping','SUNG, Michael','SZETO, Kwok Yip','TAI, Chiew Lan','TAM, Kar Yan','TAM, Kevin Kim-Pong','TAM, Wing Yim','TANG TANG, Raymundo Saijong','TANG, Benzhong','TANG, Chi Keung','TANG, Eunice','TANG, Jessica Ce Mun','TANG, Kai','TANG, Kin Hun','TANG, Yimeng','TEH, Jack Her Hock','TERRY, Edith Buchanan','THONG, James Yeong Liang','TO, Ka Ki','TOMMASINI, Matthew William','TONG, Keith Sai-Tao','TONG, Penger','TONG, Rongbiao','TSAI, Kellee Sing','TSANG, Alfred Jones','TSANG, Danny Hin Kwok','TSANG, Ming Wai Emily','TSANG, Perseus','TSANG, Shuk Ching Elza','TSE, Kam Tim','TSE, Sheung Hei Chris','TSIM, Karl Wah Keung','TSOI, Yau Chat','TSOU, Ka Yin Benjamin','TSUI, Chi Ying','TSUI, Herman Yik Wai','TSUI, Ka','TSUNG, Fugee','TUNG, Joanne Wai Ting','TYE, Bik Kwoon YEUNG','UKKUSURI, Satish Venkata Siva','VAN DER LANS, Ralf','VISARIA, Sujata','WAN, Guoguang','WAN, Tsz Shing','WAN, Xuhu','WANG, Gang','WANG, Hongbo','WANG, Jiannong','WANG, Jin','WANG, Jing','WANG, Jui Pin','WANG, Michael Yu','WANG, Ning','WANG, Peng','WANG, Pengfei','WANG, Shiheng','WANG, Susheng','WANG, Wei','WANG, Wenbo','WANG, Wenxiong','WANG, Xiangrong','WANG, Xiaoping','WANG, Yang','WANG, Yi','WANG, Yong','WANG, Zhao-Yin','WATANABE, Yasutora','WEI, Kuo-chiang','WEN, Zilong','WEST, Leonard Kip','WILLIAMS, Ian Duncan','WONG, Chun Fai Jeffrey','WONG, Chun Ho','WONG, Elaine Suk Yi','WONG, Grace Hoi Yee','WONG, James K.','WONG, Joseph Tin Yum','WONG, Ka Hei Kevin','WONG, Ka Yue','WONG, Kai Hung','WONG, Kai Sun Albert','WONG, Kam Sing','WONG, Lee Long Shaun','WONG, Lisa L. M.','WONG, Man','WONG, Man Yu','WONG, Ngam Susan','WONG, Nick','WONG, Raymond Chi Wing','WONG, Raymond Sze Chung','WONG, Simon Man Ho','WONG, Sin Kwok Raymond','WONG, Stone','WONG, Wan Keung','WONG, Wei Wah','WONG, Yung Hou','WOO, Kam Tim','WU, Chi Hang','WU, Dekai','WU, Hongkai','WU, Kam Yin','WU, Lixin','WU, Po Chi','WU, Shengqing','WU, Zhenguo','XIA, Jun','XIANG, Yang','XIE, Danyang','XIE, Xiaohui','XIONG, Maosheng','XU, Hong','XU, Jiang','XU, Juanyi','XU, Kun','XU, Xiufen','XUE, Hong','YAN, Dengfeng','YAN, He','YAN, Lianke','YAN, Min','YAN, Yan','YAN, Yijing','YANG, Hai','YANG, Qiang','YANG, Shihe','YANG, Zhi Yu','YAO, Shuhuai','YE, Wenjing','YEE, Terrence Fu','YEONG, Tsz Ying','YEUNG, Alex H.L.','YEUNG, Dit Yan','YEUNG, King Lun','YEUNG, Lam Lung','YEUNG, Wai Mun Lucia','YEW, Liza Sook Yee','YI, Ke','YIK, Ping Chui','YIM, Bobby Tsz Kin','YIP, Ka Yue Carmel','YIP, Kam Ming','YIP, Wing Ping','YIU, Yuk Man Carine','YOBAS, Levent','YOU, Haifeng','YU, Anna Po Shan','YU, Anna Wai Yin','YU, Chi Wai','YU, Jianzhen','YU, Man','YU, Samuel Chung Toi','YU, Weichuan','YU, Yan','YUAN, George Jie','YUE, Po Lock','YUEN, Ka Ming','YUEN, Matthew Ming Fai','YUNG, Hoi Hei','ZALDOKAS, Alminas','ZENG, Qinglu','ZHANG, Charles Chuan','ZHANG, Chu','ZHANG, Guochang','ZHANG, Haizhang','ZHANG, Hongtao','ZHANG, Jiheng','ZHANG, Jun','ZHANG, Li Min','ZHANG, Min','ZHANG, Mingjie','ZHANG, Nevin Lianwen','ZHANG, Qian','ZHANG, Rachel Quan','ZHANG, Ting','ZHANG, Wei','ZHANG, Wenwen','ZHANG, Xiangru','ZHANG, Xiaoquan','ZHANG, Xiaowei','ZHANG, Xin','ZHANG, Xueqing','ZHANG, Xuning','ZHANG, Yi Qin Jane','ZHANG, Yun','ZHAO, Jidong','ZHAO, Tianshou','ZHAO, Xiaojian','ZHAO, Ying','ZHELYAZKOV, Pavel Ivanov','ZHENG, Qingbin','ZHENG, Xinghua','ZHOU, Chao','ZHOU, Tong','ZHOU, Wenwen','ZHU, Guang','ZHU, Jing','ZHU, Xiaonong','ZHU, Yongchang','ZWEIG, David Stephen'];
    var suggestc = function(q, ret) {
        q = q.term.toLowerCase();
        var prefix = [];
        var others = [];
        for (var i=0; i<allcourses.length; i++) {
            var s = allcourses[i].toLowerCase();
            if (s.indexOf(q)!=-1) {
                var subj = allcourses[i];
                var cls = subj.substr(5,subj.indexOf(' - ')-5);
                subj = subj.substr(0,4);
                var loc = "/wcq/cgi-bin/1530/subject/"+subj+'#'+subj+cls;
                if (s.indexOf(q)==0) {
                    prefix.push({'label':allcourses[i].substr(0,allcourses[i].indexOf(' //// ')), 'location':loc});
                } else {
                    others.push({'label':allcourses[i].substr(0,allcourses[i].indexOf(' //// ')), 'location':loc});
                }
            }
        }
        ret($.merge(prefix, others));
    }
    var suggesti = function(q, ret) {
        q = q.term.toLowerCase();
        var prefix = [];
        var others = [];
        for (var i=0; i<allinstructors.length; i++) {
            var s = allinstructors[i].toLowerCase();
            if (s.indexOf(q)!=-1) {
                var loc = "/wcq/cgi-bin/1530/instructor/"+allinstructors[i];
                if (s.indexOf(q)==0) {
                    prefix.push({'label':allinstructors[i], 'location':loc});
                } else {
                    others.push({'label':allinstructors[i], 'location':loc});
                }
            }
        }
        ret($.merge(prefix, others));
    }
    $("input#coursesearch").autocomplete({
        source: suggestc,
        delay: 0, minLength: 3,
        select: function(event, ui) {
            location = ui.item.location;
        }
    });
    $("input#instructorsearch").autocomplete({
        source: suggesti,
        delay: 0, minLength: 2,
        select: function(event, ui) {
            location = ui.item.location;
        }
    });
    $(document).ready(function () {
        $(window).scroll(function (event) {
            $('#navigator').css('left',-($(this).scrollLeft()));
        });
    });
</script>
</body>
</html>