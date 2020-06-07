<?php


include "check_if_logged_in.php";

require "../includes/db.php";
header('Content-Type: application/json');


$sql = "SELECT DAY(created_at) as created_at, grand_total FROM orders WHERE  DATE(order_date) BETWEEN '2020-05-1' AND '2020-06-12' GROUP BY order_id LIMIT 12";

//run sql query and store into variable
$result = query($sql);
$data = array();

foreach ($result as $row) {
 $data[] = $row;
}

//free memory and close db connection
$result->close();
$connection->close();

// IMPORTANT, output to json
echo json_encode($data);
















?>