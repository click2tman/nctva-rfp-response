<?php

/**
 * An HTML form to create a new entry in the provider table.
 *
 */


if (isset($_POST['submit'])) {
    require "../config/config.php";
    require "../config/common.php";

    try  {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_provider = array(
            "tpname" => $_POST['tpname'],
        );

        $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "TVET_provider",
                implode(", ", array_keys($new_provider)),
                ":" . implode(", :", array_keys($new_provider))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($new_provider);
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
?>

<?php include "theme/templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    <blockquote>Provide <strong><?php echo $_POST['tpname']; ?></strong> successfully added.</blockquote>
<?php } ?>

<h2>Add a provider</h2>

<form method="post">
  <label for="tpname">Official name of the TVET provider</label>
  <input type="text" name="tpname" id="tpname">
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php include "theme/templates/footer.php"; ?>
