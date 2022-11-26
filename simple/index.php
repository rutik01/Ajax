<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, I am learning Ajex now!</title>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#save').click(function(){
                var value = $('#name').val();

                $.ajax({
                    type:"POST",
                    url:"ajax_data.php",
                    data:{'name':value},

                    success:function(res)
                    {
                        $('#ans').val(res);
                    }
                })
            })
        })

    </script>
</head>

<body>
    <div class="container">
        <form>
            <div class="row row-cols-2 mt-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">

                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="ans" readonly>
                </div>
                <div>
                    <div class="btn btn-primary mt-2" id="save">Click Now</div>
                    <!-- <button type="submit" class="btn btn-primary mt-3" id="save">Submit</button> -->
                </div>
            </div>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>