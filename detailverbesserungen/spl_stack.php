<?php
/* 
 * Ein Stack, Deutsch Stapel ist eine Array-ähnliche Konstruktion, bei der
 * immer die Elemente zuürückgegeben werden, die als letztes hinzugefügt wurden.
 *
 * Beispiel:
 * Es werden die Zahlen 1 4 7 9 einzeln hinzugefügt.
 * Wenn die Elemente ausgelesen werden, erhalte ich diese in der
 * Reihenfolge 9 7 4 1 zurück.
 */

$stack = new SplStack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);



?>

<p>Es befinden sich <?php echo $stack->count() ?> Elemente im Stack.</p>

<p>Hole nächstes Element: <?php echo $stack->pop() ?></p>
<p>Hole nächstes Element: <?php echo $stack->pop() ?></p>
<p>Hole nächstes Element: <?php echo $stack->pop() ?></p>

<p>Es befinden sich <?php echo $stack->count() ?> Elemente im Stack.</p>
