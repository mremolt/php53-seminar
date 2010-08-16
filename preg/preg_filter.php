<?php

// die Funktion sucht nach dem Muster (P1) im Subject (p3) und ersetzt  es durch P2.
echo preg_filter('/[Tt]est/', 'haus', 'Das ist ein Test der testet!');