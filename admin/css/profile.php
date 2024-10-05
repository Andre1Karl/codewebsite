<?php
    session_start();

    include("adminConnect.php");
    if (isset($_SESSION['_adminID'])) {
    // header("Location: userLogIn.php");
    // Uncomment the above line if you want to redirect users to the login page
    // You might want to consider showing a message instead of a direct redirect

    // Uncomment the line below for troubleshooting
         
    $profileAdminID = $_SESSION['_adminID'];

    // Uncomment the line below for troubleshooting
    //var_dump($_POST['_adminID']);

        //Username
        function getAdminID($profileAdminID){
            global $con;
            $_adminID = mysqli_real_escape_string($con, $profileAdminID);

            $sql = "SELECT adminID FROM admininfo WHERE adminID = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileAdminID);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultAdminID);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultAdminID;
                } else {
                    $stmt->close();
                    return "adminID not found for $profileAdminID";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Firstname
        function getAdminFirstName($profileAdminID){
            global $con;
            $_adminID = mysqli_real_escape_string($con, $profileAdminID);

            $sql = "SELECT adminFirstName FROM admininfo WHERE adminID = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileAdminID);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultFirstName);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultFirstName;
                } else {
                    $stmt->close();
                    return "Firstname not found for $profileAdminID";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Lastname
        function getAdminLastName($profileAdminID){
            global $con;
            $_adminID = mysqli_real_escape_string($con, $profileAdminID);

            $sql = "SELECT adminLastName FROM admininfo WHERE adminID = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileAdminID);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultLastName);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultLastName;
                } else {
                    $stmt->close();
                    return "Lastname not found for $profileAdminID";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Email
        function getAdminEmail($profileAdminID){
            global $con;
            $_adminID = mysqli_real_escape_string($con, $profileAdminID);

            $sql = "SELECT adminEmail FROM admininfo WHERE adminID = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileAdminID);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultEmail);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultEmail;
                } else {
                    $stmt->close();
                    return "Email not found for $profileAdminID";
                }
            } else {
                return "Error in prepared statement";
            }
        }

        //Password
        function getAdminPassword($profileAdminID){
            global $con;
            $_adminID = mysqli_real_escape_string($con, $profileAdminID);

            $sql = "SELECT adminPassword FROM admininfo WHERE adminID = ?";
            $stmt = $con->prepare($sql);

            if ($stmt) {
                $stmt->bind_param('s', $profileAdminID);
                $stmt->execute();
                $stmt->store_result();
                if ($stmt->num_rows > 0){
                    $stmt->bind_result($resultPassword);
                    $stmt->fetch();
                    $stmt->close();
                    return $resultPassword;
                } else {
                    $stmt->close();
                    return "Password not found for $profileAdminID";
                }
            } else {
                return "Error in prepared statement";
            }
        }

    }else{
        header("Location: adminLogIn.php");
        //exit("<h1 style='text-align:center; padding-top: 20px; background-image: linear-gradient(to bottom, #F09819, #F9D423);'>Sorry, <a href=userLogIn.php>Log In</a> first</h1>");
    }
    //var_dump(getUserName($inputUsername));
?>