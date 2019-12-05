<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php
    function hour(){
      date_default_timezone_set("Canada/Eastern");
      return date("H:i");
    }
  ?>
</head>
<body>
  <?php
    include("header.php");
  ?>
  voici ma page <br/>
  <?php
    echo hour();
  ?>
</body>
</html>