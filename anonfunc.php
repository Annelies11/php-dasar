<?php

function sayGoodbye(string $name, $filter){
    $show = $filter($name);
    echo "Goodbye, $show".PHP_EOL;
}

sayGoodbye("Aris", function (string $name):string{
    return strtoupper($name);
});

$first = "Aris";
$last = "Mahmudi";

$sayHello = function() use ($first, $last) {
    echo "Hello $first $last".PHP_EOL;
};

$helloBro = fn() => "Hello bro $first and $last".PHP_EOL;

echo $helloBro();

$sayHello();