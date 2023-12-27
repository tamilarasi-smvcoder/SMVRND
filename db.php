<?php
session_start();
$connection = mysqli_connect("localhost:4306","root","","log_db");

if(isset($_POST['add']))
{
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    $errors = array();

    if(empty($first_name)){
        $errors['f'] = "First Name Requires";
    }
    if(empty($second_name)){
        $errors['s'] = "Second Name Requires";
    }
    if(empty($email)){
        $errors['e'] = "Email Requires";
    }
    if(empty($password)){
        $errors['p'] = "Password Requires";
    }
    if(empty($re_password)){
        $errors['r'] = "Confirm Password Requires";
    }

    $check = "SELECT * from user_tbl where email='$email'";
    $result = mysqli_query($connection,$check);
    $present=mysqli_num_rows($result);
    if($present>0 && count($errors)==0)
    {
        $_SESSION['status'] = "Account Already created using this mail";
        header('location: index.php');
    }
    else
    {
        $insert_query = "INSERT INTO user_tbl(`first_name`,`second_name`,`email`,`password`,`re_password`)VALUES('$first_name','$second_name','$email','$password','$re_password')";
        if($connection->query($insert_query))
        {
            $_SESSION['status'] = "User Added";
            header('location: index.php');
        }
        else
        {
            $_SESSION['status'] = "User Not Added";
            header('location: index.php');
        }
    }
    /*if($present>0)
    {
        $_SESSION['email_alert'] = '1';
    }else
    {
        $insert_query = "INSERT INTO user_tbl(`first_name`,`second_name`,`email`,`password`,`re_password`)VALUES('$first_name','$second_name','$email','$password','$re_password')";
        $insert_query_run = mysqli_query($connection,$insert_query);
        
        if($insert_query_run)
        {
            $_SESSION['status'] = "Data Insert Successfully";
            header('location: index.php');
        }
        else
        {
            $_SESSION['status'] = "Faild Data Insertion";
            header('location: index.php');
        }
    }*/
    
}
?>