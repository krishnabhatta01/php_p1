<?php
require('header.php');
require('left_nav.php');
require('DB.php');


$courses = $db_object->get_courses();
?>







<!-- ========== table components start ========== -->
<section class="table-components">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Course List</h2>

                    </div>
                </div>
                <!-- end col -->
                <?php
                if (isset($_GET['msg']) and $_GET['msg'] == 'deleted') {
                    echo '<div class="alert alert-success">The record is deleted </div>';
                } elseif (($_GET['msg']) and $_GET['msg'] == 'notdeleted') {
                    echo '<div class="alert alert-danger">The record is not deleted </div>';
                }
                ?>
                <?php
                if (isset($_GET['msg']) and $_GET['msg'] == 'updated') {
                    echo '<div class="alert alert-success">The record is Updated </div>';
                } elseif(($_GET['msg']) and $_GET['msg']=='Notupdated') {
                    echo '<div class="alert alert-danger">The record is not Updated </div>';
                }
                ?>

            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- ========== tables-wrapper start ========== -->
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">

                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>
                                            <h6>Trainer</h6>
                                        </th>
                                        <th>
                                            <h6>Course Name</h6>
                                        </th>
                                        <th>
                                            <h6>Course Fee</h6>
                                        </th>
                                        <th>
                                            <h6>options</h6>
                                        </th>
                                    </tr>
                                    <!-- end table row-->
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($courses as $one) { ?>

                                        <tr>

                                            <td class="min-width">
                                                <?=
                                                $one['name'];
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['course_name']
                                                ?>
                                            </td>
                                            <td class="min-width">
                                                <?=
                                                $one['course_fee']
                                                ?>
                                            </td>
                                            <td>
                                                <div class="action">
                                                    <a href=" #" onclick="deleteCourse(<?= $one['id'] ?>)">
                                                        <button class="text-danger">
                                                            <i class="lni lni-trash-can"></i>
                                                        </button>
                                                    </a>
                                                    <a href="view.php?id=<?= $one['id'] ?>">
                                                        <button class="text-danger">
                                                            <i class="lni lni-mobile"></i>
                                                        </button>
                                                    </a>
                                                    <a href="edit.php?id=<?= $one['id'] ?>">
                                                        <button class="text-danger">
                                                            <i class="lni lni-pencil-alt"></i>
                                                        </button>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    <!-- end table row -->

                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- ========== tables-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
<!-- ========== table components end ========== -->

<script>
    function deleteCourse(id) {
        if (confirm('Want to delete the course?')) {
            document.location = 'delete.php?id=' + id;
        } else {
            return false;
        }
    }
</script>