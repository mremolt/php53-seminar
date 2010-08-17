<?php

$verbotene_zeichen = '[^()\[\]\\;:,<> ]+';

$text = "bernd@subdomain.noch-eine.das-örtchen.de";
preg_match("/^[^()\[\]\\;:,<> ]+@([\w-äöüÄÖÜ]+?\.)+[a-zA-Z]{2,}$/", $text, $m);

var_dump($m);