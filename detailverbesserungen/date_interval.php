<?php
/* 
 * Die Klasse DateInterval repräsentiert einen relativen Zeitraum, also z.B.
 * zwei Stunden oder eine Woche.
 *
 * Diese Zeiträume kann man dann auf absolute Datums/Uhrzeit-Angaben anrechnen.
 *
 * Beispiel:
 * Auf genau 12 Uhr werden zwei Stunden aufgerechnet, das Date-Objekt zeigt nun
 * auf den Zeitpunkt 14 Uhr.
 */

$ein_datum = new DateTime('now');

echo $ein_datum->format('H:i');

$zwei_stunden = DateInterval::createFromDateString('2 hours');
$ein_datum->add($zwei_stunden);

// Jetzt sind es 2 Stunden später
echo $ein_datum->format('H:i');
