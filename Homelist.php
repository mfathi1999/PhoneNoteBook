<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="jumbotron">
        <div class="container">
            <h1>دفترچه تلفن من</h1>
            <p>ذخیره مخاطبان بدون محدودیت</p>
        </div>
    </div>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="container-fluid bg-info text-white">
        <h1>خوش آمدید</h1>
        <!---Connecting to MySql! -->

        <?php
            $servername = "localhost";
            $database = "Contactdb";
            $username = "root";
            $password = "";


            $conn = mysqli_connect($servername,$username,$password,$database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
            else{
                echo "Connected successfully";
                
                mysqli_close($conn);
            }
                
    
        ?>






        </div>
    </div>
    <div class="col-md-2"></div>

    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
  </body>
</html>