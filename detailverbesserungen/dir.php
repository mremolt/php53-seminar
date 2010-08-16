<?php
/*
 * Die Konstante __DIR__ enthält das aktuelle Verzeichnis, in dem sich das PHP-Skript beefindet.
 *
 * Siehe auch __FILE__
 */
?>

<p>Das aktuelle Verzeichnis ist <?php echo __DIR__ ?> !</p>

<?php
/*
 * Besonders gut eignet sich __dir__, um in einer Datei direkt im Projektverzeichnis
 * (z.B. index.php) per Konstante das Verzechnis überall im Projekt verfügbar zu machen.
 */

define('PROJECT_PATH', __DIR__);

?>