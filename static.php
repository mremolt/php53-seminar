<?php

class Klasse1 {
    public static function finde($id) {
        return new Klasse1();
    }

    public function save() {
        
    }
}

$obj = Klasse1::finde(5);


$obj->save();