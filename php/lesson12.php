<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
予備知識
ループそのものを完全に抜けてしまうbreak文に対して、continue文は現在の周だけをスキップし、ループそのものは継続して実行します。
continue文もfor, while, foreachなどの繰り返し文の中で利用できます。



  <?php

    // この下にfor文を書いてください
    for($i=1;$i<=100;$i++){
      if($i%3==0){
        continue;
        echo $i."<br>";
      }
      echo $i."<br>";
    }
    
  ?>

</body>
</html>