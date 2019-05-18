<?php
include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Test</title>
  
  </head>
  <body class="container">
    <div id="input"> 
      <div class="centered shadow-none p-3 mb-5 bg-light rounded">
      
      <?php

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (nameusers) VALUES ('".$_POST["nameusers"]."')";

    $result = mysqli_query($conn,$sql);
}
?>
        <form class="form-inline d-flex justify-content-center" action="inputdata.php" method="post">
          <div class="form-group mx-sm-3 mb-2 ">
            <label for="nameusers" class="sr-only">Input Nama</label>
            <input type="text" class="form-control" name="nameusers" id="nameusers" placeholder="Nama" required>
          </div>
          <button type="submit" class="btn btn-primary mb-2" name="save">Submit</button>
        </form>
      </div>
    </div>


    <div id="output">
        <div class="col s3 shadow-none p-3 mb-5 bg-light rounded">
            <form class="form-inline d-flex justify-content-center">

                <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 70px;">
    
                    <div class="p-2 bd-highlight">
                    <?php
                     if(isset($_GET['id']))
                     {
                         $sql = "SELECT id FROM users ('".$_GET["id"]."')";
                     
                         $result = mysqli_query($conn,$sql);
                     }
                     ?>
                      
                    </div>
                    <div class="p-2 bd-highlight">Flex item

                    </div>
                </div>
                <div class="d-flex flex-nowrap bd-highlight"> 
                    <div class="order-2 p-2 bd-highlight">
                        <label for="inputNama" class="sr-only">Input Nama</label>
                        <input type="text" class="form-control" id="inputNama" placeholder="Skills">
                    </div>
                    <div class="order-3 p-2 bd-highlight">
                        <button type="submit" class="btn btn-primary mb-2">Button</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>