<?php
    include 'db.php';
    $ConnectionObject = new Connection();
    echo $ConnectionObject->setVariables("localhost","root","","livesearch");
    echo $ConnectionObject->playingWithDatabase();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Search with PHP and AJaX</title>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
        <input id="search" placeholder="Search">
            <pre>Example:</pre><i>Hello</i>
        <div id="display"></div>
    </body>
</html>