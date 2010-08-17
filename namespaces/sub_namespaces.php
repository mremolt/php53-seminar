<?php
require_once 'lib/sub_namespaces.inc.php';

use Zend\Service\WindowsAzure\Storage\Blob;
use Zend2\Service\WindowsAzure\Storage\Blob;
use Webmasters\Schulungen;
use Webmasters\Schulungen\Klasse3 as Klasse3AusSchulungen;

$bla = new Blob\Stream();

$test1 = new Schulungen\Klasse1();
var_dump($test1);

// das funktioniert, da wir den ganzen Namespace Schulungen importiert haben (Zeile 4)
$test2 = new Schulungen\Klasse3();
var_dump($test2);

$test3 = new \Webmasters\Schulungen\Klasse3();
var_dump($test3);

$test4 = new Klasse3AusSchulungen;
var_dump($test4);
