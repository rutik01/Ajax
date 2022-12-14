<?php

$con = mysqli_connect('localhost', 'root', 'root', 'ajax_form');
$cnt=0;
if (isset($_POST['id'])) {
    $delete_id = $_POST['id'];
    $delete_query = "DELETE FROM form_data WHERE id = $delete_id";
    $cnt=1;

    $data = mysqli_query($con, $delete_query);
}elseif(isset($_POST['update_id'])) {
    $up_id = $_POST['update_id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['city'];
    $document = $_POST['document'];
    $cnt=2;

    $up_user_data = "UPDATE form_data SET name = '$name',surname='$surname',address='$address',email='$email',password='$password',dob='$dob',city='$city',document='$document' WHERE id = '$up_id'";
    mysqli_query($con,$up_user_data);
    $sel_query = "SELECT * FROM form_data where id='$up_id'";
    $data = mysqli_query($con, $sel_query);
}else {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['City'];
    $document = $_POST['document'];
    $cnt=1;

    $insert_query = "INSERT INTO form_data (name,surname,address,email,password,dob,city,document) values ('$name','$surname','$address','$email','$password','$dob','$city','$document')";
    $data = mysqli_query($con, $insert_query);
}

if($cnt==1){
    $sel_query = "SELECT * FROM form_data";
    $data = mysqli_query($con, $sel_query);
    $cnt=0;
}
?>
    <?php while ($row = mysqli_fetch_assoc($data))
    { 

        $user_id = $row["id"];
        $name = $row["name"];
        $surname = $row["surname"];
        $address = $row["address"];
        $email = $row["email"];
        $password = $row["password"];
        $dob = $row["dob"];
        $city = $row["city"];
        $document = $row["document"];


        // echo $user_id.'<br>';
        // echo $name.'<br>';
        // echo $surname.'<br>';
        // echo $address.'<br>';
        // echo $email.'<br>';
        // echo $password.'<br>';
        // echo  $dob.'<br>';
        // echo  $city.'<br>';
        // echo  $document.'<br>';


        // die();   

        $up_data = '<tr>
                    <td>'.$user_id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$surname.'</td>
                    <td>'.$address.'</td>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>   
                    <td>'.$dob.'</td>
                    <td>'.$city.'</td>
                    <td>'.$document.'</td>
                    <td>
                        <button data-eid='.$user_id.' class="edit-btn btn-primary  px-3 py-2 rounded">Edit</button>
                    </td>
                    <td><a href="javascript:void(0)" data-id='.$user_id.' class="delete">Delete</a></td>
                    </tr>';
            echo $up_data;
    }  ?>

