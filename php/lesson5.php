<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>




問題(⓵～⓸を条件分岐を使ってコードを記述)
    ⓵xは3の倍数かつ7の倍数です。
    ⓶xは3の倍数ですが7の倍数ではありません。
    ⓷xは7の倍数ですが3の倍数ではありません。
    ⓸xは7の倍数でも3の倍数でもありません。












　　解答
  <?php
    $x = 1071;

 

    if($x%7==0 || $x%3==0){
      echo "xは3の倍数かつ7の倍数です。";
    }else if(!$x%7==0 || $x%3==0){
      echo "xは3の倍数ですが7の倍数ではありません。";
    }else if($x%7==0 || !$x%3==0){
      echo "xは7の倍数ですが3の倍数ではありません。";
    }else{
      echo "xは7の倍数でも3の倍数でもありません。";
    }
    
  ?>

</body>
</html>