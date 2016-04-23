<?php

class Crawler{
    public $page_string;
    /** @var simple_html_dom $page_html*/
    public $page_html;

    public $curl;
    public $loaded_class = array();

    public function __construct() {
        global $curl, $loaded_class;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://w5.ab.ust.hk/wcq/cgi-bin/1530/subject/COMP");
        //Do not verify the site certificate
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $loaded_class = array();
    }

    public function crawler_get(){
        global $curl, $page_string, $page_html;
        $page_string = curl_exec($curl);
        curl_close($curl);

        $page_html = str_get_html($page_string);
    }

    public function load_classes(){
        /** @var simple_html_dom $page_html*/
        /** @var simple_html_dom_node $course_node*/
        /** @var Course $course*/

        global $page_html;

        foreach ($page_html->getElementById("classes")->find(".course") as $course_node){
            $course = new Course();

            $title = $course_node->find("h2", 0)->plaintext;

            //Get the course code
            $hypen_pos = strpos($title, "-");
            $course->code = implode('', explode(' ', substr($title, 0, $hypen_pos-1)));

            //Get the credit number
            $matches = array();
            preg_match('/\([0-9] units?\)/', $title, $matches);
            $course->credit = substr($matches[0], 1, 1);

            //Get the course name
            $name_start_index = $hypen_pos+1;
            $name_end_index = strrpos($title, '(');
            $course->name = substr($title, $name_start_index, $name_end_index-$name_start_index-1);

            //Get info in the popup detail
            $popup_detail = $course_node->find('.courseattr', 0);
            foreach ($popup_detail->find('tr') as $popup_item){
                /** @var simple_html_dom_node $popup_item*/
                $message = $popup_item->find('td', 0)->plaintext;
                switch ($popup_item->find('th', 0)->plaintext){
                    case "ATTRIBUTES":
                        //First explode by programs, then add programs back
                        $temp_array = explode('programs', $message);
                        foreach($temp_array as &$attri_item){
                            $attri_item .= "programs";
                        }
                        array_pop($temp_array);
                        $course->attrib = $temp_array;
                        break;
                    case "EXCLUSION":
                        //Separate items
                        //$temp_array = explode(', ', $message);
                        //$course->exclude = $temp_array;
                        $course->exclude = $message;
                        break;
                    case "PRE-REQUISITE":
                        //Separate items
                        //$temp_array = explode(' OR ', $message);
                        //$course->prereq = $temp_array;
                        $course->prereq = $message;
                        break;
                    case "PREVIOUS CODE":
                        //Directly assign
                        $course->pre_code = $message;
                        break;
                    case "DESCRIPTION":
                        //Directly assign
                        $course->descript = $message;
                        break;
                }
            }

            //Load sections details
            foreach ($course_node->find('.newsect') as $section_node){
                /** @var simple_html_dom_node $section_node*/
                $section = new Section();
                $section_items = $section_node->find('td');

                //Zero contains L/T/LA, index, and unique id
                $matches = array();

                //Get the nature, L/T/LA
                preg_match("/(LA|L|T|R)/", $section_items[0]->plaintext, $matches);
                $section->nature =  $matches[0];

                //Get the match id, 1/2/3/...
                preg_match("/(?:LA|L|T|R)([0-9]+)/", $section_items[0]->plaintext, $matches);
                $section->match_id = $matches[1];

                //Get the course unique id
                preg_match("/\(([0-9]+)\)/", $section_items[0]->plaintext, $matches);
                $section->id = $matches[1];

                //One contains date and time
                $section->date_time = $section_items[1]->plaintext;

                //Two contains room and capacity
                if (strcmp($section_items[2]->plaintext, 'TBA') == 0){
                    $section->room = 'TBA';
                }else {
                    $section->room = substr($section_items[2]->plaintext, 0, strrpos($section_items[2]->plaintext, '(') - 1);
                }

                //Three contains instructor
                //$section->instructor = $section_items[3]->plaintext;
                foreach ($section_items[3]->find('a') as $instructor){
                    array_push($section->instructor, $instructor->plaintext);
                }
                if (strcmp($section_items[3], 'TBA') == 0){
                    $section->instructor[0] = 'TBA';
                }

                //Four contains Quota
                preg_match("/([0-9]+)/", $section_items[4]->plaintext, $matches);
                $section->quota = $matches[1];

                //Five contains enroll
                $section->enroll = $section_items[5]->plaintext;

                //Six contains Avail
                $section->avail = $section_items[6]->plaintext;

                //Seven contains wait
                $section->wait = $section_items[7]->plaintext;

                //Eight contains remark and consent
                if ($section_items[8]->find('.classnotes', 0) !== null){
                    $shit = $section_items[8]->find('.classnotes', 0)->find('.popupdetail', 0)->plaintext;
                    $section->remark = str_replace('&gt; ', '', $shit);
                }

                if ($section_items[8]->find('.consent', 0) !== null){
                    $section->consent = true;
                }else{
                    $section->consent = false;
                }

                array_push($course->sections, $section);
            }

            array_push($this->loaded_class, $course);
        }
    }
}

?>