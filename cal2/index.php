<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cal {
            width: 400px;
			height: auto;
			background: black;
			color: white;
			padding: 40px;
			margin: auto;
            margin-top: 20px;
        }
        .display{
            width: 100%;
			height: 60px;
			text-align: right;
			margin-bottom: 20px;
			background: black;
			border: 1px solid yellow;
			color: white;
			font-size: 26px;
			padding-left: 10px;
        }

        .button_box {
            height: 60px;
			width: 60px;
			background: white;
			margin-left: 10px;
			margin-bottom: 20px;
			border: 1px solid yellow;
			border-radius: 5px;
			background: black;
			color: white;

        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            var val1;
            var sign;
            var firstval;
            var lastval;
            $('input[type=button]').click(function(){
               val1 = $(this).val();

                document.getElementById('display').value += val1;
               if (val1 == '+') {
                    sign =  $(this).val();

                    firstval = document.getElementById('display').value;
                    document.getElementById('display').value = '';
               }else if(val1 == '-')
               {
                    sign =  $(this).val();

                    firstval = document.getElementById('display').value;
                    document.getElementById('display').value = '';
               }
               else if(val1 == '*'){
                    sign =  $(this).val();

                    firstval = document.getElementById('display').value;
                    document.getElementById('display').value = '';
               }
               else if(val1 == '/'){
                    sign =  $(this).val();

                    firstval = document.getElementById('display').value;
                    document.getElementById('display').value = '';
               }
               else if(val1 == '=')
               {
                lastval = document.getElementById('display').value;
                document.getElementById('display').value= '';
                    if(sign == '+')
                    {
                        var ans = parseFloat(firstval)+parseFloat(lastval);
                    }
                    else if(sign == '-')
                    {
                        var ans = parseFloat(firstval)-parseFloat(lastval);
                    }
                    else if(sign == '*')
                    {
                        var ans = parseFloat(firstval)*parseFloat(lastval);
                    }
                    else if(sign == '/')
                    {
                        var ans = parseFloat(firstval)/parseFloat(lastval);
                    }
                    else if(sign == '%')
                    {
                        var ans = parseFloat(firstval)%parseFloat(lastval);
                    }
                    $('#display').val(ans);

               }
               else if(val1 == 'C')
               {
                    document.getElementById('display').value = '';
                    firstval = 0;
                    lastval = 0;
                    sign = '';
               }
               else if(val1 == '%')
               {
                sign =  $(this).val();

                firstval = document.getElementById('display').value;
                document.getElementById('display').value = '';
               }
            })
        })
    </script>
</head>

<body>
    <div class="container">
        <div class="cal">
            <input type="tetx" class="display" readonly id="display">
            <br>
            <input type="button" value="C" class="button_box">
            <input type="button" value="%" class="button_box">
            <input type="button" value="back" class="button_box">
            <input type="button" value="/" class="button_box">
            <br>
            <input type="button" value="1" class="button_box">
            <input type="button" value="2" class="button_box">
            <input type="button" value="3" class="button_box">
            <input type="button" value="*" class="button_box">
            <br>
            <input type="button" value="4" class="button_box">
            <input type="button" value="5" class="button_box">
            <input type="button" value="6" class="button_box">
            <input type="button" value="-" class="button_box">

            <br>
            <input type="button" value="7" class="button_box">
            <input type="button" value="8" class="button_box">
            <input type="button" value="9" class="button_box">
            <input type="button" value="+" class="button_box">

            <br>
            <input type="button" value="0" class="button_box">
            <input type="button" value="00" class="button_box">
            <input type="button" value="." class="button_box">
            <input type="button" value="=" class="button_box">
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>