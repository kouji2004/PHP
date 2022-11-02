<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

foreach文とは、配列または連想配列に対して、先頭のデータから順に繰り返し処理を行うための命令です。
以下のように配列のデータを１つずつ取り出して処理を行うことが出来ます。
「as」の後ろの変数に、ループの度にデータが先頭から順に代入されていきます。asの後ろの変数名は何を指定しても大丈夫です。






  <?php

    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    // この下にforeach文を書いてください
    foreach($scores as $key=>$value ){
      echo $key."は".$value."点です"."<br>";
    }
    
  ?>

</body>
</html>

