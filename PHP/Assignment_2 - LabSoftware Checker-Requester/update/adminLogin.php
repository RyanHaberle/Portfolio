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
    <h1>Lab Software Repository</h1>
    <div id="position-left">
        <button type="button" class="btn btn-secondary">SOFTWARE REQUEST</button>
        <button type="button" class="btn btn-secondary">ADMIN LOGIN</button>
    </div>
    <div>
        <button type="button" class="btn btn-primary">SOFTWARE AVALIABLE</button>
        <button type="button" class="btn btn-primary">LAB ROOMS</button>
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
    Username <input type="text" name="userName"><br>
    Password<input type="text" name="userpass">
    <input type="submit" value="Login">
</form>
