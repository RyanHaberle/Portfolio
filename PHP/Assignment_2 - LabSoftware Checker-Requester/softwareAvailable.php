<head>
    <meta charset="UTF-8">
    <meta name="author", content="Entecott, Nicholas, Haberle, Ryan, Murphy, Patrick, Shaikh, Nehaal">
    <meta name="descripton" content="[placehold] is a website for managing George Brown College computer lab software.">
    <meta name="keywords" content="George Brown College, GBC, Computer Labs, Software">
    <title>Software Avaliable</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="gbcCSS.css">

</head>
<body>

<header>
    <h1><a href="index.html">George Brown College</a></h1>
    <h2><a href="index.html">Lab Software Repository/Software Available</a></h2>
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




    <select name='chooseSoftware' onchange='form.submit()'>
        <option name = "empty" value="Choose a Lab to see what software">Choose a software to see where it is installed.</option>
        <option name = "Visual Studio 2018" value="Visual Studio 2018">Visual Studio 2018</option>
        <option name = "Unity" value="Unity">Unity</option>
        <option name = "Net Beans" value="Net Beans">Net Beans</option>
        <option name = "Unity" value="Unity">Unity</option>
        <option name = "Net Beans" value="Net Beans">Net Beans</option>
    </select>





    <?php
    if ($softwareChose == "Visual Studio 2018")
    {
        print "<br>"."Displaying labs with $softwareChose";
    }
    if ($softwareChose == "Unity")
    {
        print "<br>"."Displaying labs with $softwareChose";
    }
    if ($softwareChose == "Net Beans")
    {
        print "<br>"."Displaying labs with $softwareChose";
    }?><br><br>

    </select>
</form>



</body>
</html>
