<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>calculator !</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('#sum').click(function(){
                var val1 = parseInt($('#val1').val()); 
                var val2 = parseInt($('#val2').val());

                var ans = val1+val2;
                $.ajax({
                    type:"POST",
                    url:"ajax_cal.php",
                    data:{'name':ans},

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
            <div class="row row-cols-3 mt-5">
                <div class="fome-group">
                    <input type="text" name="val1" class="form-control" id="val1" placeholder="Enter Value">
                </div>
                <div class="fome-group">
                    <input type="text" name="val2" class="form-control" id="val2" placeholder="Enter Value">
                </div>
                <div class="fome-group">
                    <input type="text" name="ans" class="form-control" id="ans"  readonly>
                </div>

            </div>
            <div class="row row-cols-4">
                <div class="fome-group col-1">
                    <div class="btn btn-primary mt-3" id="sum">+</div>
                </div>
                <div class="fome-group col-1">
                    <div class="btn btn-primary mt-3" id="sub">-</div>
                </div>
                <div class="fome-group col-1">
                    <div class="btn btn-primary mt-3" id="mul">*</div>
                </div>
                <div class="fome-group col-1">
                    <div class="btn btn-primary mt-3" id="divison">/</div>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>