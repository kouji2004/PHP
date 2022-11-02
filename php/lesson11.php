<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
問題
for文を用いて1から1000までの数字をechoしてください。
ただし、501以上の数字を表示しないようにbreak文を用いてfor文を抜けてください。

※echoするときに改行も入れるようにしてください。


  <?php

    // この下にfor文を書いてください
    for($i=1;$i<=1000;$i++){
      if($i>=501){
        echo $i."<br>";
        break;
      }
      echo $i."<br>";
    }
    
  ?>

</body>
</html>