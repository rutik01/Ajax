<?php 
$con = mysqli_connect('localhost','root','root','ajax_form');
if(isset($_POST['d_id']))
{
    $delete_id = $_POST['d_id'];
    $delete_query = "DELETE FROM form_data WHERE id = $delete_id";
    mysqli_query($con,$delete_query);
    
}else{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['City'];
    $document = $_POST['document'];

    $insert_query = "INSERT INTO form_data (name,surname,address,email,password,dob,city,document) values ('$name','$surname','$address','$email','$password','$dob','$city','$document')";

    $data = mysqli_query($con,$insert_query);
}
    $sel_query = "SELECT * FROM form_data";
    $data1 = mysqli_query($con,$sel_query);
?>
<table>
    <?php while($row = mysqli_fetch_assoc($data1)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['surname']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['document']; ?></td>
        </tr>
    <?php } ?>
</table>

<script type="text/javascript">

    $(document).ready(function(){
        $('.delete').click(function(){
            $.ajax({
                type:"POST",
                url:'form_data.php',
                data:{'d_id':delete_id},
            })
        })
    })


</script>