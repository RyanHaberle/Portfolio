<head>
    <meta charset="UTF-8">
    <meta name="author", content="Entecott, Nicholas, Haberle, Ryan, Murphy, Patrick, Shaikh, Nehaal">
    <meta name="descripton" content="[placehold] is a website for managing George Brown College computer lab software.">
    <meta name="keywords" content="George Brown College, GBC, Computer Labs, Software">
    <title>Software Request</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="gbcCSS.css">

</head>
<body>

<header>
    <h1><a href="index.html">George Brown College</a></h1>
    <h2><a href="index.html">Lab Software Repository/Software Request</a></h2>
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
$reqLabNum = $reqID = $reqSoftware = "";
$reqIDErr=$reqLabErr=$reqSoftwareErr ="";


if( $_SERVER['REQUEST_METHOD'] == "POST") {


    if (empty($_POST['reqLabNum'])) {
        $reqLabErr = "Lab number is required";
    } else {
        $reqLabNum = $_POST['reqLabNum'];
    }

    if (empty($_POST['reqSoftware'])) {
        $reqSoftwareErr = "Software name is required";
    } else {
        $reqSoftware = $_POST['reqSoftware'];
    }

    if (empty($_POST['reqID'])) {
        $reqIDErr = "Computer unique ID is required";
    } else {
        $reqID = $_POST['reqID'];
    }

}

$reqLabNum = isset($_POST['reqLabNum']) ? $_POST['reqLabNum'] : '';
$reqSoftware = isset($_POST['reqSoftware']) ? $_POST['reqSoftware'] : '';
$reqID = isset($_POST['reqID']) ? $_POST['reqID'] : '';


?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span class = "error"> <?php echo $reqLabErr."<br>"."<br>";?></span>
    <span class = "error"> <?php echo $reqSoftwareErr."<br>"."<br>";?></span>
    <span class = "error"> <?php echo $reqIDErr."<br>"."<br>";?></span>
    What Lab is your request? <input type="text" name="reqLabNum"><br><br>

    What Software requires installing? <input type="text" name = "reqSoftware"><br><br>

    What is your computers unique ID?  <input type="text" name="reqID"><br><br>

    *Unique ID is found on back of the computer tower ex. C418IT46
    <br>
    <input type="submit" value="Send Request">
    <?php

    ?>

    </select>
</form>



</body>
</html>


<?php
