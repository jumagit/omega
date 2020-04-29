<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting products

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }

    $productName = clean($_POST['productName']);    
    $quantity = clean($_POST['quantity']);
    $rate =     clean($_POST['rate']);
    $brandName = clean($_POST['brandName']);
    $categoryName = clean($_POST['categoryName']);
    $productStatus = clean($_POST['productStatus']);

    $type = explode('.', $_FILES['productImage']['name']);
    $type = $type[count($type) - 1];
    $url = '../assets/images/stock/' . uniqid(rand()) . '.' . $type;
    if (in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
        if (is_uploaded_file($_FILES['productImage']['tmp_name'])) {
            if (move_uploaded_file($_FILES['productImage']['tmp_name'], $url)) {

                $sql = "INSERT INTO products (product_name, product_image, brand_id, categories_id, quantity, rate, active, status, created_by)
				VALUES ('$productName', '$url', '$brandName', '$categoryName', '$quantity', '$rate', '$productStatus', 1, '$created_by')";
                $query = query($sql);
                if ($query) {
                    $feed_back = array('status' => true, 'msg' => 'success');
                } else {
                    $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
                }

                $dataX = json_encode($feed_back);
                header('Content-Type: application/json');
                echo $dataX;

            } else {
                return false;
            } // /else
        } // if
    } // if in_array

    $connection->close();

}



if ($_REQUEST['t'] == 'delete') {
    $id = $_GET['id'];
    $query = query("DELETE FROM products WHERE product_id='{$id}'");
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
    $query = query("UPDATE  products  SET status = '1' WHERE brand_id='{$id}'");
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
    $query = query("UPDATE  products  SET status = '2' WHERE brand_id='{$id}'");
    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }
    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;
}
