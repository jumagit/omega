<?php

date_default_timezone_set('Africa/Kampala');

/*
 *  EMAIL CONFIGS
 */
//
define('SYSTEM_EMAIL', 'suplywrnemail');
define('SMTP_PORT', 587);
define('SMTP_HOST', 'owebsite');
define('SYSTEM_EMAIL_PASSWORD', 'serverPass');

//
//
define('URL_PUBLIC_FOLDER', 'static');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));

define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . "/");
//
define("UPLOAD_DIR", 'uploads/');

//connection configuration
$connectionHost = 'localhost';
$connectionUsername = 'root';
$connectionPassword = '';
$connectionName = 'store';

//Connect and select the database
$connection = mysqli_connect($connectionHost, $connectionUsername, $connectionPassword, $connectionName);

if (!$connection) {
    die("Connection failed: " . $connection->connect_error);
}
?>


<?php

function query($sql)
{

    global $connection;

    $sql = mysqli_query($connection, $sql);

    return $sql;
}

function clean($input)
{
    global $connection;
    $input = trim(htmlentities(strip_tags($input, ",")));
    if (get_magic_quotes_gpc()) {
        $input = stripslashes($input);
    }

    $input = mysqli_real_escape_string($connection, $input);

    $input = trim($input);
    return $input;
}

function duplicate_username($username)
{
    global $connection;

    $query = "SELECT Username FROM users WHERE Username = '$username'";

    $username_query = mysqli_query($connection, $query);

    if (mysqli_num_rows($username_query) > 0) {

        return true;

    } else {

        return false;
    }
}

function writeLog($activity, $username, $log_type)
{

    global $connection;
    $month = date('F');
    $day = date('j');
    $year = date('Y');
    $activity_time = date('l j<\s\u\p>S</\s\u\p>, F Y (h:i:s A)');
    $sql = "INSERT INTO system_access_logs (activity, day, month, year, username, activity_time, log_type)
     VALUES ( '$activity', '$day', '$month', '$year', '$username', '$activity_time', '$log_type')";
    $result = query($sql);
    if (!$result) {

        return false;
    } else {
        return true;
    }
}

function getUserIP()
{
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }

    return $ip;
}
$IP = getUserIP();

function users_online()
{

    global $connection;

    if (isset($_GET['onlineusers'])) {
        if (!$connection) {

            $connection = mysqli_connect('localhost', 'root', '', 'project');

            session_start();

            $session = session_id();
            $time = time();
            $time_out_in_seconds = 05;
            $time_out = $time - $time_out_in_seconds;

            $query = "SELECT * FROM online_users WHERE session = '$session'";

            $users_online_count = mysqli_query($connection, $query);

            $count = mysqli_num_rows($users_online_count);

            if ($count == null) {

                $online_insert = mysqli_query($connection, "INSERT INTO online_users(session, time ) VALUES ('$session','$time')");
            } else {

                $online_insert = mysqli_query($connection, "UPDATE online_users SET time= '$time' WHERE session = '$session'");

                //users online
                $users_online = mysqli_query($connection, "SELECT * FROM online_users WHERE time > '$time_out'");

                echo $display_users = mysqli_num_rows($users_online);
            }

        }
    }
//get request isset()

}

users_online();

function admin_user()
{
    global $connection;

    if (isset($_GET['admin'])) {
        $the_user_id = $_GET['admin'];
        $query = "UPDATE users SET user_status = 'Admin' WHERE StdNo = {$the_user_id}";
        $admin_query = mysqli_query($connection, $query);
    }
}

// subscriber change
function subscriber_user()
{
    global $connection;

    if (isset($_GET['subscriber'])) {
        $the_user_id = $_GET['subscriber'];
        $query = "UPDATE users SET user_status = 'Subscriber' WHERE StdNo = {$the_user_id}";
        $admin_query = mysqli_query($connection, $query);
    }
}

function generatePassword($length = 9, $add_dashes = false, $available_sets = 'luds')
{
    $sets = array();
    if (strpos($available_sets, 'l') !== false) {
        $sets[] = 'abcdefghjkmnpqrstuvwxyz';
    }

    if (strpos($available_sets, 'u') !== false) {
        $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
    }

    if (strpos($available_sets, 'd') !== false) {
        $sets[] = '23456789';
    }

    if (strpos($available_sets, 's') !== false) {
        $sets[] = '!@#$%&*?';
    }

    $all = '';
    $password = '';
    foreach ($sets as $set) {
        $password .= $set[array_rand(str_split($set))];
        $all .= $set;
    }
    $all = str_split($all);
    for ($i = 0; $i < $length - count($sets); $i++) {
        $password .= $all[array_rand($all)];
    }

    $password = str_shuffle($password);
    if (!$add_dashes) {
        return $password;
    }

    $dash_len = floor(sqrt($length));
    $dash_str = '';
    while (strlen($password) > $dash_len) {
        $dash_str .= substr($password, 0, $dash_len) . '-';
        $password = substr($password, $dash_len);
    }
    $dash_str .= $password;
    return $dash_str;
}


//money  


function money($amount){
    $amount =  str_replace(',', '',$amount);
    $amount =  floatval($amount);
    $amount = intval($amount, 10);
     return $amount;
 }



 
?>