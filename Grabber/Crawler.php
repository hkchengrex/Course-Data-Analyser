<?php

class Crawler{
    public $page_string;
    /** @var simple_html_dom $page_html*/
    public $page_html;

    public $curl;
    public $got_class = array();

    public function __construct() {
        global $curl;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "https://w5.ab.ust.hk/wcq/cgi-bin/1530/subject/COMP");
        //Do not verify the site certificate
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
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
                        $temp_array = explode(', ', $message);
                        $course->exclude = $temp_array;
                        break;
                    case "PRE-REQUISITE":
                        //Separate items
                        $temp_array = explode(' OR ', $message);
                        $course->exclude = $temp_array;
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
                preg_match("/(LA|L|T)/", $section_items[0], $matches);
                $section->nature =  $matches[0];

                //Get the match id, 1/2/3/...
                preg_match("/(?:LA|L|T)[0-9]+/", $section_items[0], $matches);
                $section->match_id = $matches[0];

                array_push($course->sections, $section);
            }

            $course->print_out();
        }
    }
}

?>