<?php
include('header.php');
?>

<title>Shop</title>
<style>
  <?php include 'Style.css' ?>* {
    box-sizing: border-box;
  }

  /* Button used to open the contact form - fixed at the bottom of the page */
  .cardopen-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;


    width: 280px;
  }

  /* The popup form - hidden by default */
  .cardform-popup {
    display: none;


    border: 3px solid #f1f1f1;
    margin-left: 420px;
    margin-bottom: 60px;
  }

  /* Add styles to the form container */
  .cardform-container {
    width: 450px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .cardform-container input[type=text] {
    width: 100%;
    padding: 15px;

    border: none;
    background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .cardform-container input[type=text]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .cardform-container .cardsavebtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .cardform-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .cardform-container .cardsavebtn:hover,
  .cardopen-button:hover {
    opacity: 1;
  }
</style>


<?php


if (isset($_POST['dissub'])) {
  $id = $_POST["id"];
  $_SESSION['productid'] = $id;
  $size = $_POST["cat_title"];
  $_SESSION['size'] = $size;
  $quandity = $_POST["quandity"];
  $_SESSION['quandity'] = $quandity;


  $email = $_SESSION['username'];
  $sql12 = "SELECT * FROM `card` WHERE email='$email' ";
  $result12 = mysqli_query($con, $sql12);
  $row12 = mysqli_fetch_array($result12);
   $_SESSION['cardno']= $row12["cardnumber"];

 $_SESSION['expdate']=$row12["expdate"];
 $_SESSION['cardholdname ']=$row12["cardholdname"];
 $_SESSION['cvv']=$row12["cvv"];

}
?>


<div style="margin-top: 100px;">

</div>
<!-- <button class="cardopen-button" onclick="openForm()" style="margin-top: 100px;">Open Form</button>

<div class="cardform-popup" id="myForm"> -->







<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Ms.Lady">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="ms.mylady@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="chankanai North,chankanai ">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Jaffna">

            <div class="row">
              <div class="col-50">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Srilanka">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname"name="cardholdname" value="<?php echo $_SESSION['cardholdname '] ; ?>" placeholder="Ms.lady">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum"  name="cardnumber" value="<?php echo $_SESSION['cardno'] ; ?>" placeholder="1111-2222-3333-4444">
            <label for="expdate">Exp Date</label>
            <input type="text" id="expdate" name="expdate" value="<?php echo $_SESSION['expdate']; ?>" placeholder="mm/yy">
            <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" value="<?php echo $_SESSION['cvv']; ?>" placeholder="352">
            
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" name="cardsave" class="btn">
      </form>
    </div>
  </div>
  
</div>



<!-- </div> -->
<!-- 
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> -->

</body>

</html>


<?php
require_once "../config.php";

//creating connection to database


//check whether submit button is pressed or not
if ((isset($_POST['cardsave']))) {
  $email = $_SESSION['username'];
  //fetching and storing the form data in variables
  $cardnumber = $con->real_escape_string($_POST['cardnumber']);
  $expdate = $con->real_escape_string($_POST['expdate']);
  
  $cardholdname = $con->real_escape_string($_POST['cardholdname']);
  $cvv= $con->real_escape_string($_POST['cvv']);

  //query to insert the variable data into the database
  $sql11 = "INSERT INTO `card` (email,cardnumber,expdate,cardholdname,cvv) VALUES ('$email','$cardnumber','$expdate','$cardholdname','$cvv')";
  $result11 = mysqli_query($con, $sql11);



  $sql13 = "UPDATE `card` SET cardnumber='$cardnumber',expdate='$expdate', cardholdname='$cardholdname', cvv='$cvv' WHERE email='$email'";
  $result13 = mysqli_query($con, $sql13);

  $id = $_SESSION['productid'];
  $size = $_SESSION['size'];
  $quandity = $_SESSION['quandity'];
  $sql = "SELECT * FROM products WHERE product_id= $id  ";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);



  if ($size == 'S') {
    $min = $row["small"];
    $min = $min - $quandity;
    $sql = "UPDATE products SET  small='$min'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  } else if ($size == 'L') {
    $lg = $row["large"];
    $lg = $lg - $quandity;
    $sql = "UPDATE products SET  `large`='$lg'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  } else {
    $md = $row["medium"];
    $md = $md - $quandity;
    $sql = "UPDATE products SET  medium='$md'WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  }

  $sql1 = "SELECT * FROM products WHERE product_id= $id  ";
  $result1 = mysqli_query($con, $sql1);
  $row1 = mysqli_fetch_array($result1);

  if ($row1["small"] <= 0) {
    $sql = "UPDATE products SET  small='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  }

  if ($row1["large"] <= 0) {
    $sql = "UPDATE products SET  large='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  }

  if ($row1["medium"] <= 0) {
    $sql = "UPDATE products SET  medium='0' WHERE product_id='$id'";
    $result = mysqli_query($con, $sql);
  }
  
  
  

  
  ?>





<script type="text/javascript">location.href = 'shop.php';</script>


  //Execute the query and returning a message
  
<?php }
?>
<div style="margin-top: 30px;">
<?php
include('footer.php'); // for footer
?>
</div>