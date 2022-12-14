<?php
$con = mysqli_connect('localhost', 'root', 'root', 'ajax_form');

$sel_query = "SELECT * FROM form_data";
$data = mysqli_query($con, $sel_query);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Register Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            /* border: 1px solid black; */
            border-radius: 20px;
        }

        table {
            text-align: center;
        }

        th {
            padding: 20px;
            background-color: #212529 !important;
            color: white;
        }

        td {
            padding: 10px;
        }

        tbody tr {
            width: 100%;
            border: 1px solid black;
        }

        #model {
            background: (0, 0, 0, 0.7);
            position: fixed;
            left: 0%;
            top: 0;
            height: 100%;
            width: 100%;
            z-index: 100;
            text-align: center;
            display: none;
        }

        #model-form {
            background: #fff;
            width: 70%;
            position: relative;
            top: 10%;
            left: 15%;
            border: 1px solid black;
            border-radius: 4px;
            transition: .5s;
        }

        #close-btn {
            background: red;
            color: white;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 10px;
            position: absolute;
            top: -15px;
            right: -15px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="model">
        <div id="model-form">
            <h4>Update Your Profile</h4>
            <table cellpadding="0" width="100%">
                <form method="POST" enctype="multipart/form-data">
                    <div class="container bg-white border-none">


                    </div>
                </form>
            </table>
            <div>
                <button id="close-btn" class="close_popup">X</button>
            </div>
        </div>
    </div>
    <div class="container">
        <form method="POST" id="frm_data" enctype="multipart/form-data">
            <div class="container bg-white border border-white-1">
                <hr>
                <div class="row card-header bg-dark text-white">
                    <div class="col-12 text-center mt-4">
                        <h3>!! 🆁🅴🅶🅸🆂🆃🅴🆁-🅵🅾🆁🅼 !!</h3>
                    </div>
                </div>
                <hr>
                <div class="row-12">
                    <div class="col-12">
                        <div class="row mt-5">
                            <div class="col-2">
                                <h5 class="p-2">*First Name:</h5>
                            </div>
                            <div class="col-auto m-0">
                                <input type="text" name="name" class="p-2 rounded-3" require>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Surname:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="surname" class="p-2 rounded-3" require>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Address:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="address" class="p-2 rounded-3" require>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Email:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="email" name="email" class="p-2 rounded-3" require>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Password:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="password" name="password" class="p-2 rounded-3" require>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*DOB:</h5>
                            </div>
                            <div class="col-auto">
                                <input type="date" name="dob" class="p-2 rounded-3" require>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*City:</h5>
                            </div>
                            <div class="col-auto">
                                <select class="p-2 rounded-2 text-bold" name="City" require>
                                    <option class="font-weight-bold">Surat</option>
                                    <option class="font-weight-bold">Ahemdabad</option>
                                    <option class="font-weight-bold">Baroda</option>
                                    <option class="font-weight-bold">Bharuch</option>
                                    <option class="font-weight-bold">Vapi</option>
                                    <option class="font-weight-bold">Valsad</option>
                                    <option class="font-weight-bold">Navsari</option>
                                    <option class="font-weight-bold">Aanad</option>
                                    <option class="font-weight-bold">Gandhinagar</option>
                                    <option class="font-weight-bold">Banglore</option>
                                    <option class="font-weight-bold">Rajkot</option>
                                    <option class="font-weight-bold">Jamnagsr</option>
                                    <option class="font-weight-bold">Porbander</option>
                                    <option class="font-weight-bold">Bhavnagar</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <h5 class="p-2">*Document:</h5>
                            </div>
                            <div class="col-auto">
                                <select class="p-2 rounded-3" name="document" require>
                                    <option>Water Bill</option>
                                    <option>Telephone (mobile bill)</option>
                                    <option>Electricity bill</option>
                                    <option>Income Tax Assessment Order</option>
                                    <option>Election ID card</option>
                                    <option>Proof of Gas Connection</option>
                                    <option>Certificate from Employe</option>
                                    <option>Spouse's passport copy </option>
                                    <option>Parent's passport copy</option>
                                    <option>Aadhaar Card</option>
                                    <option>Rent Agreement</option>
                                    <option>Photo Passbook</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-2 card-footer bg-dark text-white">
                    <div class="col-auto">
                        <div class="col-2">
                            <input type="submit" value="submit" class="btn btn-primary m-3" name="submit">
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <div class="container mt-5">
        <div class="row-12">
            <div class="col-md-4 col-12">
                <table class="mt-4">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Dob</th>
                        <th>City</th>
                        <th>Document</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <tbody id="form_data">
                        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                            <tr id="row_<?php echo $row['id']; ?>">
                                <td><?php echo $row['id']; ?></td>
                                <td> <?php echo $row['name']; ?></td>
                                <td> <?php echo $row['surname']; ?></td>
                                <td> <?php echo $row['address']; ?></td>
                                <td> <?php echo $row['email']; ?></td>
                                <td> <?php echo $row['password']; ?></td>
                                <td> <?php echo $row['dob']; ?></td>
                                <td> <?php echo $row['city']; ?></td>
                                <td> <?php echo $row['document']; ?></td>
                                <td>
                                    <button data-eid="<?php echo $row['id']; ?>" class="edit-btn btn-primary px-3 py-2 rounded">Edit</button>
                                </td>
                                <!-- <td><a href="javascript:void(0)" data-eid="<?php echo $row['id']; ?>" class="edit-btn">Edit</a></td> -->
                                <td><a href="javascript:void(0)" data-id="<?php echo $row['id']; ?>" class="delete">Delete</a></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {

        // Insert Data into the database.....
        $('#frm_data').submit(function(e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "form_data.php",
                data: data,

                success: function(res) {
                    $("#frm_data")[0].reset();
                    $('#form_data').html(res);
                }
            })
        });

        // Delete user data on the Database...
            $(document).on("click", ".delete", function(){
                var el = this;
                var id = $(this).attr('data-id');
                $.ajax({
                    type: "POST",
                    url: "form_data.php",
                    data: {
                        'id': id
                    },
                    success: function(res) {

                        $(el).closest('tr').css('background', 'tomato');
                        $(el).closest('tr').fadeOut(800, function() {
                            $(this).remove();
                        });

                        // $('#form_data').html(res);
                    }
                })
            })

        // Show model Box..
        $(document).on("click", ".edit-btn", function() {
            $("#model").show();
            var user_id = $(this).data('eid');
            $.ajax({
                type: "POST",
                url: "update_data.php",
                data: {
                    update_id: user_id
                },

                success: function(data) {
                    $("#model-form .container").html(data);
                }
            })
        });

        // hide Model Box
        $(document).on('click', '.close_popup', function() {
            $("#model").hide();
        });

        // updated data
        $(document).on('click', '#update-submit', function() {
            var stuId = $('#user_id').val();

            var name = $('#edit_name').val();
            var surname = $('#edit_surname').val();
            var email = $('#edit_email').val();
            var address = $('#edit_address').val();
            var password = $('#edit_password').val();
            var dob = $('#edit_dob').val();
            var city = $('#edit_city').val();
            var document = $('#edit_document').val();

            $.ajax({
                url: 'form_data.php',
                type: 'post',
                data: {
                    update_id: stuId,
                    name: name,
                    surname: surname,
                    email: email,
                    address: address,
                    password: password,
                    dob: dob,
                    city: city,
                    document: document,
                },

                success: function(res) {
                    $("#model").hide();
                    $('#row_' + stuId).html(res);
                }
            })
        });
    })
</script>