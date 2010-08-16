<?php
/* 
 * Seit PHP 5.3 hst der termäre Operator eine neue Kurzform.
 *
 * Wenn man den Wert zurückgeben möchte, auf dem man prüft, kann man diesen Wert
 * zwischen ? und : weglassen.
 */

$text = 'Hallo Welt';

//Vorher
$mein_text = $text ? $text : 'ein Standardtext';

//Jetzt
$mein_text = $text ?: 'ein Standardtext';

echo $mein_text;
