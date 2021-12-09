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
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>
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
      php chat app
    </div>
  </div>
</body>
</html>