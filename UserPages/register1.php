
<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">



    
<style>
    body {
        background: #333;
    }

    #login {
        -webkit-perspective: 1000px;
        -moz-perspective: 1000px;
        perspective: 1000px;
        margin-top: 50px;
        margin-left: 30%;
    }

    .login {
        font-family: 'Josefin Sans', sans-serif;
        -webkit-transition: .3s;
        -moz-transition: .3s;
        transition: .3s;
        -webkit-transform: rotateY(40deg);
        -moz-transform: rotateY(40deg);
        transform: rotateY(40deg);
    }

    .login:hover {
        -webkit-transform: rotate(0);
        -moz-transform: rotate(0);
        transform: rotate(0);
    }



    .login .form-group {
        margin-bottom: 17px;
    }

    .login .form-control,
    .login .btn {
        border-radius: 0;
    }

    .login .btn {
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .input-group-addon {
        border-radius: 0;
        color: #fff;
        background: #f3aa0c;
        border: #f3aa0c;
    }

    .forgot {
        font-size: 16px;
    }

    .forgot a {
        color: #333;
    }

    .forgot a:hover {
        color: #5cb85c;
    }

    #inner-wrapper,
    #contact-us .contact-form,
    #contact-us .our-address {
        color: #1d1d1d;
        font-size: 19px;
        line-height: 1.7em;
        font-weight: 300;
        padding: 50px;
        background: #fff;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        margin-bottom: 100px;
    }

    .input-group-addon {
        border-radius: 0;
        border-top-right-radius: 0px;
        border-bottom-right-radius: 0px;
        color: #fff;
        background: #f3aa0c;
        border: #f3aa0c;
        border-right-color: rgb(243, 170, 12);
        border-right-style: none;
        border-right-width: medium;

    }

    html,
    body {
        background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;


    }

    <?php
include('Style.css');
?>
</style>

</head>

<body >

<?php
include('header.php');
?>
       

    <div class="col-md-4 col-md-offset-4" id="login" style="margin-top:150px;">
        <section id="inner-wrapper" class="login" style="background: rgba(84, 151, 251, 0.2);">
            <article>
                <div class="card-header" style="color: rgba(242, 160, 41, 0.88); font-size:larger; background:rgba(52, 143, 255, 0.21)">Register</div>
                <div class="card-body">
                    <form method="POST" action="">
                     
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus placeholder="User Name">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                                <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" placeholder="Email">
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                                <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password" placeholder="Password">

                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Conform Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </article>
        </section>
    </div>

    <?php
include('footer.php');
?>