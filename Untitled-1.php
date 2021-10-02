<html>
<head>

</head>
<body>
    <div>
        <br>
        <h1>Form Submission</h1>
        <form action="" method='POST'>
            <h3> 
                
                Email:&nbsp  <input type="email" name="email"><br><br>
                Password: &nbsp <input type="text" name="password"> <br> <br>


            </h3>
       
        <input id="anchor" type="submit" name="submit">
          <!--   <a href="output.php">Collection</a> -->
        </form>
    </div> 
    <?php 
        $conn= new mysqli('localhost','root','');
        $select= $conn->select_db('info_sec');

        if(!$select){
            $conn->query("CREATE DATABASE info_sec");
            $conn->select_db('info_sec');

            $conn->query("CREATE TABLE user_info(
                id int(2) AUTO_INCREMENT,
                name varchar(24),
                password varchar(50),
               
                PRIMARY KEY (id)
          )");
          }
          

          $conn= new mysqli('localhost','root','','info_sec');

          if(isset($_POST['submit'])){
              $email= $_POST['email'];
              $password= $_POST['password'];
            


              $prepare= $conn->prepare("INSERT INTO user_info VALUES ('',?,?)");
              $prepare->bind_param('ss',$email,$password);
              $prepare->execute();

            // $sql = "INSERT INTO user_info  VALUES ('', 
            // '$email','$password')";

          }
    
    
    
    
    ?>

</body>


</html>