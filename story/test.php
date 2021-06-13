
<?php

include "./db/dd.php";
include "./db/account.php";

$input=$_POST;

dd($input);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <a href="test_get.php?subject=PHP&web=W3schools.com">Test $Get</a> -->

  <form action="test.php" method="post">
  <p>
      <label for="chinese">chinese</label>
      <input type="text" name="chinese" id="chinese">
  </p>
  <p>
      <label for="math">math</label>
      <input type="text" name="math" id="math">
  </p>
  <p>
      <label for="english">english</label>
      <input type="text" name="english" id="english">
  </p>
  <p>
    <input type="submit" value="查詢">
  </p>
  <p>
    <input type="hidden" name="hiddenKey" value="hiddenValue">
  </p>

  </form>


  <div class="container d-flex justify-content-center">
  <div class="card w-50 mt-5 shadow-lg">
  <div class="card-body">
    <h1 class="d-flex justify-content-center">登入</h1>

    <form action="./story.php" method="post">
    <div class="mb-3 row">
    <label for="inputPassword" name="account" class="col-sm-2 col-form-label">Account</label>
      <div class="col">
        <input type="password" class="form-control" id="password">
      </div>
    </div>
    <div class="mb-3 row">
    <label for="inputPassword" name="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col">
        <input type="password" class="form-control" id="password">
      </div>
    </div>
    <div class="col-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
    </form>





</body>
</html>