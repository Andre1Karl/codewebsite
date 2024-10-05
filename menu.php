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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Recipes</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Recipes</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Food Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Filipino Food Recipes</h5>
                    <h1 class="mb-5">Popular Filipino Foods</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <!--<i class="fa fa-coffee fa-2x text-primary"></i>-->
                                <i class="fa fa-drumstick-bite fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Frieds</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <!--<i class="fa fa-hamburger fa-2x text-primary"></i>-->
                                <i class="fa fa-stamp fa-2x text-primary"></i>
                                
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Stews</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-mug-hot fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Soups & Veggies</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <i class="fa fa-cheese fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Desserts</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Start of Frieds -->
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">

                                <!--Lumpia Shanghai Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-1.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lumpiang Shanghai</span>
                                                <span class="text-primary">
                                                    <a href="recipe.php?foodID=MN-1">Read</a>
                                                </span>
                                            </h5>
                                            <small class="fst-italic">Lumpiang Shanghai is a popular Filipino dish consisting of small, deep-fried spring rolls filled with a seasoned mixture of ground pork or beef. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Lumpia Shanghai End-->

                                <!--Lumpiang Togue Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-2.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lumpiang Togue</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-2">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Lumpiang Togue is a popular Filipino spring roll dish that features mung bean sprouts as a key ingredient. </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Lumpiang Togue End-->

                                <!--Lechon Kawali Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-3.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lechon Kawali</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-3">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Lechon Kawali is a Filipino dish that features deep-fried crispy pork belly. It is a popular and festive dish often served during special occasions and celebrations.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Lechon Kawali End -->

                                <!--Crispy Pata Start -->    
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-4.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Crispy Pata</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-4">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Crispy Pata is a popular Filipino dish known for its indulgent and flavorful preparation of deep-fried pork leg. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Crispy Pata End -->

                                <!--Liempo End -->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-5.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Liempo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-5">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Liempo is a popular Filipino dish consisting of marinated and grilled pork belly. Known for its savory and flavorful taste, liempo is often enjoyed as a main dish or as part of a barbecue feast. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Liempo End -->

                                <!--Pritong Manok Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-6.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pritong Manok</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-6">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Pritong Manok is a popular Filipino dish that features crispy and flavorful fried chicken. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Pritong Manok End -->

                                <!--Daing na Bangus Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-7.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Daing na Bangus</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-7">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Daing na Bangus is a traditional Filipino dish that features milkfish marinated in a mixture of vinegar, garlic, and spices, then sun-dried before being pan-fried or grilled. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Daing na Bangus End-->

                                <!--Pinalamanan na Bangus Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-8.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pinalamanan na Bangus</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-8">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Pinalamanan na Bangus is a traditional Filipino dish that features milkfish (bangus) stuffed with a flavorful mixture of vegetables and sometimes ground meat.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Pinalamanan na Bangus End-->

                                <!--Kalamares Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-9.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Calamares</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-9">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Kalamares is a Filipino dish that features crispy and seasoned squid rings, deep-fried to perfection. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Kalamares End-->

                                <!--Kwek-Kwek Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-10.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kwek-Kwek</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-10">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Kwek-Kwek is a popular Filipino street food made of quail eggs coated in a distinctive orange batter, deep-fried until crispy.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Kwek-Kwek End-->
                            </div>
                        </div>
                        <!-- End of Frieds -->

                        <!-- Start of Stew -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                
                                <!-- Adobo Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-11.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Adobo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-11">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Chicken Adobo is a popular Filipino dish known for its savory and slightly tangy flavor.</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Adobo End-->

                                <!-- Dinuguan Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-12.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Dinuguan</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-12">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Dinuguan is a Filipino savory stew known for its dark, rich, and flavorful broth made from pork blood. Commonly referred to as "chocolate meat".</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dinuguan End-->

                                <!-- Binagoongan Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-13.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Binagoongan</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-13">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Binagoongan is a Filipino dish known for its bold and savory flavors.</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Binagoongan End-->

                                <!-- Kare-Kare Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-14.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kare-Kare</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-14">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Kare-Kare is a traditional Filipino oxtail stew characterized by its rich peanut sauce.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Kare-Kare End-->

                                <!-- Kaldereta Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-15.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Beef Kaldereta</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-15">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Kaldereta is a Filipino meat stew known for its rich and flavorful taste.</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Kaldereta End-->

                                <!-- Menudo Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-16.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Menudo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-16">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Menudo is a traditional Filipino stew made with pork, liver, vegetables, and tomato sauce.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Menudo End-->

                                <!-- Mechado Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-17.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mechado</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-17">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Mechado is a classic Filipino beef stew known for its tender chunks of beef, flavorful tomato-based sauce, and the infusion of soy sauce and citrus. </small>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mechado End-->

                                <!-- Afritada Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-18.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Afritada</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-18">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Afritada is a traditional Filipino stew known for its combination of meat, vegetables, and a flavorful tomato-based sauce. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Afritada End-->

                                <!-- Bopis Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-19.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bopis</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-19">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Bopis is a spicy Filipino dish made from minced pork or beef lung and heart, sautéed in a flavorful mixture of tomatoes, onions, garlic, and various spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Bopis End-->

                                <!-- Bicol Express Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-20.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bicol Express</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-20">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Bicol Express is a spicy Filipino dish originating from the Bicol region. It features pork cooked in coconut milk, chili peppers, shrimp paste, and various aromatic spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Bicol Express End-->
                            </div>
                        </div>
                        <!-- End of Stew -->

                        <!-- Start of Soup&Veggies -->
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!--Nilaga Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-21.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Beef Nilaga</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-21">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Beef Nilaga is a traditional Filipino boiled soup dish known for its simplicity and comforting flavors. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Nilaga End-->

                                <!--Sinigang Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-22.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pork Sinigang</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-22">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Pork Sinigang is a popular Filipino sour soup known for its distinctive tangy flavor.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Sinigang End-->

                                <!--Tinola Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-23.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Tinola</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-23">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Chicken Tinola is a popular Filipino ginger-based soup known for its light and refreshing taste. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Tinola End-->

                                <!--Bulalo Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-24.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Beef Bulalo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-24">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Beef Bulalo is a Filipino beef shank and marrow bone marrow stew known for its rich and flavorful broth. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Bulalo End-->

                                <!--Pancit Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-25.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pancit</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-25">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Pancit is a popular Filipino noodle dish that holds a special place in the country's culinary culture. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Pancit End-->

                                <!--Mongo Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-26.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mongo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-26">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Mongo, also known as Mung Bean Soup, is a popular and nutritious dish in Filipino cuisine.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Mongo End-->

                                <!--Pinakbet Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-27.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pinakbet</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-27">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Pinakbet is a Filipino vegetable stew that hails from the northern regions of the Philippines. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Pinakbet End-->

                                <!--Ampalaya Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-28.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>GINISANG AMPLAYA</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-28">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Ginisang Ampalaya, also known as Sauteed Bitter Melon, is a popular Filipino dish that transforms the naturally bitter taste of ampalaya (bitter melon) into a flavorful and savory meal. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Ampalaya End-->

                                <!--Laing Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-29.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Laing</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-29">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Laing is a spicy Filipino dish that originated from the Bicol region.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Laing End-->

                                <!--Sitaw Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-30.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Adobong Sitaw</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-30">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Adobong Sitaw is a popular Filipino dish featuring string beans (sitaw) cooked in a savory and slightly tangy adobo sauce. </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Soup&Veggies -->

                        <!-- Start of Desserts -->
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <!--Leche Flan Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-31.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Leche Flan</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-31">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Leche Flan is a popular and delicious Filipino dessert known for its rich and creamy texture.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Leche Flan End-->

                                <!--Ginataan Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-32.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Ginataang Halo-Halo</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-32">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Ginataang Halo-Halo is a traditional Filipino dessert that features a mix of various ingredients cooked in coconut milk. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Ginataan End-->

                                <!--Biko Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-33.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Biko</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-33">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Biko is a traditional Filipino rice cake made from glutinous rice, coconut milk, and brown sugar</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Biko End-->


                                <!--Kalamay Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-34.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kalamay</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-34">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Kalamay is a sweet sticky rice cake that is popular in Filipino cuisine. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Kalamay End-->

                                <!--Bibingka Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-35.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bibingka</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-35">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Bibingka is a traditional Filipino rice cake that is often enjoyed during the Christmas season and other special occasions.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Bibingka End-->

                                <!--Cassava Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-36.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cassava Cake</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-36">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Cassava cake is a popular Filipino dessert made from grated cassava, a starchy root vegetable. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Cassava End-->

                                <!--Maja Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-37.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Maja Blanca</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-37">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Maja, also known as Maja Blanca, is a traditional Filipino dessert that is both creamy and coconut-flavored.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Maja End-->

                                <!--Palitaw Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-38.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Palitaw</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-38">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Palitaw is a popular Filipino rice cake known for its simplicity and deliciousness. The name "palitaw" is derived from the Filipino word "litaw," meaning "to float" or "rise," which aptly describes the cooking process. </small>
                                        </div>
                                    </div>
                                </div>
                                <!--Palitaw End-->

                                <!--Puto Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-39.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Puto</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-39">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Puto is a traditional Filipino steamed rice cake that is a popular snack or breakfast item.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Puto End-->

                                <!--Turon Start-->
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/mn-40.jpg" alt="" style="width: 150px; height: 125px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Turon</span>
                                                <span class="text-primary"><a href="recipe.php?foodID=MN-40">Read</a></span>
                                            </h5>
                                            <small class="fst-italic">Turon, also known as banana lumpia or banana spring rolls, is a popular Filipino snack or dessert.</small>
                                        </div>
                                    </div>
                                </div>
                                <!--Turon Start-->
                            </div>
                        </div>
                        <!-- End of Desserts -->


                    </div>
                </div>
            </div>
        </div>
        <!-- Food End -->

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