<?php
/* 
 * Seit PHP 5.3 hat die Funktion nl2br() einen zweiten, optionalen Parameter 
 * $is_xhtml (Default: true), der entscheidet, ob XHTML-konforme br-Tags erzeugt 
 * werden. 
 *  
 */

$text = 'Das ist ein Text mit
    einem Zeilenumbruch';

// Hier wird ein <br /> erzeugt
echo htmlspecialchars(nl2br($text));

// Hier wird ein <br> erzeugt
echo htmlspecialchars(nl2br($text, false));