<!DOCTYPE HTML>
<html>  
<link rel="stylesheet" type="text/css" href="main.css">
<!--Header Links-->
<a href="listOfContacts.php">Display contact list</a> |
<a href="index.php">Add Contacts</a> |
<a href='search.php'>Search Contacts</a> |
<a href='deleteUsers.php'>Delete Contact</a> |
<a href="editContacts.php">Edit Contacts</a>

<body>
<div class="hero-unit" <h1>Contact Address Book </h1>
<h2>Add Contact Page</h2></div>
</body>
<?php
//SET VARIABLES
global $firstName;

global $lastName;
$title = $firstName = $lastName = $site = $cellNum = $homeNum = $officeNum =    //Set all variables.
$twitterUrl = $faceBookUrl = $picture = $comments="";
$titleErr = $firstNameErr = $lastNameErr = $emailErr = "";

//AUTHENTICATION CHECK FOR REQUIRED FIELDS AND EMAIL
if( $_SERVER['REQUEST_METHOD'] == "POST"){
    if (empty($_POST["title"])){ $titleErr = "Title is required";}
    else{ $title = inputVal($_POST["title"]);}

    if(empty($_POST["fn"])){$firstNameErr = "First name is required";}
    else{$firstName = inputVal($_POST["fn"]);}

    if (empty($_POST["ln"])){$lastNameErr = "Last name is required";}
    else{ $lastName = inputVal($_POST["ln"]);}

    $eMail = inputVal($_POST["em"]);
    if(!filter_var($eMail, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";}

      // SET VARIABLES
    $title = isset($_POST["title"])? $_POST['title']: '';
    $firstName = isset($_POST["fn"])? $_POST['fn']: '';
    $lastName = isset($_POST["ln"])? $_POST['ln']: '';
    $eMail = isset($_POST["em"])? $_POST['em']: '';
    $cellNum= isset($_POST["pn"])? $_POST['pn']: '';
    $homeNum= isset($_POST["hm"])? $_POST['hm']:'';
    $officeNum= isset($_POST["on"])? $_POST['on']: '';
    $site= isset($_POST["s"])? $_POST['s']: '';
    $cellNum= isset($_POST["pn"])? $_POST['pn']: '';
    $homeNum= isset($_POST["hm"])? $_POST['hm']:'';
    $officeNum= isset($_POST["on"])? $_POST['on']: '';
    $twitterUrl= isset($_POST["tw"])? $_POST['tw']:'';
    $faceBookUrl= isset($_POST["fb"])? $_POST['fb']:'';
    $picture= isset($_FILES["pic"])? $_FILES['fileToUpload']:'';
    $comments= isset($_POST["com"])? $_POST['com']:'';

    if($firstName!= null && $lastName!= null && $title!=null) {
    writeToFile();
     }

}
//WRITES TO THE FILE     WORKS DONT CHANGE///////////////////////////////////////////////////////////////////////////////////////////////////////////
function writeToFile(){

    global $picture;
    move_uploaded_file($picture,'images');
    $file_name = 'ids';
    $handle = fopen($file_name, "a+");
    fwrite($handle,ucfirst($_POST['title'])." ".ucfirst($_POST['fn'])." ".ucfirst($_POST['ln'])." ".$_POST['em']." ".$_POST['s']." ".$_POST['pn']
        ." ".$_POST['hn']." ".$_POST['on']." ".$_POST['tw']." ".$_POST['fb']." ".$picture." ".$_POST['com']."\n");
    fclose($handle);

}
// CHECKS STRING FORMATS   // DO NOT TOUCH
function inputVal($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="">
    * Required field.<br><br>
    <input type = "text" name = "title" placeholder="* title"><br>
    <span class = "error"> <?php echo $titleErr;?></span>
    <input type="text" name="fn" placeholder="* First Name"><br>
    <span class = "error"> <?php echo $firstNameErr;?></span>
    <input type="text" name="ln" placeholder="* Last Name"><br>
    <span class = "error"> <?php echo $lastNameErr;?></span>
     <input type="text" name="em" placeholder="E-mail"><br>
    <span class = "error"> <?php echo $emailErr;?> </span><br>
     <input type = "text" name = "s" placeholder="Site"><br>
     <input type="text" name="pn" placeholder="Cell Number"><br>
     <input type="text" name="hn" placeholder="Home Number"><br>
     <input type="text" name="on" placeholder="Office Number"><br>
     <input type="text" name="tw" placeholder="Twitter URL"><br>
     <input type="text" name="fb" placeholder="Facebook URL"><br>
    <input type="text" name="com" placeholder="Comment"><br>
    <input type="file" name="fileToUpload" id="fileToUpload">


     <input type="submit" name="submit" value="submit">

</form>

<script>
    <input type="submit" onclick="return confirm('Are you sure you want to delete user?')">
</script>


</html>
<!--Footer Links-->
<div class="footerLinks"><a href="listOfContacts.php">Display contacts</a> |
    <a href="index.php">Add Contacts</a> |
    <a href='search.php'>Search Contacts</a> |
    <a href='deleteUsers.php'>Delete Contact</a> |
    <a href="editContacts.php">Edit Contacts |
        <a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a></a></div>

