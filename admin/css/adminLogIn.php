<!DOCTYPE html>
<html lang = "en">

<head>
	<title>Admin Log in</title>
	<link rel = "stylesheet" href="css/signlogCSS.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="login-box">
		<h1>Login</h1>

		<form action=adminLogIn.php method="post">
			<!-- Username -->	
			<label for="adminID">Admin ID</label>
				<input type="text" id="adminID" name="adminID" placeholder="Enter Your ID">
			
			<!-- Password -->	
			<label for="password">Password:</label> 
				<input type=password id="password" name="password" placeholder="Enter Your Password" required>

			<button type="button" name="showPassword" style="color:black; background-color:grey;">Show Password</button>

			<!-- Submit Button -->	
			<input type="submit" name="btnsub" value="Submit">	
		</form>

	<?php
		session_start();
			if (isset($_POST['btnsub']))
			{
				include("adminConnect.php");
				$_SESSION['_adminID'] =$_POST['adminID'];
				$_SESSION['_password']=$_POST['password'];

				$hanap="SELECT adminID from admininfo where (adminID='{$_SESSION['_adminID']}' AND adminPassword='{$_SESSION['_password']}' )";
				$result=mysqli_query($con,$hanap);
				$bilang=mysqli_num_rows($result);
				if ($bilang==1)
				{	
					header('Location:index.php');
				}
				else
					echo "<h4 style = 'padding:5px; background-color:red; margin-left: 70px;margin-right: 70px; border-radius: 4px;'>Incorrect ID or password!</h4>";
		    }
	?>
	
	</div>
	
</body>
	<script>
        document.querySelector("button[name='showPassword']").addEventListener("click", function () {
            var passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        });
    </script>

</html>