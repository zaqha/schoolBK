<?php
// HW2
// db 資料庫規劃
// table:user
// id/name/password/level
// table:story
// id/name/file/intro_chinese/intro_english/visible

// 前端頁面
// login user

// 後端頁面(有權限才可以進)
// user crud
// stories crud 3-5pages
// session_start();
include "./db/dd.php";
include "./db/account.php";


$sql="SELECT * FROM `user`";
$data = $conn->prepare($sql);
$data->execute();
$userData = $data->fetchAll(PDO::FETCH_ASSOC);

// dd($userData);


$input=$_POST;


if(!empty($input)){
for($x=0;$x<count($userData);$x++){
  if($userData[$x]['id']==$input['account']&&$userData[$x]['password']==$input['password']&&$userData[$x]['level']>2){
    echo'Good' ;
    header("Location: ./account.php");
  }elseif($userData[$x]['id']==$input['account']&&$userData[$x]['password']==$input['password']&&$userData[$x]['level']<=2){
    echo'權限不夠';
  }
}}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

  <div class="container d-flex justify-content-center">
  <div class="card w-50 mt-5 shadow-lg">
  <div class="card-body">
    <h1 class="d-flex justify-content-center">登入</h1>
        <form action="index.php" method="post">
      <p>
          <label for="account">account</label>
          <input type="text" name="account" id="account">
      </p>
      <p>
          <label for="password">password</label>
          <input type="text" name="password" id="password">
      </p>
        <input type="submit" value="登入">
      </p>
      </form>
  </div>
  </div>

</body>
</html>