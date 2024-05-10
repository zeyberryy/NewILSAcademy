        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>ILS Academy</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php $currentPage = basename($_SERVER['PHP_SELF'], '.php'); ?>
                <div class="navbar-nav mx-auto">
                    <li ><a href="index" class="nav-item nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Home</a></li>
                    <li ><a href="about" class="nav-item nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About Us</a></li>
                    <li ><a href="courses" class="nav-item nav-link <?php echo ($currentPage == 'courses') ? 'active' : ''; ?>">Courses</a></li>
                    <li ><a href="appointment" class="nav-item nav-link <?php echo ($currentPage == 'appointment') ? 'active' : ''; ?>">Admission</a></li>
                    <li ><a href="vlog" class="nav-item nav-link <?php echo ($currentPage == 'vlog') ? 'active' : ''; ?>">News</a></li>
                    <li ><a href="contact" class="nav-item nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact Us</a></li>
                </div>
                <a href="appointment" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
        