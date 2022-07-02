<?php
require('header.php');
require('left_nav.php');
require('DB.php');
$trainers = $db_object->get_trainer();

if(isset($_POST['submit'])){
  //save data from about pageY

 if ($db_object->save_course($_POST,$_FILES)){
    $message = "course data is pulished..";
   
 }else {
  $message = "Data failed to publish";
 }
 
}else{
    $message = null;
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
          <h6 class="text-success"><?php echo($message) ?></h6>
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>Course Page</h2>
              
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
                <label for="title">Course Name</label>
                <input type="course_name" placeholder="About Page Title" name="course_name"  required/>
              </div>

              <div class="input-style-1">
                <label for="course_image">Upload Image</label>
                <input type="file"  name="course_image" required/>
                <!-- <img width="100%" border-radius="5px" src="images/<?=$data['course_image']?> " alt="about-image"> -->
              </div>

              <div class="col-lg-12">
                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">

                  <div class="input-style-1">
                    <label for="description">Description</label>
                    <textarea placeholder="Message" rows="9" name="description" required>
                      
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
                  <input type="number" name="course_fee"  required/>
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="trainer_id">Choose trainer</label>
                  <select name="trainer_id" class="input-style" required>
                    <?php foreach($trainers as $one){ ?>
                       <option value="<?=$one['id']?> "> <?php echo $one['name'], ' - ' , $one['domain'] ?></option>

                        <?php } ?>

                  </select>
                  
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
    
    
    
    


            
                   
            
                            
