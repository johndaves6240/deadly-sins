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

            $result= $conn->query("SELECT * FROM user_info
                                 WHERE username='$username' 
                                  AND user_password='$password'");
            if(mysqli_num_rows($result) > 0 ){ 
                                      echo 'true';
            }
        }
        
        
      
    
    
    
    ?>

</body>


</html>