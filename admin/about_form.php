<?php
require('left_nav.php');
require('header.php');
require('DB.php');

if(isset($_POST['submit'])){
  //save data from about pageY

 if ($db_object->save($_POST)){
  $message = "About page is pulished..";
 }
 else {
  $message = "Data failed to publish";
 }
 
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/fullcalendar.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- ========== tab components start ========== -->
  
  <section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>About Page</h2>
              <h1><?php $message ?></h1>
            </div>
          </div>
          <!-- end col -->


        </div>
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== form-elements-wrapper start ========== -->
      <div class="form-elements-wrapper">
        <form action="" method="post" enctype="mutipart/form-data"> 
        <div class="row">
          <div class="col-lg-6">
            
            <!-- input style start -->
            <div class="card-style mb-30">
              <h6 class="mb-25">Input Fields</h6>
              <div class="input-style-1">
                <label for="title">Page Title</label>
                <input type="text" placeholder="About Page Title" name="title" />
              </div>

              <div class="input-style-1">
                <label for="about_image">Upload Image</label>
                <input type="file"  name="about_image" />
              </div>

              <div class="col-lg-12">
                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">

                  <div class="input-style-1">
                    <label for="description">Description</label>
                    <textarea placeholder="Message" rows="9" name="description"></textarea>
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
                  <label for="no_trainers">No. of Trainers</label>
                  <input type="number" name="no_trainers" />
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_students">No. of Students</label>
                  <input type="number" name="no_students" />
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_courses">No. of Courses</label>
                  <input type="number" name="no_courses" />
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_events">No. of Events</label>
                  <input type="number" name="no_events" />
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <input 
                type="submit"
                name="submit"
                class="btn btn-outline-primary my-2 "
                Publish/>
              </div>
    
                
    
                  
                
              <!-- end container -->
            </form>
      </section>
      <!-- ========== tab components end ========== -->
    
      <!-- ========= All Javascript files linkup ======== -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/Chart.min.js"></script>
      <script src="assets/js/dynamic-pie-chart.js"></script>
      <script src="assets/js/moment.min.js"></script>
      <script src="assets/js/fullcalendar.js"></script>
      <script src="assets/js/jvectormap.min.js"></script>
      <script src="assets/js/world-merc.js"></script>
      <script src="assets/js/polyfill.js"></script>
      <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>
    
    
    
    


            
                   
            
                            
