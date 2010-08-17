<?php
    define('PROJECT_PATH', __DIR__);
    define('PROJECT_URL' , dirname($_SERVER['PHP_SELF']));

    var_dump($_GET);
?>

<html>
    <head>
        <link href="<?php echo PROJECT_URL ?>/styles.css" />

    </head>
</html>