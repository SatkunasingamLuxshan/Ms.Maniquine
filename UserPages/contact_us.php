<?php
include('header.php'); // used comman header
?>
   <title>Contact Us</title>
<?php
/*  require_once "config.php";*/

?>
<!doctype html>
<html>

<head>
    <style>
        <?php include 'Style.css' ?>
    </style>
    <title>Contact Us</title>
</head>






<!--Contact Us body part start-->
<div style="margin-top: 100px;">
    <h1 style="padding-left: 150px;">Contact Us</h1>
    <section>

        <div class="content">

            <p>We value your thoughts, suggestions and comments regarding any aspect of the Ms.Lady experience.
                Please contact us by completing the form below. <br>You will receive a reply from us shortly.</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="part1">
                    <div class="box">
                        <div><img src="../img/location.png" height="25px" width="25px" class="icon"></div>
                        <div class="text">
                            <h3>Address</h3>
                            <email> 
                                Ampi road,
                                Chankanai.
                                Jaffna.
                                </email>
                        </div>
                    </div>
                    <div class="box" style="margin-top: 30px;">
                        <div><img src="../img/call.png" height="40px" width="40px" class="icon"></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <tel>075 796 0973</tel>
                        </div>
                    </div>
                </div>
                <div class="part2" >
                    <div class="box">
                        <div> <img src="../img/mail.jpg" height="40px" width="40px" class="icon"></div>
                        <div class="text">
                            <h3>Email</h3>
                            <email>mslady@gmail.com</email>
                        </div>
                    </div>
                    <div class="box" style="margin-top: 30px;">
                        <div> <img src="../img/fb1.png" height="40px" width="40px" class="icon"></div>
                        <div class="text">
                            <h3>Facebook</h3>
                            <meta>Ms.Lady</meta>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 
                    <h2>Let's Connect!!</h2>
                    </br>
                    <div class="inputbox">
                    <input class="form-control" type="text"name="cfullname" required="required" placeholder="First Name" >
                    </div>
                    <div class="inputbox">
                    <input class="form-control" type="text"name="cemail" required="required" placeholder="First Name" > 
                    </div>
                    <div class="inputbox">
                        <textarea required="required" name="cmessage"  class="form-control" placeholder="Type your message..."  cols="25" rows="3" ></textarea>
                        
                    </div>
                    
                    <div class="inputbox">
                        <input type="Submit" name="feed" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<!--Contact Us body part end-->

<!--Map start-->
<div class="map" style="margin-top: 80px;">
    <div class="gmap_canvas">
        <iframe width="100%" height="220" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=yarlit&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed "frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>

        <br>
    </div>
</div>
<!--Map end-->

<?php
include('footer.php'); // for comman footer
?>


<?php
/*
// Escape user inputs for security
$cfullname = mysqli_real_escape_string($link, $_POST['cfullname']);
$cemail = mysqli_real_escape_string($link, $_POST['cemail']);
$cmessage = mysqli_real_escape_string($link, $_POST['cmessage']);
 
// Attempt insert query execution
$sql = "INSERT INTO feedback (feedback_id,fullname,email, review) VALUES('','$cfullname','$cemail','$cmessage')";
         
if(mysqli_query($link, $sql)){
    echo '<script>alert(" Thank You For your Valuable Feedback!");</script>';

} 
    
*/


  //creating connection to database
$con=mysqli_connect("localhost","root","","maniquine") ;

  //check whether submit button is pressed or not
if((isset($_POST['feed'])))
{
  //fetching and storing the form data in variables
$cfullname = $con->real_escape_string($_POST['cfullname']);
$cemail = $con->real_escape_string($_POST['cemail']);
$cmessage = $con->real_escape_string($_POST['cmessage']);

  //query to insert the variable data into the database
$sql="INSERT INTO feedback (fullname, email, review) VALUES ('$cfullname','$cemail','$cmessage')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
echo '<script>alert(" Thank You For your Valuable Feedback!");</script>';

}


?>