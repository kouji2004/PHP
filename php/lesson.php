<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<!--予備知識 -->
<!--
  変数を使ってでの計算の方法
⓵足し算　→　+=
⓶引き算　→　-=
⓷掛け算　→　*=
-->

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

   <!-- ・$xの値に10を足し、$xを上書きしてください。
・$xをechoしてください。 -->
  <?php
    $x += 10;
    $x;
    
  ?>

  <br>

  <!-- ・$yに5をかけて、$yを上書きしてください。
・echoを用いて$yを出力してください。 -->
  <?php
    $y *= 5;
    $y;
    
  ?>

  <br>

  <!-- ・$aに1を足し、$aを上書きしてください。
・echoを用いて$aを出力してください。 -->
  <?php
    $a++;
    $a;
    
  ?>

  <br>
  
  <!-- ・$bから1を引き、$bを上書きしてください。
・echoを用いて$bを出力してください。 -->
  <?php
    $b--;
    $b;
    
  ?>

</body>
</html>
