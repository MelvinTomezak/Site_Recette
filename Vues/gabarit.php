<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My sweet MVC</title>
    </head>
    <body>
        <?php Vue::montrer('standard/navbar'); ?>
        <?php echo $A_vue['body'] ?>
        <?php Vue::montrer('standard/footer'); ?>
    </body>
</html>