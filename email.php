<?php
    $name = $_POST['name'];
    $from = $_POST['email'];
    $msg = "[Name: " . $_POST['name'] . "]<br/><br/>" . $_POST['msg'];
    
    if(isset($msg) && isset($from)){
        $to = 'davidleger95@me.com';
        $subject = 'WEBSITE CONTACT';
        
        $headers = "From: " . $from;
        
        mail($to, $subject, $msg, $headers);
        echo 1;
    }
    
?>