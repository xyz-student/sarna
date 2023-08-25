<?php include('include/header.php'); ?>

<div class="breadcrumbs_area commun_bread commun_bread_contact">
    <div class="container">   
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>         
</div>

<div class="contact_area">
    <div class="container">   
        <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="contact_message content">
                    <h3>contact us</h3>    
                    <p>Dear visitor, <br>
                    Please provide a few essential details, including all the fields marked *. then click the "SUBMIT ENQUIRY" button. You will receive an email confarmation of you ,message and we will contact you as soon as possible to respond to your enquiry.<br><br>
                    <b>Contact Person : Mr. Balwinder Singh Sarna</b></p>
                    <ul>
                         <?php 
                            $q="SELECT * FROM `about`";
                            $r=mysqli_query($conn,$q);
                            while($col=mysqli_fetch_assoc($r))
                              {
                            ?>
                        <li><i class="ion-location"></i>  <?php echo $col['address']; ?></li>
                        <li><a href="#"><i class="fa fa-phone" style="transform:rotate(90deg);"></i> <?php echo $col['phone']; ?></a></li>  
                        <li><a href="#"><i class="ion-ios-email"></i> <?php echo $col['email']; ?></a></li>
                    <?php } ?>
                    </ul>             
                </div> 
            </div>
            <div class="col-lg-6 col-md-12">
               <div class="contact_message form">
                    <h3>Get In Touch With Us</h3>   
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" placeholder="Enter Your Name *" type="text"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email" placeholder="Enter Your Email *" type="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="phone" placeholder="Enter Your Mobile No. *" type="text"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Your Address" name="address"  class="form-control2" >
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>
                                </div>
                            </div>
                        </div> 
                        <button type="submit" name="submit"> Submit</button>  
                        <p class="form-messege"></p>
                    </form> 
                       
                </div> 
            </div>
        </div>
    </div>    
</div>

<?php 
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$alternate=$_POST['alternate'];
$address=$_POST['address'];
$query=$_POST['message']; 
 //$course = $_POST['course'];        
    //  $to = 'nitinmukesh1982@hotmail.com';
     
     $to = 'futuredesignengg@gmail.com';
         $subject = "Enquiry From Justrack";
         
         $message = "Name:-$name <br> Email:-$email <br> Phone Number:-$phone <br> Alternate/Whatsapp No.:-$alternate <br> Address:-$address <br> Message:-$query";
         $header = "From:noreply@yusuf@b2benquiry.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
         $sql = mysqli_query($conn,"INSERT INTO enquires (`name`,`phone`,`email`,`alternate`,`address`,`message`)
          VALUES ('$name', '$phone', '$email','$alternate','$address','$query')");

         echo("<script>alert('Message Sent succesfully');window.location='index.php';</script>");
         }
         else {
            echo "Message could not be sent...";
         }
}
?>


<?php include('include/footer.php'); ?>