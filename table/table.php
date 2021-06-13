<?php
include '../common/dd.php';

$table= [
  "氫","空","空","空","空","空","空","空","空","空","空","空","空","空","空","空","空","氦",
  "鋰","鈹","空","空","空","空","空","空","空","空","空","空","硼","碳","氮","氧","氟","氖",
  "鈉","鎂","空","空","空","空","空","空","空","空","空","空","鋁","硅","磷","硫","氯","氬",
  "鉀","鈣","鈧","鈦","釩","鉻","錳","鐵","鈷","鎳","銅","鋅","鎵","鍺","砷","硒","溴","氪",
  "銣","鍶","釔","鋯","鈮","鉬","鍀","釕","銠","鈀","銀","鎘","銦","錫","銻","碲","碘","氙",
  "銫","鋇","鑭","鉿","鉭","鎢","錸","鋨","銥","鉑","金","汞","鉈","鉛","鉍","釙","砹","氡",
  "鈁","鐳","錒","鑪","杜","喜","波","黑","䥑","鐽","錀","鎶","鉨","鈇","鏌","鉝","田","奧",
];

$en=[
  "H","空","空","空","空","空","空","空","空","空","空","空","空","空","空","空","空","He",
  "Li","Be","空","空","空","空","空","空","空","空","空","空","B","C","N","O","F","Ne",
  "Na","Mg","空","空","空","空","空","空","空","空","空","空","Al","Si","P","S","Cl","Ar",
  "K","Ca","Sc","Ti","V","Cr","Mn","Fe","Co","Ni","Cu","Zn","Ga","Ge","As","Se","Br","Kr",
  "Rb","Sr","Y","Zr","Nb","Mo","Tc","Ru","Rh","Pd","Ag","Cd","In","Sn","Sb","Te","I","Xe",
  "Cs","Ba","系","Hf","Ta","W","Re","Os","Ir","Pt","Au","Hg","Tl","Pb","Bi","Po","At","Rn",
  "Fr","Ra","系","Rf","Db","Sg","Bh","Hs","Mt","Ds","Rg","Cn","Nh","Fl","Mc","Lv","Ts","Og",
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  div{
    border: black solid 2px;
  }
  </style>
</head>
<body>

<table>
<?php for ($i = 0; $i <= 6; $i++) : ?>
<tr>
<?php
for ($j = 0; $j <= 17; $j++) {
  $element = ($i* 18 + $j);
  if($table[$element]=="空"){
    echo "<td></td>";
  }else{
    echo "<td><div>$table[$element] <br> $en[$element]</div></td>";
  }
  }
?>
</tr>
<?php endfor; ?>

</table>

</body>
</html>