<?php

// findet das einzelne a
echo preg_match_all('/a/', 'Hallo Welt', $m);

// findet alle l
echo preg_match_all('/l/', 'Hallo Welt', $m);

// die Treffer werden in $m abgelegt
echo preg_match_all('/l/', 'Hallo Welt', $m);
var_dump($m);

echo '<br />';

// alle Worte werden einzeln als Treffer gespeichert
preg_match_all('/[a-zA-Z]+/', 'Das ist ein Satz', $m);
var_dump($m);

echo '<br />';

// mit Klammern können Teile des Suchmusters einzeln gespeichert werden
preg_match_all('/([a-z]+)@([a-z]+)\.([a-z]+)/', 'mremolt@webmasterkurse.de', $m);
var_dump($m);