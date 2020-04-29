<?php

include "db.php";

function get_user_info($username)
{
    $sql = "SELECT sname, fname, email FROM users WHERE account_status=1 AND username='$username'";
    $result = query($sql);
    $data = array();
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }
    return $data;
}

//fetch user function
function fetch_users()
{

    $sql = "SELECT sname,fname, email,mobile,gender,account_status, created_by, created_on FROM users ";
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $sname = $trailRow['sname'];
            $fname = $trailRow['fname'];
            $fname = $trailRow['fname'];
            $created_by = $trailRow['created_by'];
            $created_on = $trailRow['created_on'];
            $email = $trailRow['email'];
            $mobile = $trailRow['mobile'];
            $account_status = $trailRow['account_status'];
            $created_on = date_format(date_create($trailRow['created_on']), ' l jS F Y');

            if ($account_status == 1) {

                $accountStatus = "Active";

            } else {

                $accountStatus = "Inactive";
            }

            $output .= "<tr>
               <td>{$count}</td>
               <td>{$sname} {$fname}</td>
               <td>{$email}</td>
               <td>{$mobile}</td>
               <td>{$accountStatus}</td>
               <td>{$created_by}</td>
               <td>{$created_on}</td>

               </tr>";

        }

    }

    return $output;

}

//fetch log function

function fetch_logs()
{

    $sql = "SELECT * FROM system_access_logs ORDER BY id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $user = $trailRow['username'];
            $activityTime = $trailRow['activity_time'];
            $log_type = $trailRow['log_type'];
            $activity = $trailRow['activity'];

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$user}</td>
           <td>{$activity}</td>
           <td>{$activityTime}</td>
           <td>{$log_type}</td>

           </tr>";

        }

    }

    return $output;
}

function fetch_brands()
{

    $sql = "SELECT * FROM brands ORDER BY brand_id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $brand_id = $trailRow['brand_id'];
            $brand_name = $trailRow['brand_name'];
            $brandStatus = $trailRow['brand_status'];
            if($brandStatus == 1){
                $brandStatus = "Available";
            }else{
                $brandStatus = "Unavailable";
            }

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$brand_name}</td>
           <td>{$brandStatus}</td>
           <td><a onclick='makeAvailable($brand_id)' class='text-info'><i class='fa fa-th'></i> Available  </a></td>
           <td><a onclick='notAvailable($brand_id)' class='text-success'><i class='fa fa-list'></i> Not Available  </a></td>
           <td><a href='edit_brands.php?edit={$brand_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteBrand($brand_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    return $output;
}

//fetch clients
function fetch_clients()
{

    $sql = "SELECT * FROM clients ORDER BY client_id DESC";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $client_id = $trailRow['client_id'];
            $fullName = $trailRow['fullName'];
            $email = $trailRow['email'];
            $username = $trailRow['username'];
            $mobile = $trailRow['mobile'];
            $location = $trailRow['location'];
           

            $output .= "<tr>
           <td>{$count}</td>
           <td>{$fullName}</td>
           <td>{$email}</td>  
           <td>{$username}</td> 
           <td>{$mobile}</td>       
           <td>{$location}</td>
           <td><a href='edit_clients.php?edit={$client_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteClient($client_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    return $output;
}


//fetch products 


function fetch_products()
{

    $sql = "SELECT products.product_id, products.product_name, products.product_image, products.brand_id,
    products.categories_id, products.quantity, products.rate, products.active, products.status, 
    brands.brand_name, categories.categories_name FROM products 
   INNER JOIN brands ON products.brand_id = brands.brand_id 
   INNER JOIN categories ON products.categories_id = categories.categories_id  
   WHERE  products.quantity>0";

    $result = query($sql);

    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $product_id = $trailRow[0];
           // $product_image = $trailRow[2];
            $product_image  = substr($trailRow[2], 3);
            $product_brand = $trailRow[10];
            $product_category = $trailRow[9];
            $product_name = $trailRow[1];          
            $quantity = $trailRow[6];
            $status  =  $trailRow[8];

            if ($status == 1) {
                $status = "Available";
            }else{
                $status = "Not Available"; 

            }
           
           

            $output .= "<tr>
           <td>{$count}</td>
           <td><img src='{$product_image}' width='50' height='50' alt='Product Image'></td>
           <td>{$product_name}</td>  
           <td>{$quantity}</td> 
           <td>{$product_brand}</td>       
           <td>{$product_category}</td>
           <td>{$status}</td>
           <td><a onclick='pMakeAvailable($product_id)' class='text-info'><i class='fa fa-th'></i> Available  </a></td>
           <td><a onclick='pNotAvailable($product_id)' class='text-success'><i class='fa fa-list'></i> Not Available  </a></td>
           <td><a href='edit_products.php?edit={$product_id}' ><i class='fa fa-edit'></i></a></td>
           <td><a onclick='deleteProduct($product_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>
           </tr>";

        }

    }

    echo $output;
}

