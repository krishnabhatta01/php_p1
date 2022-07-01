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
        $sql = `INSERT INTO about values(null,'$title','$description','$about_image','no_students','no_courses','no_trainers','no_events')`;

        $result= mysqli_query($this->connection,$sql);
        if($result == true){
            return true;
        }else{
            return false;
        }
    }


}

$db_object = new DB();


?>