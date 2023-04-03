<?php

if(isset($_POST['name'])){
    $userName = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];


    if(!empty($userName) && !empty($email) && !empty($subject) && !empty($msg)){
        $notification = "Data Stored Successfully";
        header("Location:contact.php?notification= ** Message Sent Sucessfully!! ");
    }else{
        echo "Please fill up the data";
    }

}


?>