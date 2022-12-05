<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            border: 1px solid black;
            border-radius: 20px;
        }

        table {
            margin-left: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

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
                            <input type="text" name="name"  class="p-2 rounded-3" require>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <h5 class="p-2">*Surname:</h5>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="surname" id="" class="p-2 rounded-3" require>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <h5 class="p-2">*Address:</h5>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="address" id="" class="p-2 rounded-3" require>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <h5 class="p-2">*Email:</h5>
                        </div>
                        <div class="col-auto">
                            <input type="email" name="email" id="" class="p-2 rounded-3" require>
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
                    <div class="row mt-3 mb-5">
                        <div class="col-2">
                            <h5 class="p-2">*Image:</h5>
                        </div>
                        <div class="col-auto rounded-3">
                            <input type="file" name="image" id="" class="p-2" require>
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



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

   
</body>

</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#frm_data').submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();

            alert(data);

            $.ajax({
                type:"POST",
                url:"form_data.php",
                data:data,

            })
        })
    })



</script>