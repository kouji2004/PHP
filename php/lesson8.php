<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
問題
⓵$scoresという連想配列を作り、
数学というキーに数字の70を、
英語というキーに数字の90を、
国語というキーに数字の80を
入れてください。

⓶$scoresの'国語'に5を足してください。

  <?php

    // この下に連想配列を作ってください
    $scores = array("数学"=>70,"英語"=>90,"国語"=>80);
    $scores["国語"]  +=5;
    echo $scores["国語"];
  ?>

</body>
</html>