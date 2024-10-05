<?php
include("connect.php");

$foodID = isset($_GET['foodID']) ? $_GET['foodID'] : '';

function getFoodName($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodName FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foodName'];
    } else {
        return "Food Name not found for $foodID";
    }
}

function getFoodPic($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodPic FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foodPic'];
    } else {
        return "Food Picture not found for $foodID";
    }
}

function getFoodDescription($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodDescription FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foodDescription'];
    } else {
        return "Description not found for $foodID";
    }
}

function getFoodLink($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodLink FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['foodLink'];
    } else {
        return "Video Link not found for $foodID";
    }
}

function getFoodRecipe($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodRecipe FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // Explode the string into an array using newline as the delimiter
            $recipeItems = explode("\n", $row['foodRecipe']);

            // Loop through the array and display each item
            foreach ($recipeItems as $item) {
                echo "• " . trim($item) . "<br>";
            }
        }
    } else {
        echo "0 results";
    }
}    

function getFoodProcedure($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodProcedure FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            // Explode the string into an array using newline as the delimiter
            $recipeItems = explode("\n", $row['foodProcedure']);

            // Initialize a counter
            $counter = 1;

            // Loop through the array and display each item with a number
            foreach ($recipeItems as $item) {
                echo "$counter. " . trim($item) . "<br>";
                $counter++;
            }
        }
    } else {
        echo "0 results";
    }
}

function getFoodHealthBenefits($foodID) {
    global $con;

    $foodID = mysqli_real_escape_string($con, $foodID); // Sanitize input to prevent SQL injection

    $sql = "SELECT foodHealthBenefit FROM foodinfo WHERE foodID = '$foodID'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            // Explode the string into an array using newline as the delimiter
            $recipeItems = explode("\n", $row['foodHealthBenefit']);

            // Loop through the array and display each item
            foreach ($recipeItems as $item) {
                echo "• " . trim($item) . "<br>";
            }
        }
    } else {
        echo "0 results";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("php/profile.php");
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
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!--Spinner End -->


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
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                        <a href="menu.php" class="nav-item nav-link active">Filipino Foods</a>
                        <div class="nav-item dropdown" >
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu m-0" style="padding: 5%; background-color: rgba(80, 90, 100, 0.8); border-radius: 4px;">
                                <!--Profile Content-->
                                <div style="text-align: center;">

                                    <!--<h6 style="padding-bottom: 2px;">Username:</h6>-->
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Username: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_username']) ? getUserName($_SESSION['_username']) : "No Username parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Name: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_username']) ? getUserFirstName($_SESSION['_username']) . " " . getUserLastName($_SESSION['_username']): "No Firstname and Lastname parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Email: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_username']) ? getUserEmail($_SESSION['_username']) : "No Username parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <h6 style="display: inline-block; color: #FEA116;">
                                        Password: <br>
                                        <div style="color: white; padding-bottom:0px;">
                                        <?php echo isset($_SESSION['_username']) ? getUserPassword($_SESSION['_username']) : "No Username parameter provided."; ?>
                                        </div>
                                    </h6>
                                    <a href="userLogOut.php?logout=true" class="dropdown-item" style="background-color: #dc3545; transition: background-color 0.3s ease-in-out; border-radius: 4px; font-size: 15px;">Log out</a>
                                </div>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"><?php echo isset($_GET['foodID']) ? getFoodName($_GET['foodID']) : "No foodID parameter provided."; ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="menu.php">Filipino Foods</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">Recipe</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <!--<i class="fa fa-3x fa-user-tie text-primary mb-4"></i>-->
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Description</h5>
                                <p><?php echo isset($_GET['foodID']) ? getFoodDescription($_GET['foodID']) : "No foodID parameter provided."; ?></p>
                                
                                <h5>Video Link<i class="fa fa-3x fa-question text-primary mb-4"></i></h5>
                                <p><a href= "<?php echo isset($_GET['foodID']) ? getFoodLink($_GET['foodID']) : "No foodID parameter provided."; ?>" target = "_blank"><?php echo isset($_GET['foodID']) ? getFoodLink($_GET['foodID']) : "No foodID parameter provided."; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <!--<i class="fa fa-3x fa-utensils text-primary mb-4"></i>-->
                                <i class="fa fa-3x fa-list text-primary mb-4"></i>
                                <h5>Ingredients</h5>
                                <p><?php echo isset($_GET['foodID']) ? getFoodRecipe($_GET['foodID']) : "No foodID parameter provided."; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-clipboard text-primary mb-4"></i>
                                <h5>Procedure</h5>
                                <p><?php echo isset($_GET['foodID']) ? getFoodProcedure($_GET['foodID']) : "No foodID parameter provided."; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-heart text-primary mb-4"></i>
                                <h5>Health Benefits</h5>
                                <p><?php echo isset($_GET['foodID']) ? getFoodHealthBenefits($_GET['foodID']) : "No foodID parameter provided."; ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


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