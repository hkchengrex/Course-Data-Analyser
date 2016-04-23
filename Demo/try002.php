<?php
/**
 * Created by PhpStorm.
 * User: Samson
 * Date: 23/4/2016
 * Time: 3:43
 */
$array001=array(null,"123","a");
print_r($array001);
for ($i=0;$i<sizeof($array001);$i++){
    if (empty($array001[$i])){
        echo "True";
    }
    else {
        echo "False";
    }
}
echo $array001[2];
if ($array001[2]=="a"){
    echo "noOOOOOOO";
}

