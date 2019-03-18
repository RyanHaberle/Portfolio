<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author", content="Entecott, Nicholas, Haberle, Ryan, Murphy, Patrick, Shaikh, Nehaal">
    <meta name="descripton" content="[placehold] is a website for managing George Brown College computer lab software.">
    <meta name="keywords" content="George Brown College, GBC, Computer Labs, Software">
    <title>Main Menu</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="gbcCSS.css">
</head>
<body>

<header>
    <h1>George Brown College</h1>
    <h2>Lab Software Repository</h2>
    <div id="position-left">
        <form method="post" action="softwareRequest.php">
            <input type="submit" class="btn btn-primary" value="SOFTWARE REQUEST">
        </form>
        <form method="post" action="adminLogin.php">
            <input type="submit" class="btn btn-primary" value="ADMIN LOGIN">
        </form>
    </div>
    <div>
        <form method="post" action="softwareAvailable.php">
            <input type="submit" class="btn btn-primary" value="SOFTWARE AVAILABLE">
        </form>
        <form method="post" action="labRooms.php">
            <input type="submit" class="btn btn-primary" value="LAB ROOMS">
        </form>
    </div>
</header>
<hr>
<p class="indexPara">
    Welcome to the George Brown College Lab Software Repository
    <br>
    <br>
    The George Brown College: Lab Software Repository is a software management<br>
    service that students can use to see what software is avaliable in the technology labs. <br>
    Students ca

</p>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: ryanh
 * Date: 2018-01-09
 * Time: 6:12 PM
 */