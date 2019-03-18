<!DOCTYPE HTML>
<html>  
<!--Header Links-->
<a href="listOfContacts.php">Display contact list</a> |
<a href="index.php">Add Contacts</a> |
<a href='search.php'>Search Contacts</a> |
<a href='deleteUsers.php'>Delete Contact</a> |
<a href="editContacts.php">Edit Contacts</a>
<link rel="stylesheet" type="text/css" href="main.css">

<body>
<div class="hero-unit" <h1>Contact Address Book </h1>
<h2>Search Contacts </h2></div>

</body>
<?php

    if (isset($_POST['sn'])? $_POST['sn']: "")
    {
        $userSearchInput = $_POST['sn'];
        if (searchContacts($userSearchInput)== false){
            echo "name not found";
        }else{};
    }

//////Searches through contacts///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function searchContacts($userSearchInput)
    {
        $i = 0;
        $found = false;
        foreach(file('ids') as $contacts){
            if (strpos($contacts, ucfirst($userSearchInput)) !== FALSE) {   //checks for a match on a line in the file
                $info = explode(" ", $contacts); //breaks each line into an array index and displays single contact below

                if($info[$i] !== NULL) {
                    printf( "<b>"."<u>".$info[0] . " " . $info[1] . " " . $info[2]."</u>"."</b>" . "<br> "  . "E-Mail: " .$info[3]."<br>"."Site: ". $info[4]."<br>"."Cell Number: ".$info[5]."<br>".
                        "Home Number: ".$info[6]."<br>". "Office Number". $info[7]."<br>". "TwitterURL: ".$info[8]."<br>". "Facebook URL". $info[8]."<br>".
                        "Picture".$info[10]."<br>"."Comments: ".$info[11]."<br>"."<hr>" );  //lists all contact info
                    $i++;
                }
               // $found = true;
            }
        }
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type = "text" name = "sn" placeholder="Enter first or last name.">
    <input type ="submit" name="submit" value="Search"
</form>

<!--Footer Links-->
<div class="footerLinks"><a href="listOfContacts.php">Display contacts</a> |
    <a href="index.php">Add Contacts</a> |
    <a href='search.php'>Search Contacts</a> |
    <a href='deleteUsers.php'>Delete Contact</a> |
    <a href="editContacts.php">Edit Contacts </a> |
    <a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
</div>
