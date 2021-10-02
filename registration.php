<html>
<head>

</head>
<body>
    <div>
        <br>
        <h1>Registration Form</h1>
        <form action="" method='POST'>
            <h3> 
                
                Email:&nbsp  <input type="email" name="email"><br><br>
                Password: &nbsp <input type="password" name="password1"> <br> <br>
                Confirm Password: &nbsp <input type="password" name="password2"> <br> <br>

            </h3>
       
        <input id="anchor" type="submit" name="submit">
        </form>
    </div> 
    <?php 
        //LIST OF SINS THAT ARE ADDRESSED HERE 
        //1. ENCRYPTION OF DATA
        //2. USE FUNCTION FROM ANOTHER FILE
        //3. IN STORING DATA IN LOCAL STORAGE DONT STORE ALL DATA LIKE FOR EXAMPLE IN REGISTRATION STORE ONLY THE USERNAME.
        require_once('functions.php');
        $conn= new mysqli('localhost','root','');
        $select= $conn->select_db('info_sec');

        if(!$select){
            //2. USE FUNCTIONS DONT HARD CODE IT
           createDB();
        }
          
        insertData();
    
    
    
    
    ?>


</body>


</html>