<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>APPOINMENT || ILS ACADEMY</title>
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
            <div class="d-flex flex-column align-items-center justify-content-center"style="min-height: 400px; background-image: url('img/admission.jpg'); background-size: cover; background-position: center;">
                <h3 class="display-3 font-weight-bold text-white">APPOINMENT</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0"><a class="text-white" href="index">Home</a></p>
                    <p class="m-0 px-2">/</p>
                    <p class="m-0">Appointment</p>
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Admission Form</h1>
                                <form id="myForm1" action="mailto:ilsacademycalicut@example.com" method="post" enctype="text/plain">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="studentName" id="studentName" placeholder="Student Name" required>
                                                <label for="studentName">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="education" id="education" placeholder="Higher Education" required>
                                                <label for="education">Higher Education</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="mobile" id="mobile" placeholder="Mobile Number" required>
                                                <label for="mobile">Mobile Number</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" name="email" id="email" placeholder="Email" required>
                                                <label for="email">Email Address</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select class="form-select border-0" name="course" id="course" required>
                                                    <option value="" disabled selected>Select Course</option>
                                                    <option value="Advanced Diploma in Hospital Administration and Business Management">Advanced Diploma in Hospital Administration and Business Management</option>
                                                    <option value="Diploma in Hospital Administration">Diploma in Hospital Administration</option>
                                                    <option value="Diploma in Housekeeping Management">Diploma in Housekeeping Management</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="details" placeholder="Location" id="details" required>
                                                <label for="details">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary w-100 py-3" type="button" onclick="submitToEmail()">Submit via Email</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-secondary w-100 py-3" type="button" onclick="submitToWhatsApp()">Submit via WhatsApp</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/admission form.svg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->


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
    <script src="js/appointmentForm.js"></script>
</body>

</html>