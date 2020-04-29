<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    $currentPassword = md5(clean($_POST['currentPassword']));
    $newPassword = md5(clean($_POST['newPassword']));
    $confirmPassword = md5(clean($_POST['confirmPassword']));
    $userId = clean($_POST['puser_id']);

    $sql = "SELECT * FROM users WHERE user_id = {$userId}";
    $query = query($sql);
    $result = $query->fetch_assoc();

    if ($currentPassword == $result['password']) {

        if ($newPassword == $confirmPassword) {

            $updateSql = "UPDATE users SET password = '$newPassword' WHERE user_id = {$userId}";
            $query = query($updateSql);
            if ($query) {
                $feed_back = array('status' => true, 'msg' => 'success');
            } else {
                $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
            }

        } else {
            $feed_back = array('status' => false, 'msg' => 'New password does not match with Conform password');

        }

    } else {
        $feed_back = array('status' => false, 'msg' => 'Current password is incorrect');

    }

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

} // /if $_POST
