<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }



    $sname = clean($_POST['sname']);
    $lname = clean($_POST['lname']); 
    $gender = clean($_POST['gender']);
    $role = clean($_POST['role']);    
    $username = clean($_POST['username']);    
    $mobile = clean($_POST['mobile']);
    $email = clean($_POST['email']);
    $password = generatePassword();
    $newpass =  md5($password);



     $sql_select = query("SELECT email,sname, oname FROM users WHERE username = '$username' OR email = '".$email."'  ") or die(mysqli_error($connection));


    $count = mysqli_num_rows($sql_select);


    if($count == 0) {

    $sql = "INSERT INTO users (sname, fname, oname, username, gender, email, mobile, password, role, accountType, account_status, pass_update,  created_by) 
    VALUES ( '$sname', '$lname', '$lname', '$username', '$gender', '$email', '$mobile', '$newpass', '$role', '0', '1', '0', '$created_by');";

    $query = query($sql);

      if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

}else{

   $feed_back = array('status' => false , 'msg'=>  "User with ".strtoupper($email)."  already present in the table");

 // $feed_back = array('status' => false, 'msg' => $fullName. "Already Exists in the system");

}











    //email

  

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

}

if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM users WHERE user_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}


if ($_REQUEST['t'] == 'admin') {
    $id = $_GET['id'];
    $query = query("UPDATE  users  SET role = '1' WHERE user_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}



if ($_REQUEST['t'] == 'notadmin') {
    $id = $_GET['id'];
    $query = query("UPDATE  users  SET role = '2' WHERE user_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}


if ($_REQUEST['t'] == 'deactivateAccount') {
    $id = $_GET['id'];
    $query = query("UPDATE  users  SET account_status = '0' WHERE user_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}

