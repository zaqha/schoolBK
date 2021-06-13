<?php

// 1.醫生
// 底薪  100000
// 加班天數 ?
// 加班費 2000

// 2.退休支援醫生
// 底薪  0
// 加班天數 ?
// 加班費 5000


class Doctor {
  public $salary = 100000;
  public $day = 0;
  public $bonus = 2000;
  public function __construct($day){
      $this->day = $day;
  }
  public function getTotal(){
      $result = $this->salary + ($this->bonus * $this->day);
      return $result;
  }

}

class RetiredDoctor extends Doctor{
  public $day = 0;
  public $bonus = 5000;

  public function getTotal(){
      $result =  $this->bonus * $this->day;
      return $result;
  }
}




// Q要發多少錢
// 醫生1 = new(10)
// 醫生2 = new(20)

// 支援醫生1 = new(20)
// 支援醫生2 = new(30)

// 要發多少錢?
$doctor= new Doctor(10+20);
$retiredDoctor= new RetiredDoctor(20+30);
echo $retiredDoctor->getTotal()+$doctor->getTotal();


// HW
// 第一步
// 建立醫師、支援醫師class


// 第二步
// 建立父類別
// 員工



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