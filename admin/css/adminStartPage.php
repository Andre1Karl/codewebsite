<html>
	<head>
	<title>Pinoy Recipe - Admin</title>
	
	<!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS(startPage.php) -->
    <link rel="stylesheet" href="css/startPage.css"> 
	</head>

	<body>
		<div class="container">
			<h1>Welcome to Pinoy Recipe, Admin</h1>
			
			<form action=adminStartPage.php method="post">
				<!-- Sign in -->	
				<input type="submit" name="login" value="Log in">	
			</form>
		</div>	
	</body>

	<?php
		session_start();
		include("adminConnect.php");
			if (isset($_POST['login'])){
				header('Location: adminLogIn.php');
			}
	?>

</html>