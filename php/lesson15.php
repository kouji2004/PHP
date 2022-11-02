<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
関数を作ってみよう
自分で関数を作成することもできます。
重複する処理を一箇所にまとめることで、コードに変更があった時に関数の中身を変更するだけで全使用箇所に変更を適用することができます。
関数の定義の仕方など、詳しくは次のスライド以降で学習していきましょう。

関数の作り方
関数を作るには「function 関数名(){ 処理 }」という書き方をします。
関数名は自由につけることが出来ます。
関数は「関数名()」というように()をつけて呼び出すことができます。

引数
関数を呼び出す際、関数に値を渡すと、
関数内でその値を利用することができます。
この値を「引数」と呼びます。
引数を関数内で使うには、それを受け取るための「仮引数」を、
関数の定義時に指定しておく必要があります。
仮引数が複数ある場合はカンマ（,）を用いて指定します。






問題１
helloという名前の関数を定義してください。
Hello, world!とechoする

関数helloを呼び出してください。



問題２
printRectangleAreaという名前の関数を定義してください。
・1つ目の仮引数を$heightとする
・2つ目の仮引数を$widthとする
・$heightと$widthを掛け算した値をechoする

引数を5、10として関数printRectangleAreaを呼び出してください。

  <?php

    // 関数helloを定義してください
    function hello(){
      echo "Hello, world!";
    }
    
   // 関数helloを呼び出してください
   hello(); 
    
    echo '<br>';
    // 関数printRectangleAreaを定義してください
    function printRectangleArea($height,$width){
      echo $height*$width;
    }
    
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
    printRectangleArea(5,10);
    
  ?>

</body>
</html>



