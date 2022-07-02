<?php
require('header.php');
require('left_nav.php');
require('DB.php');

$course_id = $_GET['id'];
$course_detail = $db_object->get_one_course($course_id);



?>


    

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
        

        <!-- ========== table components start ========== -->
        <section class="table-components">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="title mb-30">
                                <h2>Tables</h2>
                            </div>
                        </div>
                        <!-- end col -->
                        
                        
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->

                <!-- ========== tables-wrapper start ========== -->
                <div class="tables-wrapper">
                    

                    <!-- <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="card-style mb-30">
                                <h6 class="mb-10">Table head options</h6>
                                <p class="text-sm mb-20">
                                    Use one of two modifier classes to make thead appear light
                                    or dark gray.
                                </p>
                                <div class="table-wrapper table-responsive">
                                    <table class="table striped-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>
                                                    <h6>First Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Last Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Username</h6>
                                                </th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#1</h6>
                                                </td>
                                                <td>
                                                    <p>Albert</p>
                                                </td>
                                                <td>
                                                    <p>Miles</p>
                                                </td>
                                                <td>
                                                    <p>@albert_miles</p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#2</h6>
                                                </td>
                                                <td>
                                                    <p>John</p>
                                                </td>
                                                <td>
                                                    <p>Doe</p>
                                                </td>
                                                <td>
                                                    <p>@john_doe</p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#3</h6>
                                                </td>
                                                <td>
                                                    <p>David</p>
                                                </td>
                                                <td>
                                                    <p>Smith</p>
                                                </td>
                                                <td>
                                                    <p>@davidsmith</p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#4</h6>
                                                </td>
                                                <td>
                                                    <p>Jameel</p>
                                                </td>
                                                <td>
                                                    <p>Kareem</p>
                                                </td>
                                                <td>
                                                    <p>@jkreem</p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#5</h6>
                                                </td>
                                                <td>
                                                    <p>Anna</p>
                                                </td>
                                                <td>
                                                    <p>Miles</p>
                                                </td>
                                                <td>
                                                    <p>@anna_miles</p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <h6 class="text-sm">#6</h6>
                                                </td>
                                                <td>
                                                    <p>Hafiz</p>
                                                </td>
                                                <td>
                                                    <p>Miles</p>
                                                </td>
                                                <td>
                                                    <p>@hafiz_miles</p>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div> -->
                    
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-style mb-30">
                                <h6 class="mb-10">Data Table</h6>
                                <p class="text-sm mb-20">
                                    For basic styling—light padding and only horizontal
                                    dividers—use the class table.
                                </p>
                                <div class="table-wrapper table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <h6>#</h6>
                                                </th>
                                                <th>
                                                    <h6>Name</h6>
                                                </th>
                                                <th>
                                                    <h6>Email</h6>
                                                </th>
                                                <th>
                                                    <h6>Project</h6>
                                                </th>
                                                <th>
                                                    <h6>Status</h6>
                                                </th>
                                                <th>
                                                    <h6>Action</h6>
                                                </th>
                                            </tr>
                                            <!-- end table row-->
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="employee-image">
                                                        <img src="assets/images/lead/lead-1.png" alt="" />
                                                    </div>
                                                </td>
                                                <td class="min-width">
                                                    <p>Esther Howard</p>
                                                </td>
                                                <td class="min-width">
                                                    <p><a href="#0">yourmail@gmail.com</a></p>
                                                </td>
                                                <td class="min-width">
                                                    <p>Admin Dashboard Design</p>
                                                </td>
                                                <td class="min-width">
                                                    <span class="status-btn active-btn">Active</span>
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <button class="text-danger">
                                                            <i class="lni lni-trash-can"></i>
                                                        </button>
                                                    </div>
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
                <!-- ========== tables-wrapper end ========== -->
            </div>
            
        </section>
        <!-- ========== table components end ========== -->

        
    </main>
   

  