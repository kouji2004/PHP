テキストボックスをつくろう
テキストボックスをつくるにはHTMLの<input type="text">を使います。
name属性は入力された値を取得するときに使う名前です。
後にフォームのデータを受け取るときに使用します。
<input>タグは閉じタグが必要ないことに注意しましょう。


改行を含む文章のためのテキストボックスをつくるにはHTMLの<textarea>タグを用います。
<input>タグと同様にname属性に、入力値を取得するときに使う名前を指定します。
<textarea>タグは閉じタグが必要なので注意してください。




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
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <!-- この下にinputタグを書いていきましょう -->
        <input type="text",name="name">
        
        <div class="form-item">内容</div>
        <!-- この下にtextareaタグを書いていきましょう -->
        <textarea name="body">
          
        </textarea>
        
      </form>
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
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>