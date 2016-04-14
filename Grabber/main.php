<?php
ini_set('display_errors', true);
ini_set('safe_mode', false);
ini_set('allow_url_fopen', true);
ini_set('allow_url_include', true);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://w5.ab.ust.hk/wcq/cgi-bin/1530/subject/COMP");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

curl_exec($curl);

curl_close($curl)
?>