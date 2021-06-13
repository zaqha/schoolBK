<?php
    //1.宣告class 
class Fruit {
    //2.宣告class的變數
    public $name;
    public $color;
  
    //3.宣告class的方法
    function __construct($nameInput) {
      //這個class的變數$name = 方法的變數$nameInput
      $this->name = $nameInput;
      //呼叫這個class的方法
      $this->get_name();
    }
    function get_name() {
      return $this->name;
    }
}
    //4.實體化obj  ? 實體化 水果這個class
    $appleObj = new Fruit();
    $appleObj = new Fruit('apple123');?>

<?php
echo "init count =>" .Square::$count."<br>";

class Square {
  // Properties
  public $length = 100;
  public $width = 50;
  public static $count = 0;

  // Methods
  public function __construct(int $lengthInput, int $widthInput){
    if($lengthInput>0){
      $this->length=$lengthInput;
      }
    if( $widthInput>0){
    $this->width=$widthInput;
  }
  //算有幾個obj
    self::$count++;
  }
  // 面積
  public function getArea(){
  $getArea = $this->length * $this->width;
  return $getArea."<br>";
  }
  // 周長
  public function getPeri(){
    $getPeri = ($this->length + $this->width)*2;
    return $getPeri."<br>";
  }
  

}


?>