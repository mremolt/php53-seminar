<?php
/*
 * Eine Queue, Deutsch Warteschlange ist eine Array-ähnliche Konstruktion, bei der
 * immer die Elemente zuürückgegeben werden, die als erstes hinzugefügt wurden.
 *
 * Beispiel:
 * Es werden die Zahlen 1 4 7 9 einzeln hinzugefügt.
 * Wenn die Elemente ausgelesen werden, erhalte ich diese in der
 * Reihenfolge 1 4 7 9 zurück.
 */

$queue = new SplQueue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);
$queue->enqueue(6);



?>

<p>Es befinden sich <?php echo $queue->count() ?> Elemente in der Queue.</p>

<p>Hole nächstes Element: <?php echo $queue->dequeue() ?></p>
<p>Hole nächstes Element: <?php echo $queue->dequeue() ?></p>
<p>Hole nächstes Element: <?php echo $queue->dequeue() ?></p>

<p>Es befinden sich <?php echo $queue->count() ?> Elemente in der Queue.</p>