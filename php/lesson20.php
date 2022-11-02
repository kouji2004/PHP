セレクトボックスの作り方
セレクトボックスをつくるには図のように<select>タグの中に<option>タグを並べます。
<option>タグの中身が選択肢として表示されます。

選んだ選択肢の値を渡そう
セレクトボックスの値の渡し方を見てみましょう。
<select>タグには「$_POST」で値を受け取るためのname属性を指定します。
<option>タグのvalue属性が送信される値です。


⓵HTML
<select name ="age">
<option value="未設定">選択してください</option>
<option value="20代">20代</option>
<option value="30代">30代</option>
<select>

⓶HTMLからのデータの受け取り方
<?php 
 $_PHP["age"];
 echo age;

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php $_POST['name'];
      
      echo age;
      ?>
      
      <div class="form-item">■ 年齢</div>
      <!-- ageを受け取りechoしましょう --> 
      <?php  $_POST["age"];
      echo age;
      ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>