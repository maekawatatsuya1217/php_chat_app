<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>php chat app</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Chat app</div>
    <div class="header-right">
      <ul>
        <li>カテゴリー1</li>
        <li>カテゴリー2</li>
        <li class="selected">カテゴリー3</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">new chat</div>
      <form action="sent.php" method="post">
        <div class="form-item">名前</div>
        <input type="text" name="name">
        <div class="form-item">年齢</div>
        <select name="age">
          <option value="未選択">年齢を選択してください</option>
          <option value="10代~30代">10代~30代</option>
          <option value="40代~60代">40代~60代</option>
          <option value="70代~90代">70代~90代</option>
        </select>
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>
        <input type="submit" value="送信">
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>カテゴリー1</li>
        <li>カテゴリー2</li>
        <li>カテゴリー3</li>
      </ul>
    </div>
    <div class="like-box">
      php chat app<br>This app is an application written in php.<br>Share your opinions and feelings and talk to many people!
    </div>
  </div>
</body>
</html>