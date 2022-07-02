<?php
require('header.php');
require('left_nav.php');
require('DB.php');

$course_id = $_GET['id'];
$course_detail = $db_object->get_one_course($course_id);



?>

<!-- ========== table components start ========== -->
<section class="table-components my-5">
    <div class="container-fluid">


        <div class="tables-wrapper">


            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">Course Information</h6>

                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>
                                            <h6>Course</h6>
                                        </th>
                                        <th>
                                            <h6>Course Fee</h6>
                                        </th>
                                        <th>
                                            <h6>Trainer</h6>
                                        </th>
                                        <th>
                                            <h6>Image</h6>
                                        </th>
                                        <th>
                                            <h6>Description</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class="min-width">
                                            <p> <?= $course_detail['course_name'] ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $course_detail['course_fee'] ?></p>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $course_detail['name'] ?></p>
                                        </td>
                                        <td class="min-width">
                                            
                                            <div class="employee-image">
                                                <img src="images/<?=$course_detail['course_image']?>"  alt="course-img">
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p><?= $course_detail['description'] ?></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>

        </div>

    </div>

</section>
<!-- ========== table components end ========== -->