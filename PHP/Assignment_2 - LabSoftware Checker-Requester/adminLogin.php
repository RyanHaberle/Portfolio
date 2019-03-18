<head>
    <meta charset="UTF-8">
    <meta name="author", content="Entecott, Nicholas, Haberle, Ryan, Murphy, Patrick, Shaikh, Nehaal">
    <meta name="descripton" content="[placehold] is a website for managing George Brown College computer lab software.">
    <meta name="keywords" content="George Brown College, GBC, Computer Labs, Software">
    <title>Administrator Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="gbcCSS.css">

</head>
<body>

<header>
    <h1><a href="index.html">George Brown College</a></h1>
    <h2><a href="index.html">Lab Software Repository/Administrator Login</a></h2>
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
            <input type="submit" class="btn btn-primary" value="SOFTWARE AVALIABLE">
        </form>
        <form method="post" action="labRooms.php">
            <input type="submit" class="btn btn-primary" value="LAB ROOMS">
        </form>
    </div>
</header>
<hr>

<?php
$labChosen = isset($_POST['chooseLab']) ? $_POST['chooseLab'] : '';
$softwareChose = isset($_POST['chooseSoftware']) ? $_POST['chooseSoftware'] : '';
$dropDownSelect = "";


?>

<form method="POST">

    <?php
    $serverName = "108.163.161.66";
    $connection = new mysqli( $serverName, "f7103097_default", "default", "f7103097_lab_software");

    $admin
    ?><br><br>

    </select>
</form>



</body>
</html>


<?php



$adminName = isset($_POST['userName']) ? $_POST['userName'] : '';
$adminPass = isset($_POST['userPass']) ? $_POST['userPass'] : '';



?>

<form>
    Username <input type="text" name="userName">
    <br>
</form>
<form>
    Password <input type="text" name="userpass">
    <input type="submit" value="Login">
</form>
