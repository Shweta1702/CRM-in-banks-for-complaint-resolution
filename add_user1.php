<?php
if (count($_POST) > 0) {
    require_once __DIR__ . '/lib/DataSource.php';
    $database = new DataSource();
    $sql = "INSERT INTO users (signup_name,userName,firstName, lastName) VALUES (?,?,?,?)";
    $paramType = 'ssss';
    $paramValue = array(
        $_POST["signup-name"],
        $_POST["userName"],
        $_POST["firstName"],
        $_POST["lastName"]
    );
    $database->insert($sql, $paramType, $paramValue);
}
?>