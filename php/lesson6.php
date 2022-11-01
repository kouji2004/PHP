<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

予備知識
caseとdefaultはコロン（:）を使う


問題（switch文を用いて、占いを行う）

⓵$remainderが0の場合は
　大吉です。
⓶1の場合は
　中吉です。
⓷2の場合は
　小吉です。
⓸それ以外の場合(default)は
　凶です。












解答
  <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 11;

  
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
          $remainder = $num%3;  
 
    // switch文を用いてください

    switch($remainder){
      case 0:
      echo "大吉です。";
      break;
      
      case 1:
      echo "中吉です。";
      break;
      
      case 2:
      echo "小吉です。";
      break;
      
      default:
      echo "凶です。";
      break;
    }
  
  ?>

</body>
</html>