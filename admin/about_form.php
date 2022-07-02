<?php
require('header.php');
require('left_nav.php');
require('DB.php');

if(isset($_POST['submit'])){
  //save data from about pageY

 if ($db_object->save($_POST)){
  $message = "About page is pulished..";
  $data = $db_object->check_about_table();
      extract($data);
 }
 else {
  $message = "Data failed to publish";
 }
 
}else{
  if($db_object->check_about_table() == false){ //if true (record found in db)

    //initialize the variable
    $data['title']='';
    $data['description']='';
    $data['about_image']='';
    $data['no_students']='';
    $data['no_courses']='';
    $data['no_trainers']='';
    $data['no_events']='';

  }else{
      //fetching data from db
      $data = $db_object->check_about_table();
      extract($data);
  }
}
?>



  <!-- ========== tab components start ========== -->
  
  <section class="tab-components">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
        <div class="row align-items-center">
          <h6><?php $message ?></h6>
          <div class="col-md-6">
            <div class="title mb-30">
              <h2>About Page</h2>
              
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
                <label for="title">Page Title</label>
                <input type="text" placeholder="About Page Title" name="title" value="<?php echo($data)['title'] ?>" required/>
              </div>

              <div class="input-style-1">
                <label for="about_image">Upload Image</label>
                <input type="file"  name="about_image" required/>
                <img width="100%" border-radius="5px" src="images/<?=$data['about_image']?> " alt="about-image">
              </div>

              <div class="col-lg-12">
                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">

                  <div class="input-style-1">
                    <label for="description">Description</label>
                    <textarea placeholder="Message" rows="9" name="description" required>
                      <?=$data['description']?>
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
                  <label for="no_trainers">No. of Trainers</label>
                  <input type="number" name="no_trainers" value="<?=$data['no_trainers']?>" required/>
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_students">No. of Students</label>
                  <input type="number" name="no_students" value="<?=$data['no_students']?>" required />
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_courses">No. of Courses</label>
                  <input type="number" name="no_courses" value="<?=$data['no_courses']?>" required/>
                </div>
                
              </div>
            </div>
            <div class="col-lg-10">
              <div class="card-style">
                
                <div class="input-style-1">
                  <label for="no_events">No. of Events</label>
                  <input type="number" name="no_events" value="<?=$data['no_events']?>" required/>
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
    
      
    
    
    
    


            
                   
            
                            
