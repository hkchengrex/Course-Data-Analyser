<?php

/**
 * A class for course data.
 * @var $course_code -   String, i.e. COMP2021
 * @var $course_name -   String, i.e. Unix and Script Programming
 * @var $course_credit - Integer, i.e. 3
 * @var $prerequisite -  String, i.e. COMP 1002 OR COMP 1004 [Need to be further processed with logical separation]
 * @var $exclusion -     Array of String, i.e. [COMP1021, COMP1239]
 * @var $attributes -    Array of String, i.e. [SSC - H, SA]
 * @var $previous_code - String, i.e. COMP111
 * @var $description -   String, i.e. blah blah blah
 * @var $sections -      Array of #Section
 * @var $need_matching - Boolean, whether the course need to match lab/tut/lec or not
 */
class Course{
    public $course_code = "COMP2021";
    public $course_name = "Unix and Script Programming";
    public $course_credit = 3;
    public $prerequisite = array();
    public $exclusion = array();
    public $attributes = array();
    public $previous_code = "COMP111";
    public $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
         velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    public $sections = array();
    public $need_matching = true;
}

/**
 * A class for section data.
 * @var $section_id -       Integer, i.e. 1737
 * @var $nature -           String, i.e. L(lecture)/LA(Lab)/T(Tutorial)
 * @var $date_and_time -    String, i.e. We 09:00AM - 10:50AM
 * @var $room -             String, i.e. Rm 5620, Lift 31-32
 * @var $instructor -       String, i.e. CHENG, Ho Kei
 * @var $quota -            Integer
 * @var $enroll -           Integer
 * @var $wait -             Integer
 * @var $matching_id -      Integer, like 0/1/2/3 to identity matching between L/LA/T
 */
class Section{
    public $section_id = 1234;
    public $nature = "L";
    public $date_and_time = 'We 09:00AM - 10:50AM';
    public $room = 'Rm 5620, Lift 31-32';
    public $instructor = 'CHENG, Ho Kei';
    public $quota = 89;
    public $enroll = 12;
    public $wait = 34;
    public $matching_id = 0;
    //$avail = $quota - $enroll - $wait
}

?>