<?php
function dd($variable)
{
    echo'<pre>';
    print_r($variable);
    echo'</pre>';
}
?>

<?php
    //1.醫生
    //  底薪            => 100000;
    //  加班天數        => ?;
    //  每日加班薪水   => 2000

class Doctor {
  public $salary = 100000;
  public $day = 0;
  public $bonus = 2000;
  //算天數
  public function __construct(int $day){
      $this->day = $day;
  }

  //改天數(呼叫變數)
  public function setDay($day){
    $this->day = $day;
  }
  
  //算薪水
  public function getTotal(){
      $result = $this->salary + ($this->bonus * $this->day);
      return $result;
    }

}

//2.退休支援的醫生
//  底薪           => 0
//  加班天數       => ?
//  每日加班薪水     => 5000
class RetiredDoctor {
  public $salary = 0;
  public $day = 0;
  public $bonus = 5000;
  public function __construct($day){
      $this->day = $day;
  }
  public function getTotal(){
      $result = $this->salary + ($this->bonus * $this->day);
  }
}


//醫生A(5)

  $doctorA=new Doctor(5);
  dd($doctorA);
  // echo $doctorA->getTotal();


  //改天數(29)
  $doctorA->setDay(29);
  dd($doctorA);


  // 算薪水
  $resultObj=new Doctor(29);
  echo $resultObj->getTotal();
  dd($resultObj);
  