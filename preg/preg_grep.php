<?php

$namen = array('Thorsten', 'Monika', 'Marc', 'Christian', 'Dorian', 'Marco');

$namen_mit_m = preg_grep('/^M/', $namen);
var_dump($namen_mit_m);
