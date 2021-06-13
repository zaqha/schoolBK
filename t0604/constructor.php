<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
    public $name;
    public $color;

  //建構子 
    function __construct($name) {
      $this->name = $name; 
      echo "hello {$this->name}.<br>";
    }


  // 解構子
    function __destruct() {
      echo "bye bye {$this->name}.<br>";
    }

    function get_name() {
      return $this->name;
    }
    function set_name($newName) {
      $this->name=$newName;
    }
  }


$apple = new Fruit("Apple");
echo $apple->get_name()."<br>";
?>

</body>
</html>