<?php
require('header.php');
require('admin/DB.php');
$data = $db_object->get_courses();
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
        <h2>Courses</h2>
        <p>We offer interesting , competitive, real world project based courses. So we highly recommend any level students to enroll our courses. We gurentee that end result of the respective courses will teach you skills that isn't taught by any other sources. Here's some of the courses that we are offering right now. </p>
    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Courses</h2>
            <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <?php foreach ($data as $oneCourse) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="admin/images/<?= $oneCourse['course_image'] ?>" class="img-fluid" alt="..." width=350 height=400>
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4><?= strtoupper($oneCourse['domain']) ?></h4>
                                <p class="price">$<?= $oneCourse['course_fee'] ?></p>
                            </div>

                            <h3><a href="course-details.html"><?= $oneCourse['course_name'] ?></a></h3>
                            <p><?= $oneCourse['description'] ?></p>
                            <div class="trainer d-flex justify-content-between align-items-end">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="admin/images/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                    <span><?= $oneCourse['name'] ?></span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            <?php } ?>


        </div>

    </div>
</section><!-- End Popular Courses Section -->


<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Mentor</h3>
                    <p>
                        Kathmandu, Nepal <br>
                        Khusibun-16<br>
                        <br>
                        <strong>Phone:</strong> +977-1234567890<br>
                        <strong>Email:</strong> bhattakrishna111@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="about_menu.php">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="courses_menu.php">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>K-Designs</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                Designed by <a href="https://github.com/krishnabhatta01">KrishnaBhatta</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/krishna.bhatta.9041083/" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>