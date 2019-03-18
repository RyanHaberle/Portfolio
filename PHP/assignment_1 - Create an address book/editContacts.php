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
<h2>Edit Contacts </h2></div>

</body>
<?php

    global $firstName;
    global $userSearchInput;


    if (isset($_POST['nameToEdit'])) {

        $contactNum = editContact($userSearchInput);
    }
        elseif (isset($_POST['updateContact'])) {
        global $userSearchInput;

        editContactWrite($userSearchInput);
    }

    if (isset($_GET['editName'])? $_GET['editName']: "")
    {
        if($userSearchInput == Null) {
        $userSearchInput = ucfirst($_GET['editName']);
        }
        if (editContact($userSearchInput)== false){
        echo "name not found";
    }
}

function editContact($userSearchInput)
{
    $i=0;
     $contactList = file('ids');
    sort($contactList);
    foreach ($contactList as $contacts){
        $info[] = explode(" ", $contacts);
    }
    for($i=0;$i<count($info);$i++){          //repopulates fields on Edit
        for($j=0; $j<count($info[$i]); $j++){
            if($info[$i][$j]===$userSearchInput)
            {
                $_POST['title'] = $info[$i][0];
                $_POST["fn"] = $info[$i][1];
                $_POST["ln"] = $info[$i][2];
                $_POST["em"] = $info[$i][3];
                $_POST["s"] = $info[$i][4];
                $_POST["pn"] = $info[$i][5];
                $_POST["hn"] = $info[$i][6];
                $_POST["on"] = $info[$i][7];
                $_POST["tw"] = $info[$i][8];
                $_POST["fb"] = $info[$i][9];
                $_POST["pic"] = $info[$i][10];
                $_POST["com"] = $info[$i][11];
                include "textForms.html";
                return $userSearchInput;
            }
        }
    }
}
function editContactWrite($userSearchInput){ //Takes away old file and adds edited user back into file
    $file_name = 'ids' ;
    $handle = fopen($file_name, "a+");
    $newContact =  $contactArray[] = ucfirst($_POST['title']) . " " . ucfirst($_POST['fn']) . " " . ucfirst($_POST['ln']) . " " . $_POST['em'] . " " . $_POST['s'] . " " . $_POST['pn']
        . " " . $_POST['hn'] . " " . $_POST['on'] . " " . $_POST['tw'] . " " . $_POST['fb'] . " " . $_POST['pic'] . " " . $_POST['com'] . "\n";
    $contactArray = file($file_name);
    fclose($handle);

    unlink('ids');
    if (!file_exists($file_name))
    {
        touch('ids');
    }
    foreach($contactArray as $contacts)
    {
        if (strpos($contacts, ucfirst($_GET['editName'])) == FALSE)
        {
            $handle = fopen('ids', "a");
            fwrite($handle,$contacts);
            fclose($handle);
            echo"Contact updated";
        }
    }
    $handle = fopen('ids', "a+");
    fwrite($handle, $newContact);
    fclose($handle);

}

?>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input type="text" name="editName" placeholder="Enter first or last name">
    <input type="submit" name="nameToEdit" value="Edit">

<script>

</script>
    <!--Footer Links-->
    <div class="footerLinks"><a href="listOfContacts.php">Display contacts</a> |
        <a href="index.php">Add Contacts</a> |
        <a href='search.php'>Search Contacts</a> |
        <a href='deleteUsers.php'>Delete Contact</a> |
        <a href="editContacts.php">Edit Contacts |</a>
        <a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
    </div>

