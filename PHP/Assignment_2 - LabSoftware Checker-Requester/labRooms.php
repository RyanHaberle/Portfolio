<head>
    <meta charset="UTF-8">
    <meta name="author", content="Entecott, Nicholas, Haberle, Ryan, Murphy, Patrick, Shaikh, Nehaal">
    <meta name="descripton" content="[placehold] is a website for managing George Brown College computer lab software.">
    <meta name="keywords" content="George Brown College, GBC, Computer Labs, Software">
    <title>Lab Rooms</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="gbcCSS.css">
</head>
<body>

<header>
    <h1><a href="index.html">George Brown College</a></h1>
    <h2><a href="index.html">Lab Software Repository/Lab Rooms</a></h2>
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




    <select name='chooseLab' value = ""onchange='form.submit()'>
        <option name = "empty" value="">Choose a lab to see what software is installed</option>
        <option name = "c410" value="c410">C410</option>
        <option name = "c418" value="c418">C418</option>
        <option name = "c401" value="c401">C401</option>
    </select>





    <?php
    if ($labChosen == "c418")
    {
        print "<br>"."Displaying C418";
        // put QUERIES HERE.
    }
    if ($labChosen == "c410")
    {
        print "<br>"."Displaying C410 ";
        //PUT QUERIES HERE
    }
    if ($labChosen == "c401")
    {
        // PUT QUERIES HERE
        print "<br>"."Displaying C401";
    }?>

    </select>
</form>



</body>
</html>


<?php
