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
        <h2>Delete Contacts </h2></div>

        </body>
    <?php



    if (isset($_GET['txtDeleteUser']) && $_GET['txtDeleteUser']!== null ){
        $deleteUserInput = $_GET['txtDeleteUser'];
        deleteContacts($deleteUserInput);
        echo "Contact deleted";

    }else{"Name not found";}

    //Deletes Users
    function deleteContacts($deleteUserInput)
    {
        $file_name = 'ids';
        $handle = fopen($file_name, "a+");
        $contactArray = file($file_name);
        fclose($handle);
        unlink($file_name);

        foreach($contactArray as $contacts)
        {
            if (strpos($contacts, ucfirst($deleteUserInput)) == FALSE)
            {
                $handle = fopen('ids', "a");
                fwrite($handle,$contacts);
                fclose($handle);
                 
            }
        }
    }
    ?>
<!--Confirms delete of contact-->
    <script type="text/javascript">
        function confirmDelete() {
        return window.confirm("Are you sure you would like to delete this contacts info?");
        }
    </script>

    <form action="deleteUsers.php" onsubmit="confirmDelete()">
        <input type="text" name="txtDeleteUser" placeholder="Enter first or last name.">    <!--confirms delete.-->
        <input type="submit" name="submit" value="Delete contact">
    </form>

<!--Footer Links-->
    <div class="footerLinks"><a href="listOfContacts.php">Display contacts</a> |
        <a href="index.php">Add Contacts</a> |
        <a href='search.php'>Search Contacts</a> |
        <a href='deleteUsers.php'>Delete Contact</a> |
        <a href="editContacts.php">Edit Contacts |</a>
        <a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
    </div>
