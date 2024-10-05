<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("profile.php");
    ?>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tablestyle.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Pinoy</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="users.php" class="nav-item nav-link active">Users</a>
                        <a href="comments.php" class="nav-item nav-link">Comments</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu m-0" style="padding: 5%; background-color: rgba(80, 90, 100, 0.8); border-radius: 4px;">
                                <!--Profile Content-->
                                <div style="text-align: center;">

                                    <!--<h6 style="padding-bottom: 2px;">Username:</h6>-->
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Admin ID: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_adminID']) ? getAdminID($_SESSION['_adminID']) : "No Adminname parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Name: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_adminID']) ? getAdminFirstName($_SESSION['_adminID']) . " " . getAdminLastName($_SESSION['_adminID']): "No Firstname and Lastname parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Email: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_adminID']) ? getAdminEmail($_SESSION['_adminID']) : "No Username parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Password: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_adminID']) ? getAdminPassword($_SESSION['_adminID']) : "No Username parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <a href="adminLogOut.php?logout=true" class="dropdown-item" style="background-color: #dc3545; transition: background-color 0.3s ease-in-out; border-radius: 4px; font-size: 15px;">Log out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">User Accounts</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Users</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">User Accounts</h5>
                    <!--<h1 class="mb-5">For Any Recommendations</h1>-->
                </div>
            </div>
        </div>
        <div class = "usertable">
        <?php
            include("connect.php");

            // Handle Search
            $searchKeyword = '';
            if (isset($_GET['search'])) {
                $searchKeyword = $_GET['search'];
                $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo 
                        WHERE userFirstName LIKE '%$searchKeyword%' OR 
                              userLastName LIKE '%$searchKeyword%' OR 
                              userName LIKE '%$searchKeyword%' OR 
                              userEmail LIKE '%$searchKeyword%'";
            } else {
                $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo";
            }

            // View All Logic
            if (isset($_GET['viewAll'])) {
                $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo";
            }

            $result = $con->query($sql);

            // Display data in tabular form
            echo '<style>';
            echo 'table { width: 95%; border-collapse: collapse; margin-top: 20px; display: flex; justify-content: center;}';
            echo 'th, td { padding: 20px; text-align: left; }';
            echo 'th { background-color: #FEA116; }';
            echo 'td a { 
                display: inline-block; 
                background-color: red; 
                color: white; 
                padding: 10px; 
                border-radius: 4px; 
                transition: background-color 0.3s ease-in-out; 
                text-decoration: none; 
            }';

            echo 'td a:hover { background-color: #dc3545; color: white;}';
            echo 'input[type="submit"] {background-color: #FEA116; border:none; border-radius:4px;color:white;}';
            echo 'input[type="submit"]:hover {background-color: #0F172B;}';
            echo '</style>';

            // Search Form
            echo '<form method="GET" action="" style="margin-left:100px;">
            <input type="text" name="search" value="' . $searchKeyword . '" placeholder="Search...">
            <input type="submit" value="Search">
            <input type="submit" name="viewAll" value="View All"></form>';// View All Button

            echo '<table>';
            echo '<tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>';

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['userFirstName'] . '</td>';
                    echo '<td>' . $row['userLastName'] . '</td>';
                    echo '<td>' . $row['userName'] . '</td>';
                    echo '<td>' . $row['userEmail'] . '</td>';
                    echo '<td>' . $row['userPassword'] . '</td>';
                    echo '<td><a href="deleteUser.php?action=delete&userName=' . $row['userName'] . '" onclick="return confirm(\'Are you sure you want to delete this Account?\')">Delete</a></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">No records found</td></tr>';
            }

            echo '</table>';
        ?>    
        <?php
        /*
            include("adminConnect.php");

            // Fetch data from the database
            $sql = "SELECT userFirstName, userLastName, userName, userEmail, userPassword FROM userinfo";
            $result = $con->query($sql);

            // Display data in tabular form
            echo '<table border="1">';
            echo '<tr><th>First Name</th><th>Last Name</th><th>Username</th><th>Email</th><th>Password</th><th>Action</th></tr>';

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['userFirstName'] . '</td>';
                    echo '<td>' . $row['userLastName'] . '</td>';
                    echo '<td>' . $row['userName'] . '</td>';
                    echo '<td>' . $row['userEmail'] . '</td>';
                    echo '<td>' . $row['userPassword'] . '</td>';
                    echo '<td><a href="delete.php?userName=' . $row['userName'] . '">Delete</a></td>';
                    echo '</tr>';   
                }
            } else {
                echo '<tr><td colspan="6">No records found</td></tr>';
            }

            echo '</table>';
        */    
        ?>
    </div>
        <!-- Contact End -->


        
            
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>