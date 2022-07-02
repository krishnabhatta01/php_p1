
<?php
    $course_id = $_GET['id'];
    
    require('DB.php');

    
     if($db_object->delete_course($course_id)){
            header("location:courses_list.php?msg=deleted");
        }else{
            header("location:courses_list.php?msg=notdeleted");
        }
        
    
    
?>