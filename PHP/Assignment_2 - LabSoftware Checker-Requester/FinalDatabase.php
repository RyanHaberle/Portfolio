<?php
function softwareSearch($softwareName){
    $serverName = "108.163.161.66";
    $connection = new mysqli( $serverName, "f7103097_default", "default", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "SELECT * FROM lab_software WHERE lab_software.software_name = '$softwareName'";
        $result = $connection->query($sql);

        if($result->num_rows > 0){
            echo "<table><tr><th>Lab Num</th><th>Software Version</th></tr>";
            foreach($result as $item){
                echo "<tr><td>".$item['lab_num']."</td><td>".$item['software_name'].
                     "</td><td>".$item['software_version']."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "No results.";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}
function labNumSearch($labNum){
    $serverName = "108.163.161.66";
    $connection = new mysqli( $serverName, "f7103097_default", "default", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "SELECT * FROM lab_software WHERE lab_software.lab_num = '$labNum'";
        $result = $connection->query($sql);

        if($result->num_rows > 0){
            echo "<table><tr><th>Software Name</th><th>Software Version</th></tr>";
            foreach($result as $item){
                echo "<tr><td>".$item['software_name']."</td><td>".$item['software_version']."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "No results.";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}
function addRequest($labNum, $softwareName, $softwareVersion, $notes){
    $serverName = "108.163.161.66";
    $connection = new mysqli($serverName, "f7103097_admin", "admin", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "INSERT INTO `requests` (`lab_num`, `software_name`, `software_version`, `notes`, `last_updated`)
                VALUES ('$labNum', '$softwareName', '$softwareVersion', '$notes', CURRENT_TIMESTAMP);";
        $connection->query($sql);
        echo "request sent";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}

function adminLogin($username, $password){
    $serverName = "108.163.161.66";
    $connection = new mysqli( $serverName, $username, $password, "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }
    else{
        echo "connected as admin";
    }
}
function displayRequests(){
    $serverName = "108.163.161.66";
    $connection = new mysqli($serverName, "f7103097_admin", "admin", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "SELECT * FROM requests";
        $result = $connection->query($sql);

        if($result->num_rows > 0){
            echo "<table><tr><th>Lab Number</th>
                  <th>Software Name</th>
                  <th>Software Version</th>
                  <th>Notes</th></tr>";
            foreach($result as $item){
                $id = $item['id'];
                echo "<tr><td>".$item['lab_num']."</td><td>".$item['software_name']."</td><td>".$item['software_version'].
                     "</td><td>".$item['notes']."</td><td>".$item['last_updated']."</td>
                      <td><a href='?run=deleteRequest&id=$id'>Delete</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "No results.";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}
function deleteRequest($id){
    $serverName = "108.163.161.66";
    $connection = new mysqli($serverName, "f7103097_admin", "admin", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "DELETE FROM requests WHERE id = $id";
        $connection->query($sql);
        echo "Software removed.";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}
function addSoftware($labNum, $softwareName, $softwareVersion){
    $serverName = "108.163.161.66";
    $connection = new mysqli($serverName, "f7103097_admin", "admin", "f7103097_lab_software");

    if($connection->connect_error){
        die("Connection to database unable to complete: ".$connection->connect_error);
    }

    try{
        $sql = "INSERT INTO `lab_software` (`lab_num`, `software_name`, `software_version`, `last_updated`)
                VALUES ('$labNum', '$softwareName', '$softwareVersion', CURRENT_TIMESTAMP);";
        $connection->query($sql);
        echo "Software added.";
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    finally{
        $connection->close();
    }
}

$labNum="C420";
$softwareName="powerpoint";
$softwareVersion="1.0";
$notes="Example";

displayRequests();

?>
