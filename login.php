<html>
<head>

</head>
<body>
    <div>
        <br>
        <h1>Login Form</h1>
        <form action="" method='POST'>
            <h3> 
                
                Email:&nbsp  <input type="email" name="email"><br><br>
                Password: &nbsp <input type="password" name="password"> <br> <br>
                

            </h3>
       
        <input id="anchor" type="submit" name="login">
          
        </form>
    </div> 
    <?php 
        $conn= new mysqli('localhost','root','');
        $select= $conn->select_db('info_sec');
        $result= $conn->query("SELECT * FROM user_info");

        session_start();

        if(isset($_POST['login'])){
            $username= $_POST['email'];
			$password=$_POST['password'];
            $password1= password_hash($password, PASSWORD_DEFAULT);
            $bago= $conn->query("SELECT * FROM user_info
                                 WHERE username='$username'");
            if(password_verify($password,$password1)){
			if($row=$bago->fetch_assoc()){
                
                    $_SESSION['username']=$row['username'];
                 header('Location: welcome.php');
                    }
            }else{
                header('Location: login.php');
            }
        }
        
        
        
      
    
    
    
    ?>

</body>


</html>