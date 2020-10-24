<!DOCTYPE html>
<?php require_once "./src/php/scripts/fetch-location.php" ?>
<head>
    <title>Where's the other side of the world?</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href=".\assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".\assets\css\custom.css">
    <script type="text/javascript" src=".\src\js\jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src=".\src\js\bootstrap.min.js"></script>
</head>
<body>
<section class="card fill">
    <header class="card-header text-center">
        <h1 class="text-primary">Where's the other side of the world?</h1>
    </header>
    <div class="card-body h-100">
        <?php if (sizeof($resArr) == 8): ?>
            <h3>Apparently, you are accessing this website from <?php echo $city . ", " . $state . ", " . $country ?>!</h3>
            <h3>Your coordinates are <?php echo $coordinates ?></h3>
        <?php else: ?>
            <h3>We couldn't parse your location :( </h3>
        <?php endif ?>

    </div>
    <footer class="card-footer text-center">
        Made by <a href="https://github.com/pedrohdjs" target="__blank">pedrohdjs</a>!
    </footer>
</section>
</body>