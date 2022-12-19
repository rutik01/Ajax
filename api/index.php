<?php  
    $con = mysqli_connect('localhost','root','root','ajax_form');
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql_select = "SELECT * FROM form_data where id = '$id'";
    $data = mysqli_query($con,$sql_select);

    $jsonArray = mysqli_fetch_assoc($data);
}
else{
    $sql_select = "SELECT * FROM form_data";
    $data = mysqli_query($con,$sql_select);

    while($row = mysqli_fetch_assoc($data))
    {
        $jsonArray[] = $row;
    }
}
    echo json_encode($jsonArray);






?>