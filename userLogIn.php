<?php
// Start a session to manage user sessions
session_start();

/**
 * Function to validate user credentials and perform login.
 * Redirects to the main page on successful login, otherwise displays an error message.
 */


// Check if the login form is submitted
if (isset($_POST['btnsub'])) {
    include("connect.php");

    // Get username and password from the form
    $_SESSION['_username'] = $_POST['userName'];
    $_SESSION['_password'] = $_POST['password'];

    // Validate user credentials
    $loginResult = loginUser($_SESSION['_username'], $_SESSION['_password'], $con);

    if ($loginResult == 1) {
        // Redirect to the main page on successful login
        header('Location:index.php');
        exit(); // Ensure no further code execution after redirection
    } else {
        // Display an error message for incorrect credentials
        echo "<h4 style='padding-top:3px; padding-bottom:3px; background-color:red; margin-left: 30px; margin-right: 30px; border-radius: 4px;'>Incorrect Username or password!</h4>";
    }
}

/**
 * Show/hide password functionality using JavaScript.
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/signlogCSS.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>

        <form action="userLogIn.php" method="post">
            <!-- Username -->
            <label for="username">Username</label>
            <input type="text" id="username" name="userName" placeholder="Enter Your Username">

            <!-- Password -->
            <label for="password">Password:</label>
            <input type=password id="password" name="password" placeholder="Enter Your Password" required>

            <button type="button" name="showPassword" style="color:black; background-color:grey;">Show Password</button>

            <!-- Submit Button -->
            <input type="submit" name="btnsub" value="Submit">
        </form>
        <p class="para-2">Doesn't have an account? <a href="userSignUp.php">Sign Up here</a></p>
    </div>

    <script>
        document.querySelector("button[name='showPassword']").addEventListener("click", function () {
            var passwordInput = document.getElementById("password");
            passwordInput.type = passwordInput.type === "password" ? "text" : "password";
        });
    </script>
</body>

</html>
