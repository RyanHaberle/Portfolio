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




    <select name='chooseSoftware' onchange='form.submit()'>
        <option name = "empty" value="Choose a Lab to see what software">Choose a program to see what labs it is installed in.</option>
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
