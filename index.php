    <!-- Start Including Header -->
    <?php
    include("./mainInclude/header.php");
    ?>
    <!-- End Including Header -->

    <!-- Start video background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/bannervid.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to SkillBridge</h1>
            <small class="my-content">Empower your skills, build your bridge to success</small><br><br>
            <!-- Button trigger modal -->

            <?php
                if(!isset($_SESSION['is_login'])) {
                    echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
                } else {
                    echo '<a href="#" class="btn btn-primary mt-3">My Profile</a>';
                }
            ?>
        </div>
    </div>
    <!-- End video background -->


    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i>5+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Good Instructor</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->


    <!-- Start Most Popular Course -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
        <!-- Start Most Popular Courses Row -->
        <div class="row mt-4">
            <!-- First Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/courseimg/piano.jpg" alt="Piano" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Learn Piano Easy Way</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, sapiente illo? Assumenda veritatis nisi accusamus dignissimos blanditiis dicta, nam quod cupiditate.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
                        <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/courseimg/cpp.jpg" alt="C++" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Learn C++</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, sapiente illo? Assumenda veritatis nisi accusamus dignissimos blanditiis dicta, nam quod cupiditate.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 4000</del></small> <span class="font-weight-bolder">&#8377 999</span></p>
                        <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                    </div>
                </div>
            </div>
            <!-- Third Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="image/courseimg/cpp.jpg" alt="C++" class="card-img-top" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Learn C++</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, sapiente illo? Assumenda veritatis nisi accusamus dignissimos blanditiis dicta, nam quod cupiditate.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 4000</del></small> <span class="font-weight-bolder">&#8377 999</span></p>
                        <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Popular Courses Row -->
        <div class="text-center m-2">
            <a href="#" class="btn btn-danger btn-sm">View All Courses</a>
        </div>
    </div>
    <!-- End Most Popular Course -->


    <!-- Start Contact Us -->
    <?php
    include("./contact.php");
    ?>
    <!-- End Contact Us -->

    <!-- Start FeedBack Section -->
    <div class="container-fluid mt-5" style="background-color: #35a2dc;" id="Feedback">
        <h1 class="text-center textyheading p-4">Feedback</h1>
        <div class="slider">
            <div class="slides">
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus impedit cumque nostrum illum aperiam nesciunt fuga, accusantium eius sequi expedita?
                    </p>
                    <div class="pic">
                        <img src="image/feedback/studentimg.png" alt="studentimage">
                    </div>
                    <div class="testimonial-proof">
                        <h4>John Doe</h4>
                        <small>Web Developer</small>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="description">
                        Another testimonial text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <div class="pic">
                        <img src="image/feedback/studentimg2.png" alt="studentimage">
                    </div>
                    <div class="testimonial-proof">
                        <h4>Jane Smith</h4>
                        <small>Graphic Designer</small>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="description">
                        This is a great course! I learned so much. Highly recommend to everyone.
                    </p>
                    <div class="pic">
                        <img src="image/feedback/studentimg3.png" alt="studentimage">
                    </div>
                    <div class="testimonial-proof">
                        <h4>Alex Johnson</h4>
                        <small>Data Analyst</small>
                    </div>
                </div>
                <!-- Add more testimonial items as needed -->
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </div>
    <!-- End FeedBack Section -->

    <!-- Start Social Follow -->
    <div class="conatiner-fluid bg-danger">
        <div class="row text-white text-center p1">
            <div class="col-sm">
                <a href="#" class="text-white social-hover" style="text-decoration: none;"><i class="fab fa-facebook-f"></i>Facebook</a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover" style="text-decoration: none;"><i class="fab fa-twitter"></i>Twitter</a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover" style="text-decoration: none;"><i class="fab fa-whatsapp"></i>Whatsapp</a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover" style="text-decoration: none;"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>
    </div>
    <!-- End Social Follow -->


    <!-- Start About Section -->
    <div class="container-fluid p-4" style="background-color: #E9ECEF;">
        <div class="container" style="background-color: #E9ECEF;">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>SkillBridge is dedicated to empowering learners through high-quality online courses. Our mission is to provide flexible, accessible education that helps individuals master new skills and advance their careers. Join us on your journey to success!</p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="#" class="text-dark" style="text-decoration: none;">Web Developer</a><br>
                    <a href="#" class="text-dark" style="text-decoration: none;">Web Designing</a><br>
                    <a href="#" class="text-dark" style="text-decoration: none;">Android App Dev</a><br>
                    <a href="#" class="text-dark" style="text-decoration: none;">Ios Development</a><br>
                    <a href="#" class="text-dark" style="text-decoration: none;">Data Analysis</a><br>
                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>SkillBridge Pvt Ltd
                        <br>123, ABC Street, XYZ City
                        <br>Phone: 1234567890
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Start Including Footer -->
    <?php
    include("./mainInclude/footer.php");
    ?>
    <!-- End Including Footer -->