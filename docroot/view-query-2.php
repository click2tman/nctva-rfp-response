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
$sql = "SELECT DISTINCT campusname, fk_city, fk_tvetprovider, pk_campus, pk_prof, profshort, profname, fk_campus, fk_profession, inyear, cityname, pk_city\n"
    . "from campus ca, educational_services es, profession pr, city ci \n"
    . "WHERE ca.pk_campus = es.fk_campus \n"
    . "AND pr.pk_prof = es.fk_profession\n"
    . "AND ci.pk_city = ca.fk_city\n"
    . "AND inyear IN (2012, 2013) AND cityname IN ('Kenema','Bo')";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
      echo "list of all professions that have been offered in the year 2012 and 2013 (both) in Kenema or in Bo (in one or in both).";
        echo "<table>";
            echo "<tr>";
                echo "<th>Short Profession</th>";
                echo "<th>Long Profession</th>";
                echo "<th>City</th>";
                echo "<th>Year Offered</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['profshort'] . "</td>";
                echo "<td>" . $row['profname'] . "</td>";
                echo "<td>" . $row['cityname'] . "</td>";
                echo "<td>" . $row['inyear'] . "</td>";
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
