<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
include 'common/db.php';
include 'common/dd.php';


// dd($_GET);
$deletes=$_GET['batch'];
dd($deletes);


if(!empty($_GET['act'] == "batchDelete")){

  $deletes=$_GET['batch'];
  foreach($deletes as $key){
    $sql = "DELETE FROM `stores` WHERE id = '$key'
    ";
    $delData = $conn->prepare($sql);
    $delData->execute();
    $url = "./index.php?msg=del_ok";
    header("Location:$url");
  }
}elseif(!empty($_GET['act'] == "batchEdit")){
  $edites=$_GET['batch'];
  dd($edites);
  for($x=0 ; $x < count($edites); $x++){
        $sql = "SELECT * FROM stores WHERE id = $edites[$x]";
        $getData = $conn->prepare($sql);
        $getData->execute();
        $data = $getData->fetch(PDO::FETCH_ASSOC);
        $result[]=$data;
  }
  dd($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="./editOk.php" method="get">
    <table class="table table-striped">
      <tr>
        <th>id</th>
        <th>店名</th>
        <th>區域</th>
        <th>營業額</th>
        <th>來客數</th>
      </tr>
      <?php for($x=0 ; $x < count($edites); $x++ ):?>
      <tr>
      <td><input type="text" name="id[]" value="<?= $result[$x]['id'] ?>"></td>

      <td><input type="text" name="name[]" id="name" value="<?= $result[$x]['name'] ?>"></td>
      <td>
        <select id="location" name="location[]">
          <option value="<?= $result[$x]['location']; ?>"><?= $result[$x]['location']; ?></option>
          <option value="北區">北區</option>
          <option value="中區">中區</option>
          <option value="南區">南區</option>
        </select>
      </td>

      <td><input type="number" name="price[]" id="price" value="<?= $result[$x]['price']; ?>"></td>
      <td><input type="number" name="people[]" id="people" value="<?= $result[$x]['people']; ?>"></td>
      </tr>
      <?php endfor;?>
      <tr>
        <td colspan=5>
          <input type="submit" value="submit" name="submit">
        </td>
      </tr>
  </form>
</table>
</body>
</html>