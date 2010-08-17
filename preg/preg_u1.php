<?php

$text = "<p>Hier ist der <a     target='_blank'
    href='http://www.google.de/'    >Link zu Google</a>!</p>
    <p>Hier ist der <a     target='_blank'
    href='http://www.google.de/'    >Link zu Google</a>!</p>";

preg_match_all('/<a.+?href=["\'](.*?)["\'][^>]*?>(.*?)<\/a>/s', $text, $m);

var_dump($m);