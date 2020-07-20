<?php
date_default_timezone_set('Europe/Lisbon');

require("../engine/.db/db_connection.php");
require("../engine/controllers/CRUDController.php");
require("../engine/f/f.MoveFile.php");

if(isset($_POST['addJokeBtn'])){
  if(isset($_POST['key']) and $_POST['key'] == 'imdope' ){

    $obj = new CRUDManagment();

    $llink = (isset($_POST['audioLink']) and $_POST['audioLink'] != "") ? str_replace(' height="166" ', ' height="80" ', $_POST['audioLink']) : '';
    $obj->Insert('content', array(':title' => $_POST['title'],
                                  ':text' => $_POST['descr'],
                                  ':audio' => $llink,
                                  ':created_at' => date('Y-m-d H:i:s')));
  }
}

 ?>
<!DOCTYPE html>
<html>
<head>

<title>+ UMA</title>
<link rel="icon" href="assets/rel.png" type="image/png">

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
<div class="container">

  <div>

  <form method="POST" action ="index.php" name="publishJoke" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descr"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Audio Link</label>
    <input type="text" class="form-control" name="audioLink" placeholder="https://"/>
  </div>
  <br><br>
  <div class="form-group">
    <input type="password" style="width:150px;" class="form-control" name="key" placeholder="KEY" required/>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary"  name="addJokeBtn" value="PUBLISH" >
  </div>
</form>

  </div>

</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
