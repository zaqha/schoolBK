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
class Employee{
  public $day = 0;
    //算薪水
    public function getTotal(){
      $result = $this->salary + ($this->bonus * $this->day);
      return $result;
    }
      //算天數
  public function __construct(int $day){
    $this->day = $day;
}
}

class Doctor extends Employee{
  public $salary = 100000;
  public $bonus = 2000;


  //改天數(呼叫變數)
  public function setDay($day){
    $this->day = $day;
  }
  


}

//2.退休支援的醫生
//  底薪           => 0
//  加班天數       => ?
//  每日加班薪水     => 5000
class RetiredDoctor extends Employee{
  public $salary = 0;
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
  $resultObj=new RetiredDoctor(29);
  echo $resultObj->getTotal();
  dd($resultObj);
  