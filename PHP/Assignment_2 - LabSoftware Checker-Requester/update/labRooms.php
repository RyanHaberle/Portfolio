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
