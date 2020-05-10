<?php
#Start session
session_start();
//

include('includes/db.php');
//

if(writeLog("logged out from {$IP}",$_SESSION['username'],"INFO"))
{
    $last_login_date = date('l j<\s\u\p>S</\s\u\p>, M Y (h:i:s A)');
    $last_login_ip = getUserIP();

    $sql = "UPDATE users SET last_login_date ='{$last_login_date}', last_login_ip='{$last_login_ip}' WHERE username='".$_SESSION['username']."' ";
    if(!query($sql))
    {
        die(mysql_error());
    }
    else
    {
        #Unset the variables stored in session
        unset($_SESSION['username']);
        unset($_SESSION['user_id']);
        unset($_SESSION['computerName']);
        unset($_SESSION['fullName']);
        header("location: ".URL."index.php");
    }

}
?>