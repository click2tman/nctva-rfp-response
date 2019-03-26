<?php include "theme/templates/header.php"; ?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require "../config/config.php";

$mysqli = new mysqli("$host", "$username", "$password", "$dbname");

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Attempt select query execution
$sql = "SELECT * FROM campus";
if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>UID</th>";
                echo "<th>City</th>";
                echo "<th>TVET Provider</th>";
                echo "<th>Campus Name</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['pk_campus'] . "</td>";
                echo "<td>" . $row['fk_city'] . "</td>";
                echo "<td>" . $row['fk_tvetprovider'] . "</td>";
                echo "<td>" . $row['campusname'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
<a href="index.php">Back to home</a>

<?php include "theme/templates/footer.php"; ?>
