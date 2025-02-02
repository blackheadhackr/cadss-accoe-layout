<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>Contact - Accoet India</title>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon.png" href="img/favicon.png">

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl-carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!-- Header -->
    <?php include_once('header.php') ?>
    <!--/ End Header -->
    <!-- Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="page-heading">
                        <h1>Contact Us</h1>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-image">
                        <img src="img/contact.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <!-- Contact Content-->
    <section class="contact-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-details">
                        <h3>Get in Touch</h3>
                        <p>Have an inquiry or some feedback for us? Fill out the form to contact our team.</p>
                        <ul>
                            <li>
                                <span><i class="fas fa-phone-alt"></i></span>
                                <a href="tel:+911202555999">+91 1202 555 999</a>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope"></i></span>
                                <a href="mailto:info@accoet.com">info@accoet.com</a>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                3rd Floor, Bhavani Complex, Sector-27,Noida-201304.
                            </li>
                        </ul>
                        <div class="social-media pt-3">
                            <h3>Follow Us On</h3>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="enquiry.php" method="post">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="messgae">Enquiry</label>
                                        <textarea name="message" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Content -->
    <!-- Map -->
    <section>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.956777607529!2d77.32396296449348!3d28.571060593612536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5d5b65d9bef%3A0xab85bea3ce666201!2sAccoet%20India-%20Best%20IT%20Development%20%2FTraining%20Company%20in%20Noida%2C%20UP!5e0!3m2!1sen!2sin!4v1671381000181!5m2!1sen!2sin"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!-- End Map -->
    <!-- Footer -->
    <?php include('footer.php') ?>
    <!-- JS Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-awesome.js"></script>
    <script src="js/owl-carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>