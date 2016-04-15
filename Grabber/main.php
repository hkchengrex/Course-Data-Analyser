<?php
/**
 * A COMP2021 Project in HKUST
 * Author:
 *      Chan Nok Hin
 *      Cheng Ho Kei 12219689
 *      Sze Ka Yau
 * Licensed under MIT license
 */

include_once ('./lib/simple_html_dom.php');
include_once ('classes.php');
include_once ('DBHelper.php');

ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);

$db_helper = new DBHelper();

//Setup the curl and return the html
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://w5.ab.ust.hk/wcq/cgi-bin/1530/subject/COMP");
//Do not verify the site certificate
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$html_string = curl_exec($curl);
curl_close($curl);

$html = str_get_html($html_string);
foreach ($html->getElementById("classes")->find(".course") as $course){

}
echo $html->getElementById("classes")->find(".course", 0)->find("h2", 0)->plaintext;

$db_helper->close();

?>