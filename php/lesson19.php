送信ボタンをつくろう
送信ボタンをつくるには<input type="submit">を用います。
value属性に指定された値がボタン上に表示されます。

フォームのデータを受け取ろう
フォームで送信した値を受け取るには「$_POST」を使用します。
「$_POST」は連想配列になっています。[ ]の中に、<input>と<textarea>のname属性に指定した値を入れることで、
  それぞれの送信した値を受け取ることが出来ます。

コード例(phpでフォームでデータの受け取り方)
      <!-- nameを受け取りechoしましょう -->
      <?php echo $_POST["name"]; ?>
      <div class="form-item">■ 内容</div>
      <!-- bodyを受け取りechoしましょう -->
      <?php echo $_POST("body"); ?>

送信の方法(html)
<input type="submit" value="送信">




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
      <!-- nameを受け取りechoしましょう -->
      <?php echo $_POST["name"]; ?>
      <div class="form-item">■ 内容</div>
      <!-- bodyを受け取りechoしましょう -->
      <?php echo $_POST["body"]; ?>
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
</html>l>