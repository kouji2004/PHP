<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
関数とは、あるまとまった処理を行い、値を返すものです。
 PHPには便利な関数がもとから組み込まれていて、それらは組み込み関数と呼ばれます。
「strlen」は組み込み関数の1つで、文字列の文字数を返します。
ここで、()の中に与える値を「引数」といいます。

他の組み込み関数も見てみましょう。
「count」は配列の要素の数を返す関数です。
「rand」は１つ目の引数と、２つ目の引数の間のランダムな整数を返します。
 他にもPHPの組み込み関数は多数ありますが、覚える必要はありません。
 目的に沿ってその都度便利な組み込みメソッドがないか検索して調べてみましょう。


 例1(count)
 $lesson array("1","2","3");
 echo count($lesson); →配列の要素の数を返す

例2(rand)
$lesson rand(1,4); → 1~4のランダムな整数を返す










  <?php

    $str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen($str);
    
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    echo count($array);
    
    echo '<br>';
    
    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10,15);
    
  ?>

</body>
</html>



