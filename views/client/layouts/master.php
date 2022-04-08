<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <title>
        <?php startblock('title') ?>
        <?php endblock() ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="assets/client/touch-icon" href="assets/client/touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/client/img/white.png">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css"/>

    <?php include 'views/client/layouts/css.php' ?>

    <?php startblock('css') ?>
    <?php endblock() ?>
<body>

    <?php include 'views/client/layouts/header.php' ?>

    <?php startblock('content') ?>
    <?php endblock() ?>

    <?php include 'views/client/layouts/footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            defer></script>

    <?php include 'views/client/layouts/script.php' ?>

    <?php startblock('script') ?>
    <?php endblock() ?>
</body>
</html>

