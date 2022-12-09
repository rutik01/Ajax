<?php

$con = mysqli_connect('localhost','root','root','ajax_form');
if (isset($_POST['update_id'])) {
    $user_id = $_POST['update_id'];

    $select_data = "SELECT * FROM form_data WHERE id = $user_id";
    $result = mysqli_query($con, $select_data);

    if (mysqli_num_rows($result) == 1) {
        if ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['id'];
            $name = $row['name'];
            $surname = $row['surname'];
            $address = $row['address'];
            $email = $row['email'];
            $password = $row['password'];
            $dob = $row['dob'];
            $city = $row['city'];
            $document = $row['document'];

            $output .= "
            <div class='row-12'>
                    <div class='col-12'>
                        <div class='row mt-5'>
                            <div class='col-2'>
                                <h5 class='p-2'>*First Name:</h5>
                            </div>
                            <div class='col-auto m-0'>
                            <input type='text'  class='p-2 rounded-3' id='user_id' hidden value=' $user_id' require>
                            <input type='text' name='name' id='edit_name' class='p-2 rounded-3'  value='$name' require>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*Surname:</h5>
                            </div>
                            <div class='col-auto'>
                                <input type='text' name='surname' id='edit_surname'  class='p-2 rounded-3' value='$surname'  require>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*Address:</h5>
                            </div>
                            <div class='col-auto'>
                                <input type='text' name='address' id='edit_address' class='p-2 rounded-3' value='$address' require>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*Email:</h5>
                            </div>
                            <div class='col-auto'>
                                <input type='email' name='email' id='edit_email'  class='p-2 rounded-3' value='$email' require>
                            </div>
                        </div>

                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*Password:</h5>
                            </div>
                            <div class='col-auto'>
                                <input type='password' name='password' id='edit_password' class='p-2 rounded-3' value='$password' require>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*DOB:</h5>
                            </div>
                            <div class='col-auto'>
                                <input type='date' name='dob' id='edit_dob' class='p-2 rounded-3' value='$dob' require>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*City:</h5>
                            </div>
                            <div class='col-auto'>
                                <select class='p-2 rounded-2 text-bold' id='edit_city' name='City' value='$city' require>
                                    <option class='font-weight-bold'>Surat</option>
                                    <option class='font-weight-bold'>Ahemdabad</option>
                                    <option class='font-weight-bold'>Baroda</option>
                                    <option class='font-weight-bold'>Bharuch</option>
                                    <option class='font-weight-bold'>Vapi</option>
                                    <option class='font-weight-bold'>Valsad</option>
                                    <option class='font-weight-bold'>Navsari</option>
                                    <option class='font-weight-bold'>Aanad</option>
                                    <option class='font-weight-bold'>Gandhinagar</option>
                                    <option class='font-weight-bold'>Banglore</option>
                                    <option class='font-weight-bold'>Rajkot</option>
                                    <option class='font-weight-bold'>Jamnagsr</option>
                                    <option class='font-weight-bold'>Porbander</option>
                                    <option class='font-weight-bold'>Bhavnagar</option>
                                </select>
                            </div>
                        </div>
                        <div class='row mt-3'>
                            <div class='col-2'>
                                <h5 class='p-2'>*Document:</h5>
                            </div>
                            <div class='col-auto'>
                                <select class='p-2 rounded-3' name='document' id='edit_document' value='$document' require>
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
                <div class='row row-cols-2 card-footer bg-dark text-white'>
                    <div class='col-auto'>
                        <div class='col-2'>
                        </div>
                        <input type='submit' value='Update' class='btn btn-primary m-3' id='update-submit' name='submit'>
                    </div>
                </div>";

            echo $output;
        }
    }
}


?>