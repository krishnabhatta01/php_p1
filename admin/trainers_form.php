<?php
require('header.php');
require('left_nav.php');
require('DB.php');


if (isset($_POST['submit'])) {
    //save data from about pageY

    if ($db_object->save_trainers($_POST, $_FILES)) {
        $msg= "Trainer is added";
    } else {
        $msg = "Data failed to publish";
    }
}
?>





<section class="tab-components">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <h6 class="text-success"><?php $msg ?></h6>
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Trainers Page</h2>

                    </div>
                </div>
                <!-- end col -->


            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== form-elements-wrapper start ========== -->
        <div class="form-elements-wrapper">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">

                        <!-- input style start -->
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="input-style-1">
                                <label for="name">Trainer Name</label>
                                <input type="name" name="name" required />
                            </div>

                            <div class="input-style-1">
                                <label for="trainer_image">Upload Image</label>
                                <input type="file" name="trainer_image" required />
                                <!-- <img width="100%" border-radius="5px" src="images/<?= $data['course_image'] ?> " alt="about-image"> -->
                            </div>

                            <div class="col-lg-12">
                                <!-- ======= textarea style start ======= -->
                                <div class="card-style mb-30">

                                    <div class="input-style-1">
                                        <label for="description">Description</label>
                                        <textarea rows="9" name="about_trainer" required>

                                        </textarea>
                                    </div>
                                </div>

                                <!-- ======= textarea style end ======= -->
                            </div>
                        </div>
                        <!-- ========== form-elements-wrapper end ========== -->
                    </div>


                    <!-- no  of trainers -->
                    <div class="col-lg-6">
                        <div class="col-lg-10">
                            <div class="card-style">

                                <div class="input-style-1">
                                    <label for="course_fee">Course Fee</label>
                                    <input type="number" name="course_fee" required />
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="card-style">

                                <div class="input-style-1">
                                    <label for="domain">Domain</label>
                                    <input type="domain" name="domain" required placeholder="Trainer's Specialities" />
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <input type="submit" name="submit" class="btn btn-outline-primary my-2 " Publish />
                    </div>





                    <!-- end container -->
            </form>
</section>
<!-- ========== tab components end ========== -->