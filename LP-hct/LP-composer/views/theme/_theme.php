<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?= $head; ?>
    <link rel="stylesheet" href="<?= asset("bootstrap/dist/css/bootstrap.min.css", "vendor/twbs"); ?>" />
    <link rel="stylesheet" href="<?= asset("css/styles.css"); ?>" />
    <link rel="stylesheet" href="<?= asset("font-awesome/css/all.min.css", "vendor/fortawesome"); ?>" />
    <link rel="icon" type="image/png" href="<?= asset("images/favicon.png"); ?>" />

</head>

<body>
    <?php require 'navbar.php' ?>

    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <div class="ajax_load_box_title">Aguarde, carrengando...</div>
        </div>
    </div>
    <main class="main_content">
        <?= $v->section("content"); ?>
    </main>
    <?php require 'footer.php' ?>
    <script src="<?= asset("jquery/jquery.min.js", "vendor/components"); ?>"></script>
    <script src="<?= asset("jqueryui/jquery-ui.min.js", "vendor/components"); ?>"></script>
    <script src="<?= asset("jquery-mask-plugin/dist/jquery.mask.min.js", "vendor/igorescobar"); ?>"></script>
    <script src="<?= asset("bootstrap/dist/js/bootstrap.min.js", "vendor/twbs"); ?>"></script>
    <?= $v->section("scripts"); ?>

</body>

</html>