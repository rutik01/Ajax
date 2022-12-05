<?php 

$con = mysqli_connect('localhost','root','root','ajax_form');

$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$city = $_POST['City'];
$document = $_POST['document'];
$image = $_FILES['image']['name'];
$path = 'img/'.$image;


$insert_query = "INSERT INTO form_data (name,surname,address,email,password,dob,city,document,image) values ('$name','$surname','$address','$email','$password','$dob','$city','$document','$image')";

echo $insert_query.'<br>';

if($data = mysqli_query($con,$insert_query)){
    if($image!= '')
    {
        move_uploaded_file($_FILES['image']['tmp_name'],$path);
    }
    else{
        echo "Plz, Choose the image";
    }
   
}

echo $name.'<br>';
echo $surname.'<br>';
echo $address.'<br>';
echo $email.'<br>';
echo $password.'<br>';
echo $dob.'<br>';
echo $city.'<br>';
echo $document.'<br>';
echo $image.'<br>';


?>