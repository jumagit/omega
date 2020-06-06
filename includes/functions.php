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

    $sql = "SELECT user_id,sname,role,fname, email,mobile,gender,account_status, created_by, created_on FROM users ";
    $result = query($sql);
    if (mysqli_num_rows($result) > 0) {

        $output = "";

        $count = 0;

        while ($trailRow = mysqli_fetch_array($result)) {

            $count++;
            $user_id = $trailRow['user_id'];
            $sname = $trailRow['sname'];
            $fname = $trailRow['fname'];
            $role = $trailRow['role'];
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



            //role

            if ($role == 1) {

                $role = "Administrator";

            } else {

                $role = "User";
            }


            $output .= "<tr>
               <td>{$count}</td>
               <td>{$sname} {$fname}</td>
               <td>{$email}</td>
               <td>{$mobile}</td>
               <td>{$accountStatus}</td>  
               <td>{$role}</td>         
               <td><a onclick='makeAdmin($user_id)' class='text-info'><i class='fa fa-user'></i>  Admin  </a></td>
               <td><a onclick='revokeAdmin($user_id)' class='text-success'><i class='fa fa-cut'></i> Revoke </a></td>
               <td><a onclick='deactivateAccount($user_id)' class='text-info'><i class='fa fa-times-circle'></i>  Deactivate  </a></td>
               <td><a href='edit_users.php?edit={$user_id}' ><i class='fa fa-edit'></i></a></td>
               <td><a onclick='deleteUser($user_id)' class='text-danger'><i class='fa fa-trash'></i></a></td>

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



