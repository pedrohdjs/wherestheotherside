<!DOCTYPE html>
<?php 
    require_once "./src/php/scripts/fetch-location.php";
    require_once "./src/php/scripts/fetch-opposite-coordinates.php";
?>
<head>
    <title>Where's the other side of the world?</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href=".\assets\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".\assets\css\custom.css">
    <script type="text/javascript" src=".\src\js\jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src=".\src\js\bootstrap.min.js"></script>
    <script type="text/javascript" src=".\src\js\scripts.js"></script>

</head>
<body>
<section class="card fill">
    <header class="card-header text-center">
        <h1 class="text-primary">Where's the other side of the world?</h1>
    </header>
    <div id="content" class="card-body h-100">
        <h3 id="welcome-message">Welcome to Wherestheotherside! Please, allow us to get access your location in order to proceed.</h3>
    </div>
    <footer class="card-footer text-center">
        Made by <a href="https://github.com/pedrohdjs" target="__blank">pedrohdjs</a>!
    </footer>
</section>
</body>