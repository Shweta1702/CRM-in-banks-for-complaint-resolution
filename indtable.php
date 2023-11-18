<form method="post" action="">
	<div id="message"><?php if(isset($message)) { echo $message; } ?></div>
	<p>
		<a href="add_user.php" class="font-bold">Add User</a>
	</p>
	<table class="striped">
		<thead>
			<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Actions</th>
			</tr>
		</thead>
<?php
if (is_array($result) || is_object($result)) {
    foreach ($result as $key => $value) {
        ?>
         <tr>

			<td><?php echo $result[$key]["userName"];?></td>
			<td><?php echo $result[$key]["firstName"];?></td>
			<td><?php echo $result[$key]["lastName"];?></td>
			<td><a
				href="edit_user.php?userId=<?php echo $result[$key]["userId"]; ?>"
				class="mr-20">Edit</a> <a
				href="delete_user.php?userId=<?php echo $result[$key]["userId"]; ?>">Delete</a></td>
		</tr>
 <?php
    }
}
?>
		</table>
</form>