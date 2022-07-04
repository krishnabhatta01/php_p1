<?php

$data = $db_object->get_trainer();

?>


<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <?php foreach ($data as $one) { ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4><?= $one['name'] ?></h4>
                            <span><?= strtoupper($one['domain']) ?></span>
                            <p>
                                <?= $one['about_trainer'] ?>
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</section><!-- End Trainers Section -->