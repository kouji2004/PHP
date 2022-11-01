<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

練習１
$names = array("ミウラ","モウラ","カウラ");
echo $names[0];
結果→ミウラ

練習２(配列に値を追加)
$names = array("ミウラ","モウラ","カウラ");
$names[] = "エウラ";　解説：配列の末尾に値を追加
echo $names[4];
結果→エウラ

練習3(上書き)
$names = array("ミウラ","モウラ","カウラ");
echo $names[1];
結果→モウラ
$names[1]="フウラ";　解説:配列1番目を上書きする
echo $name[1];
結果→フウラ






  <?php

    // この下に配列を作ってください
$colors = array("赤","青","黄");
echo $colors[0];

 $colors[] = "白";
echo $colors[3];
  ?>

</body>
</html>