
<?php include 'script.php'; //CONFIRMATION PAGE
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 



require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "anshushri0207@gmail.com";
$mail->Password   = "oxmenkitgurpgczc";
$mail->SetFrom("anshushri0207@gmail.com", "Admin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        CONFIRMED BOOKINGS
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>B_id</th>
                    <th>f_id</th>
                    
                    <th>Date</th>
                    <th>StartTime</th>
                    <th>End Time</th>
                    <th>Facility Name</th>
                    <th>Event</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
            
            
            $conn = mysqli_connect("localhost", "root", "1234", "project");
    

            
            $show = "select distinct * from booked ";
            
            
            
         
            $query = mysqli_query($conn, $show);
            $nums=mysqli_num_rows($query);
        

            while($res=mysqli_fetch_assoc($query))
            {
            ?>
            
            <tr>
                <th><?php echo $res['bid'] ?></th>
                <th><?php echo $res['f_id'] ?></th>
                
                <th><?php echo $res['Date']?></th>
                <th><?php echo $res['Start_Time'] ?></th>
                <th><?php echo $res['End_time'] ?></th>
                <th><?php echo $res['Facility_name'] ?></th>
                <th><?php echo $res['Event_name'] ?></th>

               
            </tr>
            
            

           <?php 
            }
           ?>
               
            </tbody>
    
</div>
</body>
</html>

