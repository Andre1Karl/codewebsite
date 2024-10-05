<?php
session_start();

if (isset($_POST['btnsub'])) {
    include("connect.php");

    $_SESSION['_firstname'] = $_POST['firstName'];
    $_SESSION['_lastname'] = $_POST['lastName'];
    $_SESSION['_username'] = $_POST['userName'];
    $_SESSION['_email'] = $_POST['email'];
    $_SESSION['_password'] = $_POST['password'];

    // Check if the username already exists
    $check_username_query = "SELECT * FROM userinfo WHERE userName='{$_SESSION['_username']}'";
    $check_username_result = mysqli_query($con, $check_username_query);

    // Check if the email already exists
    $check_email_query = "SELECT * FROM userinfo WHERE userEmail='{$_SESSION['_email']}'";
    $check_email_result = mysqli_query($con, $check_email_query);

    if (mysqli_num_rows($check_username_result) > 0) {
        echo "<h4 style='padding-top:5px; padding-bottom:5px; background-color:red; margin-top: 10px; margin-left: 380px; margin-right: 380px; border-radius: 4px;'>Username is already taken!</h4>";
    } elseif (mysqli_num_rows($check_email_result) > 0) {
        echo "<h4 style='padding-top:5px; padding-bottom:5px; background-color:red; margin-top: 10px; margin-left: 380px; margin-right: 380px; border-radius: 4px;'>Email is already taken!</h4>";
    } else {
        // Insert the new user into the database
        $insert_query = "INSERT INTO userinfo (userFirstName, userLastName, userName, userEmail, userPassword) 
            VALUES ('{$_SESSION['_firstname']}', '{$_SESSION['_lastname']}', '{$_SESSION['_username']}', '{$_SESSION['_email']}', '{$_SESSION['_password']}')";

        mysqli_query($con, $insert_query);

        header('Location: index.php');
        exit(); 
    }
}
?>
<!DOCTYPE html>
<html lang = "en">

	<head>
		<title>Sign Up</title>
		<script>
		    function validatePassword() {
		      var passwordInput = document.getElementById('password');
		      var password = passwordInput.value;

		      // Check if the password meets the criteria
		       if (/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+}{:;'?/>.<,|~`]).{8,}$/i.test(password)) {

		        // Password is valid
		        return true;
		      } else {
		        // Password is not valid
		        alert('Password must contain letter, number, special character, and be at least 8 characters long.');
		        return false;
		      }
		    }
		</script>
		<link rel = "stylesheet" href="css/signlogCSS.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
	</head>

	<body>
		<div class="signup-box">
			<h1>Sign Up</h1>
			<h4>Fill in the form to enter the Website</h4>

			<form action=userSignUp.php method="post" onsubmit="return validatePassword()">
				<!-- First Name -->
				<label>First Name</label>
					<input type="text" name="firstName" placeholder="Enter Your First Name" required>
				<!-- Last Name -->
				<label>Last Name</label>
					<input type="text" name="lastName" placeholder="Enter Your Last Name" required>
				<!-- Username -->	
				<label>Username</label>
					<input type="text" name="userName" placeholder="Enter Your Username">
				<!-- Email -->
				<label for="email">Email:</label> 
					<input type=email id="email" name=email placeholder="Enter Your Email" required>
				<!-- Password -->	
				<label for="password">Password:</label> 
					<input type=password id="password" name="password" placeholder="Enter Your Password" required>
					<button type="button" name="showPassword" style="color:black; background-color:grey;">Show Password</button>
				<!-- Submit Button -->	
				<input type="submit" name="btnsub" value="Submit">	
				<!--<button name="btnsub" value="submit"></button>-->
			</form>
			<p class="para-2">Already have an account? <a href="userLogIn.php">Login here</a></p>
		
			

		</div>
		<script>
		    document.querySelector("button[name='showPassword']").addEventListener("click", function () {
		        var passwordInput = document.getElementById("password");
	            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
	        });
		</script>
	</body>
</html>