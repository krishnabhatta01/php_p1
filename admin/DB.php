<?php

class DB{

    private $username;
    private $password;
    private $databasename;
    private $server;
    private $connection;


    
    function __construct(){

        $this->username ='root';
        $this->password = '';
        $this->databasename ='coding_master';
        $this->server ='localhost';

    }

    function connect (){
        $this->connection = mysqli_connect($this->server,$this->username,$this->password,$this->databasename);
    }

    //save data in mysql databse

    function save($user_data){
        $this->connect();
        extract($user_data);
        $fn = $_FILES['about_image']['name'];
        $ftemp =$_FILES['about_image']['tmp_name'];


            if($this->check_about_table()==false){//empty table
                //create new record/save
                $sql = "INSERT INTO about VALUES(null, '$title', '$description', '$fn', '$no_students', 
                '$no_courses', '$no_trainers', '$no_events')";
                 $result = mysqli_query($this->connection, $sql);
                 if($result == true){
           
                    if($fn != '') move_uploaded_file($ftemp, "images/$fn");
                         return true;
                    }else{
                        return false;
                    }
            }else{
                //update
                $sql = "UPDATE about SET title='$title', description='$description', about_image='$fn', no_students='$no_students',no_courses='$no_courses', no_trainers='$no_trainers',no_events='$no_events' WHERE true";
                $result = mysqli_query($this->connection,$sql);
                if($result== true){
                    if($fn != '') move_uploaded_file($ftemp, "images/$fn");
                    return true;
                }else{
                    return false;
                }
            }
        
    }

    function check_about_table(){
        $this->connect();
        $sql = "SELECT * FROM about";
        $result = mysqli_query($this->connection,$sql);
        $number_records = mysqli_num_rows($result);


        if($number_records == 0){
            return false;
        }else{
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }


}//end of class

$db_object = new DB();


?>