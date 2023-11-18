<form name="frmUser" method="post" action="">
	<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
	<p>
		<a href="index.php" class="font-bold">List User</a>
	</p>
	<h1>Add New User</h1>
	<div>
		<div class="row">
			<label for="signup-name">Name <span class="error-color"
				id="signup-name_error"></span>
			</label><input type="text" name="signup-name" id="signup-name"
				required>
		</div>
		<div class="row">
			<label>Username</label><input type="text" name="userName"
				class="txtField" required>
		</div>
		<div class="row">
			<label>First Name</label><input type="text" name="firstName"
				class="txtField">
		</div>
		<div class="row">
			<label>Last Name</label><input type="text" name="lastName"
				class="txtField">
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Add" class="btnSubmit">
		</div>
	</div>
</form>