<?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $tourPlace = $_REQUEST['Tour Place'];
    $hotel = $_REQUEST['hotel'];
    $package = $_REQUEST['package'];
    $person = $_REQUEST['person'];
    $cost= $_REQUEST['cost'];
    
    if($tourPlace != null && $hotel != null && $package != null)
    {
            $user = ['Tour Place' => $tourPlace, 'Hotel' => $hotel, 'package' => $package, 'person' => $person, 'cost' => $cost];
            $_SESSION['user'] = $user;
            $user = "\r\n".$tourPlace."| ".$hotel."| ".$package."| ".$person."| ".$cost."| ";
            $file = fopen('../models/package.txt','a');
            fwrite($file, $user);
            $src = $_FILES['myfilec']['tmp_name'];
            $des = '../assets/upload/'.$_FILES['myfilec']['name'];
            move_uploaded_file($src, $des);
            header('location: ../views/managersDesk.php');
    }
    else
    {
        echo "Something Wrong";
    }
}
?>