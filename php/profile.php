<?php
    session_start();

    include("connect.php");
    if (isset($_SESSION['_username'])) {
    // header("Location: userLogIn.php");
    // Uncomment the above line if you want to redirect users to the login page
    // You might want to consider showing a message instead of a direct redirect

    // Uncomment the line below for troubleshooting
         
    $profileUserName = $_SESSION['_username'];

    // Uncomment the line below for troubleshooting
    //var_dump($_POST['_username']);

        //Username
        function getUserName($profileUserName){
            global $con;
            $_username = mysqli_real_escape_string($con, $profileUserName);

            $sql = "SELECT userName FROM userinfo WHERE userName = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileUserName);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultUserName);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultUserName;
                } else {
                    $stmt->close();
                    return "Username not found for $profileUserName";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Firstname
        function getUserFirstName($profileUserName){
            global $con;
            $_username = mysqli_real_escape_string($con, $profileUserName);

            $sql = "SELECT userFirstName FROM userinfo WHERE userName = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileUserName);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultFirstName);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultFirstName;
                } else {
                    $stmt->close();
                    return "Firstname not found for $profileUserName";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Lastname
        function getUserLastName($profileUserName){
            global $con;
            $_username = mysqli_real_escape_string($con, $profileUserName);

            $sql = "SELECT userLastName FROM userinfo WHERE userName = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileUserName);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultLastName);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultLastName;
                } else {
                    $stmt->close();
                    return "Lastname not found for $profileUserName";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Email
        function getUserEmail($profileUserName){
            global $con;
            $_username = mysqli_real_escape_string($con, $profileUserName);

            $sql = "SELECT userEmail FROM userinfo WHERE userName = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileUserName);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultEmail);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultEmail;
                } else {
                    $stmt->close();
                    return "Lastname not found for $profileUserName";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Password
        function getUserPassword($profileUserName){
            global $con;
            $_username = mysqli_real_escape_string($con, $profileUserName);

            $sql = "SELECT userPassword FROM userinfo WHERE userName = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileUserName);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultPassword);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultPassword;
                } else {
                    $stmt->close();
                    return "Lastname not found for $profileUserName";
                }
            } else {
                return "Error in prepared statement";
            }
        }

    }else{
        header("Location: userLogIn.php");
        //exit("<h1 style='text-align:center; padding-top: 20px; background-image: linear-gradient(to bottom, #F09819, #F9D423);'>Sorry, <a href=userLogIn.php>Log In</a> first</h1>");
    }
    //var_dump(getUserName($inputUsername));
?>