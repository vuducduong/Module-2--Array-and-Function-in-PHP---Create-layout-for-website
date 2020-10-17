<?php
require_once "header.php";
require_once "nav.php";
require_once "content.php";
require_once "footer.php";
?>
<!doctype html>

<html>
<head>
    <link rel="stylesheet" type="text/css"href="style.css">
</head>
<body>
<div class="container">
    <header><?php  include "header.php";  ?></header>
    <nav><?php include "nav.php";  ?></nav>
    <article> <?php include "content.php"; ?></article>
    <footer><?php include "footer.php";?></footer>
</div>
</body>
</html>