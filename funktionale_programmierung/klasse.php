<?php

class Klasse1 {

}

$obj = new Klasse1();

$obj->test = function() {
    echo 'ARGH!';
};

var_dump($obj);

echo $obj->test();


