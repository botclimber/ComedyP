<?php
require("engine/.db/db_connection.php");
require("engine/controllers/CRUDController.php");

$obj = new CRUDManagment();

$data = $obj->GetAll('content');

 ?>

<!DOCTYPE html>
<html>
<head>
<title>+UMA</title>
<link rel="icon" href="../assets/rel.png" type="image/png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
body{
  background-color: #191e3a;
  color: #d3edff;
}

</style>

</head>

<body>
<br>
<div class="container-fluid">

  <?php foreach ($data as $key => $value) {
    // code...
    ?>
  <div class="col-md-12">
    <div class="row">
        <h5 class="col-md-12"><?= $value['title'] ?></h5>
        <p class="col-md-12" style="font-size:11pt;color:white;"><?= $value['text'] ?></p>

        <div class="col-md-12"><?= $value['audio'] ?></div>

        <div class="col-md-12 " style="text-align:right;"> <p style="font-size:8pt;"><?= $value['created_at'] ?></p></div>
    </div>
    <hr class="row" style="background-color: white;"/>
  </div>

<?php } ?>

</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
