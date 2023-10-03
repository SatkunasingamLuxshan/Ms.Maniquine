<?php
// Start the session
session_start();
?>

<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
	$cpassword = md5($_POST['confirmpassword']);
    $usertype = $_POST['usertype'];
    

    $email_query = "SELECT * FROM users WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: login.php');  
    }
    else
    {   
        if($password === $cpassword)
        {
            $query = "INSERT INTO users (username,email,`password`,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: login.php');  
        }
    }

}
?>

<?php
include('security.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = md5($_POST['passwordd']);


    $query = "SELECT * FROM users WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: ../AdminProduct/createitem.php');
    }
    else if($usertypes['usertype'] == "user")
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
    }
    print_r($_SESSION);
}