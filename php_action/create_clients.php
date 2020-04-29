<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }

    $fullName = clean($_POST['fullName']);
    $username = clean($_POST['username']);
    $location = clean($_POST['location']);
    $mobile = clean($_POST['mobile']);
    $email = clean($_POST['email']);
    $password = generatePassword();
    $newpass =  md5($password);

    $sql = "INSERT INTO clients (fullName,email,mobile,location,username,password,cpassword,created_by)
     VALUES ('$fullName', '$email', '$mobile', '$location', '$username', '$newpass','$password', '$created_by')";

    $query = query($sql);

    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

}

if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM clients WHERE client_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}


if ($_REQUEST['t'] == 'available') {
    $id = $_GET['id'];
    $query = query("UPDATE  brands  SET brand_status = '1' WHERE brand_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}



if ($_REQUEST['t'] == 'notavailable') {
    $id = $_GET['id'];
    $query = query("UPDATE  brands  SET brand_status = '0' WHERE brand_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}