<?php
include 'common/db.php';
include 'common/dd.php';



$input = $_GET;
dd($input);

// die();
$id = $input['id'];
dd($id);
$name = $input['name'];
$location = $input['location'];
$price = $input['price'];
$people = $input['people'];

for($x=0 ; $x < count($id); $x++){
// dd($id[$x]);
  
  $sql = "UPDATE stores SET
name = '$name[$x]', location = '$location[$x]',
price = '$price[$x]' , people = '$price[$x]'
WHERE id = '$id[$x]';
";
dd($sql);

// foreach($input as $key){
//   $id = $key['id'];
// $name = $key['name'];
// $location = $key['location'];
// $price = $key['price'];
// $people = $key['people'];
// }

$updateData = $conn->prepare($sql);
$updateData->execute();



echo 'update Ok<br>';

// $url = "./index.php?msg=edit_ok";
// header("Location: $url");

}
  ?>



