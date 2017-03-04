<?php
    
//echo "1";
    //Declare variables
    if(isset($_POST['submit'])){
        echo "2";
        $name = $_POST['name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        if(!$_POST['name']){
            $errName="Please enter your name";
        }
        
        if(!$_POST['company']){
            $errCompany="Please enter your company name";
        }
        
        if(!$_POST['email']){
            $errEmail="Please enter your email address";
        }
        
        if(!$_POST['message']){
            $errMessage="Please enter a message";
        }
       echo "3"; 
    }

echo "4";
?>