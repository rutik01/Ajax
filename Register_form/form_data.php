<?php
$con = mysqli_connect('localhost', 'root', 'root', 'ajax_form');
if (isset($_POST['id'])) {
    $delete_id = $_POST['id'];
    $delete_query = "DELETE FROM form_data WHERE id = $delete_id";

    mysqli_query($con, $delete_query);
} else {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $city = $_POST['City'];
    $document = $_POST['document'];

    $insert_query = "INSERT INTO form_data (name,surname,address,email,password,dob,city,document) values ('$name','$surname','$address','$email','$password','$dob','$city','$document')";
    $data = mysqli_query($con, $insert_query);
}
$sel_query = "SELECT * FROM form_data";
$data = mysqli_query($con, $sel_query);
?>
    <?php while ($row = mysqli_fetch_assoc($data)) { ?>

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
            <td>
                <button data-eid="<?php echo $row['id']; ?>" class="edit-btn btn-primary">Edit</button>
            </td>
            <!-- <td><a href="javascript:void(0)" data-eid="<?php echo $row['id']; ?>" class="edit-btn">Edit</a></td> -->
            <td><a href="javascript:void(0)" data-id="<?php echo $row['id']; ?>" class="delete">Delete</a></td>
        </tr>
    <?php } ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('.delete').click(function() {
            var id = $(this).attr('data-id')
            $.ajax({
                type: "POST",
                url: "form_data.php",
                data: {
                    'id': id
                },
                success: function(res) {
                        $('#form_data').html(res);
                }
            })
        })
    })
</script>