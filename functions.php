<?php
    function createDB(){
        $conn->query("CREATE DATABASE info_sec");
        $conn->select_db('info_sec');

        $conn->query("CREATE TABLE user_info(
            id int(2) AUTO_INCREMENT,
            username varchar(24),
            user_password varchar(50),
           
            PRIMARY KEY (id)
      )");
    }

    function insertData(){
        $conn= new mysqli('localhost','root','','info_sec');

        if(isset($_POST['submit'])){
            $email= $_POST['email'];
            $password= $_POST['password1'];
            $password2= $_POST['password2'];

            //SIN #1: ENCRYPTION OF DATA. PASSWORD SHOULD BE ENCRYPTED BEFORE STORING IT IN THE DATABASE
            $password= password_hash($password, PASSWORD_DEFAULT);

          if($_POST['password1'] === $_POST['password2']){
            $prepare= $conn->prepare("INSERT INTO user_info VALUES ('',?,?)");
            $prepare->bind_param('ss',$email,$password);
            $prepare->execute();
            header('Location: login.php');

          }else if ($_POST['password1'] !== $_POST['password2']){
              echo 'Password do not match';
          }

        }
    
    }







?>