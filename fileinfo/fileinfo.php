<?php
/* 
 * Die Erweiterung Fileinfo kann aus Dateien den Mime-Typ auslesen. Dies ist
 * besonders bei vom User hochgeladenen Dateien (ist es auch wirklich ein Bild?)
 * sehr nützlich.
 *
 * Der Datentyp wird als String zurückgegeben. 
 */

// Ohne Konstruktor-Parameter liefert finfo einen beschreibenden Text für Dateitypen
$info = new finfo();
echo "<p>" . $info->file('fileinfo.php') . "</p>";
echo "<p>" . $info->file('test.html') . "</p>";
echo "<p>" . $info->file('logo.png') . "</p>";
echo "<p>" . $info->file('frank_ie6.flv') . "</p>";

// Wenn finfo mit FILEINFO_MIME_TYPE erzeugt wurde, wird der exakte Mime-Typ ausgegeben. 
$info = new finfo(FILEINFO_MIME_TYPE);
echo "<p>" . $info->file('fileinfo.php') . "</p>";
echo "<p>" . $info->file('test.html') . "</p>";
echo "<p>" . $info->file('logo.png') . "</p>";
echo "<p>" . $info->file('frank_ie6.flv') . "</p>";