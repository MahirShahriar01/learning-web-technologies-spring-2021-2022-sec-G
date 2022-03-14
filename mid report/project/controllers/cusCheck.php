<?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $gender = $_REQUEST['gender'];
    if($username != null && $password != null && $email != null)
    {
            $user = ['id' => $id, 'username' => $username, 'password' => $password, 'email' => $email, 'dob' => $dob, 'gender' => $gender, 'address' => $address];
            $_SESSION['user'] = $user;
            $user = "\r\n".$id."| ".$username."| ".$password."| ".$email."| ".$dob."| ".$gender."| ".$address;
            $file = fopen('../models/customer.txt','a');
            fwrite($file, $user);
            $src = $_FILES['myfilec']['tmp_name'];
            $des = '../assets/upload/'.$_FILES['myfilec']['name'];
            move_uploaded_file($src, $des);
            header('location: ../views/home.php');
    }
    else
    {
        echo "Something Wrong";
    }
}
?>