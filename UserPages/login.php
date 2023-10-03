<!doctype html>
<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <title>Login</title>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function(){
          $('.tab a').on('click', function (e) {
          e.preventDefault();
           
          $(this).parent().addClass('active');
          $(this).parent().siblings().removeClass('active');
           
          var href = $(this).attr('href');
          $('.forms > form').hide();
          $(href).fadeIn(500);
        });
    });
    </script>
</head>

<body>
    <div class="body">
        <div class="top_page_nav">
            <!--Main div for Header-->
            <div class="top_page_nav_left">
                <!--Left side header part-->
                <a href="index.php">Ms.lady</a>
            </div>
            <div style="margin-left: 250px;" >
                <!--Right side header part-->
                <div class="main">
                    <!--Div for navigation-->
                    <ul class="mainnav">
                        <!--Div for navigation list-->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="our_services.php">Our Services</a></li>
                        <li><a href="our_work.php">Our Work</a></li>
                        <li><a href="contact_us.php">Contact Us</a></li>
                        <li><a href="about_us.php">About Us</a></li>
                        <li style="padding-left: 250px;"><input type="image" src="../img/account1.png" name="account" width="25"
                                height="25" alt="account"></li>
                        <li><input type="image" src="../img/cart.png" name="cart" width="25" height="25" alt="cart"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!--login start-->   
<div class="forms"> 
    <ul class="tab-group">
        <li class="tab active" ><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
    
    <form action="login1.php" id="login" method="POST">
          <h1>Login</h1>
          <div class="input-field">
            <input type="email" name="emaill"  placeholder="Enter Email Address...">
            <input type="password" name="passwordd" placeholder="Password">
        <button type="submit" name="login_btn" class="btn btn-secondary"  style="display: block; width:200px; margin-left:120px;";
        margin: 0 auto;" > Login </button> 
        <p class="text-p"> <a href="#">Forgot password?</a> </p>
    </div>
    </form>
    
    <form action="login1.php" id="signup" method="POST">
          <h1>Sign Up</h1>
          <div class="input-field">
            <label for="username"> Username </label>
            <input type="text" name="username" id="username" placeholder="Enter Username" required/>
       
            <label>Email</label>
            <input type="email" name="email"  placeholder="Enter Email"required="email"/>
            
            <label for="password">Password</label>
           
             <input type="password" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 

            <label for="cmp">Confirm Password</label>
        
          <input type="password" id="cmp" name="confirmpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 

            <input type="hidden" name="usertype" value="user">

        <button type="submit" name="registerbtn" class="btn btn-secondary"style="display: block; width:200px; margin-left:115px;";
        margin: 0 auto;" >Register</button>
        </div>
      </form>
</div>

<!--login end--> 
</body>

<?php
include('footer.php'); // for comman footer

?>

</html>
