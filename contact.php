<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("php/profile.php");
    ?>
    <?php // Fix this part make the username from the one that login ...
        //session_start();  
            if (empty($_SESSION['_username']))
            {
                header("Location: userLogIn.php");
                exit();
            }
            $username = $_SESSION['_username'];
            include("connect.php");
            if(isset($_POST['btnsub']))
            {
                $_SESSION['_userComment']=$_POST['userComment'];

                $insert_query = "INSERT INTO userMessage(userName, userComment) VALUES(?, ?)";

                // Prepare the statement
                $stmt = mysqli_prepare($con, $insert_query);

                if ($stmt) {
                    // Bind parameters
                    mysqli_stmt_bind_param($stmt, "ss", $username, $_SESSION['_userComment']);

                    // Execute the statement
                    mysqli_stmt_execute($stmt);

                    // Set a session variable to indicate that a message was sent
                    $_SESSION['message_sent'] = true;

                    // Close the statement
                    mysqli_stmt_close($stmt);
                } else {
                    // Handle the case where the statement preparation fails
                    echo "Error: " . mysqli_error($con);
                }
            }    
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
                        <a href="index.php" class="nav-item nav-link">Home</a>
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
                        <a href="contact.php" class="nav-item nav-link active">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
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
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">For Any Recommendations</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Facebook</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>Filipino Food Cuisine</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>filipinofoodcuisine@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Technical</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>pinoytech@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <picture>
                            <img src="img/pinoy.jpg" alt="pinoy" class="pinoy" style = "width:100%; height: 98% ;">
                        </picture>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="contact.php" method="post" >
                                <div class="row g-3">
                                    <!--<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="userName" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>  -->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" name="userComment" style="height: 225px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit" name="btnsub">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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

    <script>
        $(document).ready(function() {
            // Check if the session variable is set to indicate a message was sent
            <?php if (isset($_SESSION['message_sent']) && $_SESSION['message_sent']): ?>
                // Display the message at the top layer
                var messageContainer = $('<div class="alert alert-success fixed-top text-center">Message Sent!</div>');
                
                // Set background color
                messageContainer.css('background-color', '#FEA11F');
                //Size of the Container
                messageContainer.css('margin-top', '10px');
                messageContainer.css('margin-left', '550px');
                messageContainer.css('margin-right', '550px');
                //Border Design
                messageContainer.css('border', 'none');
                messageContainer.css('border-radius', '4px');
                //Font Design    
                messageContainer.css('color', 'white');
                messageContainer.css('font-size', '100%');
                // Adjust width to fit content
                messageContainer.css('width', 'auto');
                messageContainer.css('display', 'inline-block');

                $('body').append(messageContainer);

                // Fade out the message after 5 seconds
                setTimeout(function() {
                    messageContainer.fadeOut(1000, function() {
                        $(this).remove(); // Remove the message container after fading out
                    });
                }, 3000);

                // Reset the session variable
                <?php unset($_SESSION['message_sent']); ?>
            <?php endif; ?>
        });
    </script>


</body>

</html>