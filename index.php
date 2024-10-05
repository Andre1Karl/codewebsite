
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a> 
                        <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                        <a href="menu.php" class="nav-item nav-link">Filipino Foods</a>
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
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Filipino Foods</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">The majority of Filipino food has a very particular taste between sweet, sour and salty.</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/bilao.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Affordability</h5>
                                <p>the Philippines fared fairly well in affordability (with a score of 43.5 out of the highest score of 100)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>The food in the Philippines is generally considered to be good and they have unique taste.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Why it's so special?</h5>
                                <p>Filipino food continues to surprise people due to its distinct taste, creativity, and diversity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p>The Filipino always make the food available for whole day and because of how they love to eat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/ab-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/ab-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/ab-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/ab-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Filipino Food</h1>
                        <p class="mb-4">Filipino food is a mixture of sweet, salty, and sour flavours. Rice figures heavily — this is Southeast Asia, after all! — and coconut is of utmost importance, with all parts of the coconut (including the sap and leaves) used in cooking and preparation.</p>
                        <p class="mb-4">The Filipino foods we eat today are a direct fusion of indigenous ingredients, flavours, and outside influence. With such a wide geography and rich indigenous history, each area of the Philippines reflects these influences in local variations of popular dishes.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Users Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    
                    <?php
                        include("connect.php");

                        // Fetching the latest 5 testimonials
                        $sql = "SELECT userMessage.userComment, userinfo.userName, userinfo.userEmail, userMessage.commentTime
                                FROM userMessage
                                JOIN userinfo ON userMessage.userName = userinfo.userName
                                ORDER BY userMessage.commentTime DESC
                                LIMIT 5";

                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<div class="testimonial-item bg-transparent border rounded p-4">';
                                echo '<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>';
                                echo '<p>' . $row['userComment'] . '</p>';
                                echo '<div class="d-flex align-items-center">';
                                echo '<div class="ps-3">';
                                echo '<h5 class="mb-1">' . $row['userName'] . '</h5>';
                                echo '<small>' . $row['userEmail'] . '</small>';
                                echo '</br>';
                                echo '<small>' . $row['commentTime'] . '</small>';
                                echo '</div></div></div>';
                            }
                        } else {
                            echo '<p>No testimonials available.</p>';
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Testimonial -->

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