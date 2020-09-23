<?php include 'action.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <title>Aadil's Portfolio</title>
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="fasm5/css/all.css">
   
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

</head>

<body>

    <!--nab-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light nav_class" id="nav_class">
        <a class="navbar-brand text-white" href="#"><img src="images/aadilportfolio.png" class="logoImg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white current" onclick="scrollToTop()">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white current" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white current" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!---------------->
    <section class="firstDiv" id="firstDiv">
        <div class="container cDiv">
            <h1 class="text-center fd_h1 text-white" id="home">Hi! Welcome to my Portfolio Page.</h1>

            <p class="text-center text-white">Proficiency in Web designing, Web Development and Graphic Designing... </p>
            <br>
            <div align="center">
                <img class="aadillogo" src="images/aadillogo.png">
            </div>
            <div align="center">
                <a href="#portfolio" class="btn btn-warning pbtn"> Portfolio </a>
            </div>

        </div>

        <div class="dv">
            <img src="images/curved.png">
        </div>

    </section>
    <br>




    <!------------>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slick_class" id="slickId">

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS1.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS2.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS3.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS4.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS5.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS6.png" alt="HTML">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS7.png" alt="HTML">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS8.png" alt="HTML">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS9.png" alt="HTML">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial">
                            <div class="img-area">
                                <img src="images/WEBICONS10.png" alt="HTML">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container portfolio_text">
        <h3 class="text-center">PORTFOLIO</h3>
        <hr class="w-25 mx-auto pt-5">
        <br>
        <br>
        <div class="row" id="portfolio">
            <div class="col" align="center">
                <img src="images/multipagecrud.png" class="img_laptop">
            </div>
            <div class="col" align="center">

                <br>
                <h2>Student Registration App</h2>
                <h5>Multiple page</h5>
                <h4>CRUD APP</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col" align="center">

                <br>
                <h2>Student Registration App</h2>
                <h5>Single page</h5>
                <h4>CRUD APP</h4>
            </div>
            <div class="col" align="center">
                <img src="images/singlecrud.png" class="img_laptop">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col" align="center">
                <img src="images/loginregister.png" class="img_laptop">
            </div>
            <div class="col" align="center">

                <br>
                <h2>Login/Registration</h2>
                <h5>With E-mail Authentication</h5>
                <h4>Dynamic</h4>
            </div>
        </div>
        <div class="text-center">
            <hr>
            <br>
            <h3>Graphics and Illustrations</h3>
            <hr class="w-25 mx-auto pt-5">
        </div>
    </div>

    <!------gallery------------>
    <div class="glrydiv">
        <div class="main-img">
            <img src="gallery/aadil%20(1).jpg" id="current">
        </div>

        <div class="imgs">
            <img src="gallery/aadil%20(13).jpg">
            <img src="gallery/aadil%20(14).jpg">
            <img src="gallery/aadil%20(15).jpg">
            <img src="gallery/aadil%20(16).jpg">
            <img src="gallery/aadil%20(17).jpg">
            <img src="gallery/aadil%20(18).jpg">
            <img src="gallery/aadil%20(19).jpg">
            <img src="gallery/aadil%20(20).jpg">
            <img src="gallery/aadil%20(5).jpg">
            <img src="gallery/aadil%20(8).jpg">
        </div>
    </div>



    <div class="secondDiv" id="secondDiv">
        <div class="dv2">
            <img src="images/curveddown.png">
        </div>
        <div class="container">
            <h2 class="text-center text-white" id="contact">Get in touch</h2>
            <hr class="w-25 mx-auto pt-2">
            <div class="col-md-6 offset-md-3">

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fsm"><i class="fa fa-user text-white"></i></span>
                        </div>
                        <input type="text" name="name" placeholder="Enter your name :" class="form-control transparent-input" required>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fsm"><i class="fa fa-envelope text-white"></i></span>
                        </div>
                        <input type="email" name="email" placeholder="Enter your E-mail :" class="form-control transparent-input" required>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fsm"><i class="fa fa-pen text-white"></i></span>
                        </div>
                        <textarea name="msg" placeholder="Enter your message(max 255 characters) :" class="form-control transparent-input" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block sbtn">Submit</button>
                    </div>
                    <hr>

                </form>

            </div>

        </div>

        <div class="text-center text-white">
            <a href="#portfolio"><img src="images/aadilportfolio.png" class="logoImg2"></a>
            <p>aadil.shafi@ymail.com</p>
        </div>
        <br>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="script/script.js"></script>
    <script src="script/slick.min.js"></script>

</body>

</html>
