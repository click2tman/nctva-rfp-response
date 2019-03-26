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
$sql = "SELECT DISTINCT fk_student, inyear\n"
    . "FROM  educational_services es, enrollment en, student st\n"
    . "WHERE en.fk_edus = es.fk_profession \n"
    . "AND en.fk_student = st.pk_student\n"
    . "AND inyear IN (2010, 2011, 2012, 2013)\n"
    . "ORDER BY es.inyear DESC";

if($result = $mysqli->query($sql)){
    if($result->num_rows > 0){
      echo "List of all TVET providers that have students enrolled who do not have an NCTVA-ID yet";
        echo "<table>";
            echo "<tr>";
                echo "<th>Student</th>";
                echo "<th>Year</th>";
            echo "</tr>";
        while($row = $result->fetch_array()){
            echo "<tr>";
                echo "<td>" . $row['fk_student'] . "</td>";
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
