<?php

$myObj->name = "Vidhur";
$myObj->age = "3700";
$myObj->city = "The Stratosphere";
$myObj->sex = "Male";
$myObj->gender = "cisgender";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
