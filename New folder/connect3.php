<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page</title>
</head>
  
<body>
    
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "1234", "project");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect." 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $f_id =  $_POST['f_id'];
        $fname = $_POST['fname'];
        $Lname =  $_POST['Lname'];
        $mobile_no = $_POST['mobile_no'];
        $Email_id = $_POST['Email_id'];
        $Password=$_POST['Password'];
        $School_name=$_POST['School_name'];
          
        // Performing insert query execution
        // here our table name is college
        $sql1 = "select *from register WHERE f_id = '$f_id' and Password = '$Password'";  
        $result = mysqli_query($conn, $sql1); 
        $count = mysqli_num_rows($result);

        $sql = "INSERT INTO register(f_id, 
        fname,Lname,mobile_no,Email_id,Password,School_name) VALUES ('$f_id', 
            '$fname','$Lname','$mobile_no','$Email_id', '$Password','$School_name')";
        
        if($count == 1){       
                  
            echo "<script>alert('Facility id or Password already exists!!!');
            window.location.href ='register1.php';
            </script>";  
        }  
        
        if(mysqli_query($conn, $sql))
        {
            
            echo "<script>alert('Successfully registered');
            window.location.href ='register1.php';
            </script>";
           
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
        
    
</body>
  
  
</html>