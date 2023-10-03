<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
    <?php include '../AdminStyle.css' ?>

    .fo {
        overflow-x: hidden;
    }

    .footermove {
        position: relative;
        animation: mymove8 18s infinite;
        animation-delay: 0s;
        animation-direction: alternate;
    }

    @keyframes mymove8 {
        from {
            left: 0px;
        }

        to {
            left: 1270px;
        }
    }

    form {
        font-family: 'Playfair Display', serif;
    }

</style>

<?php include '../style2.css' ?>

<body class="fo">
    <?php
include '../config.php' 
    ?>
<div style="width:100%">


    <nav class="navbar navbar-expand-lg navbar-light fo  " style="background: rgb(16, 16, 37);	font-family: montserrat; width:100%  " >
    <div style="width:2%"></div>
        <a class="navbar-brand" href="../UserPages/index.php" style="color: white; width:88%">Ms.Lady</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
        <ul class="navbar-nav mr-auto" >
                <li class="nav-item active" >
                    <a class="nav-link" href="../UserPages/logout.php" style="color: white;"><i class="fas fa-sign-out-alt"></i>LOG OUT <span class="sr-only">(current)</span></a>
                </li>
               
            </ul>                   
        </div>
    </nav>
    </div>
    <div>
        <div class="row">
            <div class="col-3">

                <div class="lefta" >
                    <div>
                        <!--Div for left bar nav-->
                        <ul class="leftnav ">
                            <!--Div for navigation list-->
                            <li><a href="dashboard">Dashboard</a></li>
                            <li><a href="userdetails.php">Users</a></li>
                            <li><a href="createitem.php">Products</a></li> <!-- changed this link to createitem.php which is used to create new products  -->
                         
                            <li><a href="Admin_Review.php">Reviews</a></li>
                            <li><a href="Admin_Orders.php">Orders</a></li>
                      
                        
                       
                            
                        </ul>
                    </div>
                </div>

                
            </div>