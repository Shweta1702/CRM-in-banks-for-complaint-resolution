<?PHP 
require_once __DIR__ . '/lib/DataSource.php';
$sql = "select * from users where userId=? ";
$paramType = 'i';
$paramValue = array(
    $_GET["userId"]
);
$result = $database->select($sql, $paramType, $paramValue);
?>
<form name="frmUser" method="post" action="">
    <p>
        <a href="index.php" class="font-bold"> List User</a>
    </p>
    <h1>Edit User</h1>
    <div>
        <div class="row">
            <label for="signup-name">Name <span
                class="error-color" id="signup-name_error"></span>
            </label><input type="text" name="signup-name"
                id="signup-name"
                value="<?php echo $result[0]['signup_name']; ?>">
        </div>
    </div>
    <div class="row">
        <label>Username</label> <input type="hidden"
            name="userId" class="txtField"
            value="<?php echo $result[0]['userId']; ?>"><input
            type="text" name="userName" class="txtField"
            value="<?php echo $result[0]['userName']; ?>">
    </div>
    <div class="row">
        <label>First Name</label> <input type="text"
            name="firstName" class="txtField"
            value="<?php echo $result[0]['firstName']; ?>">
    </div>
    <div class="row">
        <label>Last Name</label> <input type="text"
            name="lastName" class="txtField"
            value="<?php echo $result[0]['lastName']; ?>">
    </div>
    <div class="row">
        <input type="submit" name="submit" value="Save"
            class="btnSubmit">
    </div>
</form>