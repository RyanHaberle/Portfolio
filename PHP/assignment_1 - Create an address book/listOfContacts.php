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
<h2>Display Contacts </h2></div>
</body>
<?php

//Loop to list the contacts
if(file_exists('ids')){
$i=1;
$contactList = file('ids'); // puts each line of file into array
sort($contactList);
foreach ($contactList as $contacts) {
    $info = explode(" ", $contacts); //for each contact break their line of info into its own array  print list of contacts below

    if ($info[$i] !== NULL) {
        printf("<div class='listName'>"."<u>".$info[0] . " " . $info[1] . " " . $info[2] ."</u>"."</div>". "<br> " ."<b>". "E-Mail: "."</b>" . $info[3] . "<br>" . "Site: " . "<a href='" . $info[4] . "'>.$info[4].</a>" . "<br>" . "Cell Number: " . $info[5] . "<br>" .
            "Home Number: " . $info[6] . "<br>" . "Office Number: " . $info[7] . "<br>" . "TwitterURL: " . "<a href='" . $info[8] . "'>.$info[8].</a>" . "<br>" . "Facebook URL: " . "<a href='" . $info[9] . "'>.$info[9].</a>" . "<br>" .
            "Picture" . $info[10] . "<br>" . "Comments: " . $info[11] . "<br>" . "<hr>");
        $i++;
    }// my contacts do not print to a table, I could not get this to work. This is something I will learn to do with php and add when I rewrite the project.
}}
else {echo"You have no contacts! Click <a href='index.php'>add contacts</a>  to get started!"."<br>"."<br>";}
?>
<!--Footer Links-->
<div class="footerLinks"><a href="listOfContacts.php">Display contacts</a> |
    <a href="index.php">Add Contacts</a> |
    <a href='search.php'>Search Contacts</a> |
    <a href='deleteUsers.php'>Delete Contact</a> |
    <a href="editContacts.php">Edit Contacts </a> |
    <a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
</div>
