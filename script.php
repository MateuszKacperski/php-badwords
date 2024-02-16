<?php

$paragraph = $_GET["paragraph"];
$censured = $_GET["censured"];

echo $paragraph;
echo strlen($paragraph);



$changed_p = str_replace($censured,"***", $paragraph);
echo $changed_p;
echo strlen($changed_p);
?>