<?php

class Person{
    var $name;
    var $address;
    var $country;

    function sayHello(?string $name = null){
        if(is_null($name)){
            echo "Hello, my name is {$this->name}".PHP_EOL;
        } else {
            echo "Hello, $name. My name is {$this->name}".PHP_EOL;
        }
    }
}