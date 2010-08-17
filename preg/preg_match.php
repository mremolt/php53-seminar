<?php

// findet das einzelne a
//echo preg_match('/a/', 'Hallo Welt');
//
//echo '<br />';
//
//// findet das erste l
//echo preg_match('/l/', 'Hallo Welt');
//
//echo '<br />';

// der/die Treffer werden in $m abgelegt


$text = '<p>hallo</p><p>welt</p><p></p><p>test</p>';
// Ein ? nach einem Quantor (*,+,{x}) macht diesen nicht gierig.
preg_match_all('/<p>(.*?)<\/p>/', $text, $m);

echo '<br />';

var_dump($m);


$text = 'hallo hallo hallo';
// Ein ? nach einem Quantor (*,+,{x}) macht diesen nicht gierig.
preg_match_all('/hallo+/', $text, $m);

echo '<br />';

var_dump($m);
