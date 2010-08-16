<?php
/* 
 * Inhalte aus PHAR-Archiven können wie üblich per require oder include eingelesen
 * werden, nur die Syntax unterscheidet sich ein wenig:
 *
 * require 'phar://archiv_name/pfad/zur/datei';
 */

require_once 'phar://test.phar/test1.php';

require 'phar://test.phar/test2.php';
require 'phar://test.phar/test2.php';

require 'phar://test.phar/unterordner/test3.php';