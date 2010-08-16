<?php
/*
 * Phar-Archive neu zu erzeugen ist standardmäßig deaktiviert.
 *
 * Um diese Funktion freizuschalten, muss folgende Einstellung in der php.ini
 * vorgenommen werden:
 *
 * phar.readonly = 0
 *
 * Ein Überschreiben per ini_set() ist nicht möglich!
 */

$phar = new Phar('test.phar');
// das Unterverzeichnis "src" wird als PHAR-Archiv test.phar verpackt.
$phar->buildFromDirectory('src');
