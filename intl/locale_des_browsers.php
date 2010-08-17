<?php
/* 
 * Die Klasse Locale wird verwendet um Locale-Informationen zu verarbeiten, also
 * z.B. die Locale uas den Browserinformationen auszulesen oder die ähnlichste
 * verfügbare Locale zu einer gegebenen zu finden.
 */

$available_locales = array('de', 'de_DE', 'en', 'es');
$locale = Locale::acceptFromHttp($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
?>

<p>Die vom Browser gesendete Locale ist: <?php echo $locale; ?></p>

<p>
    Die ähnlichste verfügbare Locale zu en_GB ist:
    <?php echo Locale::lookup($available_locales, 'en_GB'); ?>
</p>

<p>
    Die ähnlichste verfügbare Locale zu de_DE ist:
    <?php echo Locale::lookup($available_locales, 'de_DE'); ?>
</p>

<p>
    Wenn die Locale keiner verfügbaren entspricht, kann man als vierten
    Parameter einen Standardwert angeben. Da fr nicht verfügbar ist, wird
    en genommen: 
    <?php echo Locale::lookup($available_locales, 'fr', false, 'en'); ?>
</p>

<p>
    Der menschliche Name der aktuellen Locale ist:
    <?php echo Locale::getDisplayLanguage('de_CH'); ?>
</p>