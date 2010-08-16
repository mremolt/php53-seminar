<?php

// findet das einzelne a
echo preg_match('/a/', 'Hallo Welt');

// findet das erste l
echo preg_match('/l/', 'Hallo Welt');

// der/die Treffer werden in $m abgelegt
echo preg_match('/l/', 'Hallo Welt', $m);
var_dump($m);