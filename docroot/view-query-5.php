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
$sql = "SELECT profname, fk_profession inyear,fk_campus, cityname  \n"
    . "FROM campus ca, city ci, profession pr, educational_services es\n"
    . "WHERE es.fk_profession = pr.pk_prof\n"
    . "AND ca.fk_city = ci.pk_city\n"
    . "AND pr.pk_prof = 7";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
      echo "List of all cities in which a course for hairdressing (let's say this is primary key 7) is offered in 2018.";
        echo "<table>";
            echo "<tr>";
                echo "<th>City</th>";
                echo "<th>Profession</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['cityname'] . "</td>";
                echo "<td>" . $row['fk_profession'] . "</td>";
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
