<?php
/*
 * NumberFormatter ist für die locale-gerechte Formatierung von Zahlen zuständig.
 * Das beinhaltet auch die korrekte Darstellung von Währungen. 
 */

$f_de = new NumberFormatter('de', NumberFormatter::DECIMAL);
$f_en = new NumberFormatter('en', NumberFormatter::DECIMAL);

$f_de_cur = new NumberFormatter('de', NumberFormatter::CURRENCY);
$f_en_cur = new NumberFormatter('en', NumberFormatter::CURRENCY);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>NumberFormatter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p>Deutsch: <?php echo $f_de->format(5355657.237) ?></p>
        <p>Englisch: <?php echo $f_en->format(5355657.237) ?></p>

        <p>
            Der zweite Parameter ist ein Währungscode entsprechend ISO 4217,
            siehe <a href="http://de.wikipedia.org/wiki/ISO_4217">Wikipedia</a>.
        </p>

        <p>Deutsch: <?php echo $f_en_cur->formatCurrency(5355657.237, 'EUR') ?></p>
        <p>Englisch: <?php echo $f_en_cur->formatCurrency(5355657.237, 'USD') ?></p>
    </body>
</html>

10.000,56
10,000.56