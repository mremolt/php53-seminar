<?php
/* 
 * Eine DatePeriod, also ein Zeitspanne, benötigt einen Start- und Endpunkt als DateTime
 * und ein DateInterval.
 * Es liefert dann DateTime-Objekte, die zwischen Start und Ende liegen mit dem
 * Abstand, der durch das Intervall vorgegeben ist.
 *
 * Beispiel:
 * Start: 9:10 Uhr
 * Ende: 17:20 Uhr
 * Intervall: 1 Stunde
 * liefert: 09:10, 10:10, 11:10, 12:10, 13:10, 14:10, 15:10, 16:10, 17:10
 */

$start = new DateTime('2010-08-17 09:10');
$end = new DateTime('2010-08-17 17:20');
// Der Konstruktor ist schlechter lesbar, als die Methode 
// DateInterval::createFromDateString.
// Siehe: http://www.php.net/manual/en/dateinterval.construct.php
$interval = new DateInterval('PT1H');

$period = new DatePeriod($start, $interval, $end);

foreach($period as $date) {
    echo  $date->format('H:i') . "<br />";
}