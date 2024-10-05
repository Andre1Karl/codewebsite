
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pinoy Recipe</title>
	    <meta charset="utf-8">
	    <title>Filipino Food Cuisine</title>
	    

	    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	    <meta content="" name="keywords">
	    <meta content="" name="description">

	    <!-- Favicon -->
	    <link href="img/favicon.ico" rel="icon">

	    <!-- Google Web Fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

	    <!-- Icon Font Stylesheet -->
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	    <!-- Libraries Stylesheet -->
	    <link href="lib/animate/animate.min.css" rel="stylesheet">
	    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	    <!-- Customized Bootstrap Stylesheet 
	    <link href="css/bootstrap.min.css" rel="stylesheet">-->

	    <!-- Template Stylesheet 
	    <link href="css/style.css" rel="stylesheet">-->
	    
	    <!-- CSS(startPage.php) -->
    	<link rel="stylesheet" href="css/startPage.css"> 
    	<!-- Include the JavaScript code at the beginning of the body -->
	</head>
	<body>


		<div class="container">
			<header>
				<h1>Welcome to Pinoy Recipe</h1>
				<!--<p>Sign Up if you don't yet have an account</p>
				<p>Login if you already have an account</p>-->
			</header>	
			<form action=userStartPage.php method="post">
				<!-- Sign up -->	
				<input type="submit" name="signup" value="Sign up">	
				<!-- Sign in -->	
				<input type="submit" name="login" value="Log in">	
			</form>
		</div>	
			<?php
				//session_start();
				include("connect.php");
					if (isset($_POST['signup'])) {
						header('Location: userSignUp.php');
					} 
					if (isset($_POST['login'])){
						header('Location: userLogIn.php');
					}
			?>





	</body>


</html>