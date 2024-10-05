<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Comment</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #0F172B;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .content {
            padding: 20px;
            border-radius: 8px;
            background-color: #1E293B;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            text-align: center;
        }

        a {
            color: #66BFFF;
        }
        a:hover {
            background-color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <?php
            session_start();

        // Include the database connection
        include("connect.php");

        if (empty($_SESSION['_adminID'])) {
            header('location: adminLogIn.php');
            exit(); // Stop further execution
        }

        if (isset($_GET['userName'])) {
            $userName = $_GET['userName'];

            // Fetch the comment from the database
            $sql = "SELECT userName FROM userinfo WHERE userName = '$userName'";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $username = $row['userName'];

                // Display the confirmation message
                echo 'Are you sure you want to delete this Account?<br>';
                echo 'Comment: "' . htmlspecialchars($userName) . '"<br>';
                echo '<a href="deleteUser.php?userName=' . $userName . '&confirm=true" style="color: red; ">Yes</a>';
                echo ' | ';
                echo '<a href="users.php" style="color: #FEA116;">No</a>';
                echo '<style>';
                echo 'table {border: none; margin-top: 20px; display: flex; justify-content: center;}';
                echo 'th { background-color: #FEA116; }';
                echo '</style>';
                
                $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo WHERE userName = '$userName'";
                    $result = $con->query($sql);

                    // Display data in tabular form
                    echo '<table border="1">';
                    echo '<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Email</th><th>Password</th></tr>';

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['userFirstName'] . '</td>';
                            echo '<td>' . $row['userLastName'] . '</td>';
                            echo '<td>' . $row['userName'] . '</td>';
                            echo '<td>' . $row['userEmail'] . '</td>';
                            echo '<td>' . $row['userPassword'] . '</td>';
                            echo '</tr>';   
                        }
                    } else {
                        echo '<tr><td colspan="6">No records found</td></tr>';
                    }

                    echo '</table>';

                if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
                    // If confirmation is true, delete the user
                    $sqlDelete = "DELETE FROM userinfo WHERE userName = '$userName'";
                    mysqli_query($con, $sqlDelete);
                    echo '<br>Account deleted successfully.';
                    echo '<br><a href="users.php">Go back</a> ';
                }
            } else {
                echo 'User not found.';
            }
        }
        ?>
        
        <?php
        /*// Include the database connection
        include("adminConnect.php");

        if (isset($_GET['userName'])) {
            $userName = $_GET['userName'];

            // Display a confirmation message
            echo 'Are you sure you want to delete this user?';
            echo '<br>';
            $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo WHERE userName = '$userName'";
                    $result = $con->query($sql);

                    // Display data in tabular form
                    echo '<table border="1">';
                    echo '<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Email</th><th>Password</th></tr>';

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . $row['userFirstName'] . '</td>';
                            echo '<td>' . $row['userLastName'] . '</td>';
                            echo '<td>' . $row['userName'] . '</td>';
                            echo '<td>' . $row['userEmail'] . '</td>';
                            echo '<td>' . $row['userPassword'] . '</td>';
                            echo '</tr>';   
                        }
                    } else {
                        echo '<tr><td colspan="6">No records found</td></tr>';
                    }

                    echo '</table>';
            echo '<br>';
            echo '<a href="deleteUser.php?userName=' . $userName . '&confirm=true">Yes</a>';
            echo ' | ';
            echo '<a href="index.php">No</a>';

            if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
                // If confirmation is true, delete the user
                $sql = "DELETE FROM userinfo WHERE userName = '$userName'";
                mysqli_query($con, $sql);  
                echo '<br>User deleted successfully.';
                echo '<br><a href="users.php">Go back</a> ';
            }
        }
        */
        ?>

    </div>
</div>

</body>
</html>

