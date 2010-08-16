<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>IntlDateFormatter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        /*
         * IntlDateFormatter ist für die locale-gerechte Ausgabe von Datum und Uhrzeit zuständig.
         * Dabei werden dem Konstruktor alle releventen Informationen zum Format übergeben:
         * 1. Die Locale als String
         * 2. Das Datums-Format als Konstante, siehe http://www.php.net/manual/en/class.intldateformatter.php#intl.intldateformatter-constants
         * 3. Das Uhrzeit-Format als Konstante
         * 4. Die Zeitzone als String  (optional)
         */

        // Das deutsche Datum in unterschiedlicher Ausführlichkeit
        $f = new IntlDateFormatter('de_DE', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        echo '<p>' . $f->format(time()) . '</p>';

        $f = new IntlDateFormatter('de_DE', IntlDateFormatter::LONG, IntlDateFormatter::LONG);
        echo '<p>' . $f->format(time()) . '</p>';

        $f = new IntlDateFormatter('de_DE', IntlDateFormatter::MEDIUM, IntlDateFormatter::MEDIUM);
        echo '<p>' . $f->format(time()) . '</p>';

        $f = new IntlDateFormatter('de_DE', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
        echo '<p>' . $f->format(time()) . '</p>';

        // Das US-amerikanische Datumsformat
        $f = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        echo '<p>' . $f->format(time()) . '</p>';

        // Das französische Datumsformat
        $f = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        echo '<p>' . $f->format(time()) . '</p>';

        // Andere Zeitzonen, siehe: http://en.wikipedia.org/wiki/List_of_tz_database_time_zones
        // Datum un Uhrzeit in New York (auf Englisch)
        $f = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'America/New_York');
        echo '<p>' . $f->format(time()) . '</p>';

        // Datum un Uhrzeit in New York (auf Deutsch)
        $f = new IntlDateFormatter('de_DE', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'America/New_York');
        echo '<p>' . $f->format(time()) . '</p>';
        ?>
    </body>
</html>