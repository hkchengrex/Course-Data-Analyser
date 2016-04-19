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
include_once ('DataBase.php');
include_once ('Crawler.php');

ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);

echo "Starting..."."<br>";

$db_helper = new DataBase();
$crawler = new Crawler();

echo "Getting..."."<br>";
$crawler->crawler_get();
echo "Loading..."."<br><br>";
$crawler->load_classes();

$db_helper->close();

?>