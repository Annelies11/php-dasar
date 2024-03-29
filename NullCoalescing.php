<?php
$data = ['action' => 'enek'];

if(isset($data['action'])){
  $action = $data['action'];
} else {
  $action = 'nothing';
}

//echo $action;

$names = ["aris", "mahmudi", "mavis"];

foreach($names as $name) {
    echo "Data $name". PHP_EOL;
}

$map = [
    "aku" => "kamu",
    "kamu" => "kita",
    "dia" => "hahaha"
];

foreach($map as $key => $val){
    echo "$key : $val".PHP_EOL;
}