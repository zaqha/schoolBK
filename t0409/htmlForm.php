<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>HTML Forms</h2>

<form action="/action_page.php" name="myform" id="myform" >
<!-- text label是前面提示字 姓名: -->

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
  <hr><br>

<!-- textarea  -->
<textarea name="we" id="ree" cols="30" rows="10"></textarea>

<hr><br>
<!-- select  -->
<h3>select</h3>
<label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">

<hr><br>
  <!-- placeholder 灰色提示字  -->
  <h3>placeholder</h3>
  <label for="phone">Enter a phone number:</label><br><br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678"
  pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
  <small>Format: 123-45-678</small><br><br>
  <input type="submit">

  <br><hr>
  <!-- radio  -->
  <h3>radio</h3>
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  <br> <hr> 
<!-- checkbox -->
<h3>checkbox</h3>
<input type="checkbox" id="vehicle1" name="vehicle[]" value="Bike">
  <label for="vehicle1"> I have a bike</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle[]" value="Car">
  <label for="vehicle2"> I have a car</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle[]" value="Boat">
  <label for="vehicle3"> I have a boat</label><br><br>
  <input type="submit" value="Submit">


  <hr><br>

  <!-- reset  -->

  <input type="reset" value="Reset">
  <hr><br>

  <!-- date  -->
  <input type="date" id="" name="">
  <hr><br>

  <!-- number -->
  <input type="number" id="" name="" step="0.1">




</form> 


<!-- 
  lable 是前面提示字 
  textarea文字回覆框


-->



</body>
</html>