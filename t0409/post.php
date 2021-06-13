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

  <form action="./testPost.php" method="post">
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

</body>
</html>