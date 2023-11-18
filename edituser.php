<?php
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();

if (count($_POST) > 0) {
    $sql = "UPDATE users set signup_name=?, userName=? ,firstName=? ,lastName=? WHERE userId=?";
    $paramType = 'ssssi';
    $paramValue = array(
        $_POST["signup-name"],
        $_POST["userName"],
        $_POST["firstName"],
        $_POST["lastName"],
        $_GET["userId"]
    );
    $database->execute($sql, $paramType, $paramValue);
    $message = "Record Modified Successfully";
}
?>