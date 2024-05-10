<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CONTACT || ILS ACADEMY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include 'head.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <?php include 'navbar.php'; ?>
        <!-- Header Start -->
        <div class="container-fluid bg-primary mb-5"style="padding:0px;">
            <div class="d-flex flex-column align-items-center justify-content-center"style="min-height: 400px; background-image: url('img/contact.jpg'); background-size: cover; background-position: center;">
                <h3 class="display-3 font-weight-bold text-white">CONTACT</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index">Home</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">Contact</p>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Get In Touch</h1>
                    <p>Reach out to ILS Academy! Use the form below for inquiries or assistance. We're here to help you succeed</p>
                </div>
                <div class="row g-4 mb-5">
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h6>First Floor, Sana Tower, Near Medical College, Kozhikode</h6>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h6>admin@ilsacademy.in</h6>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 75px; height: 75px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h6>+91 9061 03 5557 </h6>
                    </div>
                </div>
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Contact Form</h1>
                                <p class="mb-4">Please contact us if you have any query</a>.</p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="name" placeholder="Your Name" required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" id="email" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" id="subject" placeholder="Subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 100px" required></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary w-100 py-3" type="button" onclick="submitViaEmail()">Send Message via Email</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary w-100 py-3" type="button" onclick="submitViaWhatsApp()">Send Message via WhatsApp</button>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-secondary w-100 py-3" type="button" onclick="resetForm()">Reset Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sana%20tower,%20medical%20college,%20kozhikode,%20673008+(ils%20institute)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php include 'footer.php'; ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/contactForm.js"></script>
</body>

</html>