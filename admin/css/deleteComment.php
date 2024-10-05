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
        include("adminConnect.php");

        if (empty($_SESSION['_adminID'])) {
            header('location: adminLogIn.php');
            exit(); // Stop further execution
        }

        if (isset($_GET['commentNum'])) {
            $commentNum = $_GET['commentNum'];

            // Fetch the comment from the database
            $sql = "SELECT userComment FROM usermessage WHERE commentNum = '$commentNum'";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $userComment = $row['userComment'];

                // Display the confirmation message
                echo 'Are you sure you want to delete this Comment?<br>';
                echo 'Comment: "' . htmlspecialchars($userComment) . '"<br>';
                echo '<a href="deleteComment.php?commentNum=' . $commentNum . '&confirm=true" style="color: red; ">Yes</a>';
                echo ' | ';
                echo '<a href="comments.php" style="color: #FEA116;">No</a>';

                if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
                    // If confirmation is true, delete the user
                    $sqlDelete = "DELETE FROM usermessage WHERE commentNum = '$commentNum'";
                    mysqli_query($con, $sqlDelete);
                    echo '<br>Comment deleted successfully.';
                    echo '<br><a href="comments.php">Go back</a> ';
                }
            } else {
                echo 'Comment not found.';
            }
        }
        ?>

    </div>
</div>

</body>
</html>
