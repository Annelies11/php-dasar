<?php

$values = array(false,true,'a',2.5,"Aris");
var_dump($values);
$names = array("aris", "mahmudi", "dewa19");
var_dump($names[0]);
unset($names[0]);
var_dump($names);
var_dump(count($values));