<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $con = mysqli_connect('localhost','root','root','ajax_form');

    $user_id = $_POST['update_id'];

    $select_data = "SELECT * FROM form_data WHERE id = '$user_id'";

    $result = mysqli_query($con, $select_data);

    $row = mysqli_fetch_assoc($result);

    $data = json_encode($row);

    echo $data;

?>