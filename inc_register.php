<?php // Script 8.9 - register.php
/* This page lets people register for the site (in theory). */

// Print some introductory text:
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = false; // No problems so far.
	
	// Check for each value...
	if (empty($_POST['first_name'])) {
		$problem = true;
		print '<h3 class="text--error">Please enter your first name!</h3>';
	}
	
	if (empty($_POST['last_name'])) {
		$problem = true;
		print '<h3 class="text--error">Please enter your last name!</h3>';
	}

	if (empty($_POST['email_address'])) {
		$problem = true;
		print '<h3 class="text--error">Please enter your email address!</h3>';
	}

	if (empty($_POST['password'])) {
		$problem = true;
		print '<h3 class="text--error">Please enter a password!</h3>';
	}

	
	if (!$problem) { 
		
		
		require('mysqli_connect.php');
		
		print_r($_POST);
		
		$email_address = $_POST["email_address"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$password = $_POST["password"];
		
		$sql = "INSERT INTO USER (email_address, first_name, last_name, password)
		VALUES ('$email_address', '$first_name', '$last_name', '$password')";
		
		if (mysqli_query($connect, $sql)) {
			echo "New record created successfully"; 
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
	
	} else { // Forgot a field.
	
		print '<h3 class="text--error">Please try again!</h3>';
		
	}

} // End of handle form IF.

// Create the form:
?>
<form action="register.php" method="post" class="form--inline">

	<p><label class="formDesign"  for="first_name">First Name:</label><input type="text" name="first_name" size="40"   height="48"  value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"></p>

	<p><label class="formDesign" for="last_name">Last Name:</label><input type="text" name="last_name" size="40"  height="48"  value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>"></p>

	<p><label class="formDesign" for="email_address">Email Address:</label><input type="email_address" name="email_address" size="40" height="48" value="<?php if (isset($_POST['email_address'])) { print htmlspecialchars($_POST['email_address']); } ?>"></p>

	<p><label class="formDesign" for="password">Password:</label><input type="password" name="password" size="40"  height="48"  value="<?php if (isset($_POST['password'])) { print htmlspecialchars($_POST['password']); } ?>"></p>


	<p><input class="downloadButtonTwo" type="submit" name="submit" value="Register!" class="button--pill"></p>

</form>

