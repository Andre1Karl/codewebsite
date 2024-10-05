<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logout</title>
    <style>
        #logoutMessage {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: #FEA11F;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 100%;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            width: auto;
            font-size: 30px;
        }
        body {
		    background-color: #0F172B;
		    font-family: Arial, sans-serif; /* Add a font-family for better consistency */
		}

    </style>
</head>
<body>
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        session_start();

        if (empty($_SESSION['_adminID'])) {
            // If the admin is not logged in, redirect to the login page
            header("Location: adminLogIn.php");
            exit();
        } else {
            $adminID = $_SESSION['_adminID'];
        }

        // Check if the "logout" query parameter is present
        if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
            $logoutMessage = "You have been logged out, " . $adminID;
            // Unset and destroy the session
            session_unset();
            session_destroy();
        } else {
            // If the admin directly accesses adminLogOut.php without logging out, redirect to the login page or display an error
            header("Location: adminLogIn.php");
            exit();
        }
    ?>
    <!-- Display the logout message as a notification -->
    <div id="logoutMessage"></div>

    <!-- Include the JavaScript code at the end of the body -->
    <script>
        // Function to fade out the message after a delay
        function fadeOutMessage() {
            setTimeout(function () {
                document.getElementById('logoutMessage').style.display = 'none';
                // Redirect to adminLogIn.php after the message is displayed
                window.location.href = 'adminLogIn.php';
            }, 5000); // 5 seconds delay
        }

        // Display the message and fade it out
        const logoutMessage = "<?php echo $logoutMessage; ?>";
        if (logoutMessage) {
            document.getElementById('logoutMessage').innerText = logoutMessage;
            document.getElementById('logoutMessage').style.display = 'block';
            fadeOutMessage();
        }
    </script>
</body>
</html>
