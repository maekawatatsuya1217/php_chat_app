<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>php chat app</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">php chat app</div>
    <div class="header-right">
      <ul>
        <li>カテゴリー1</li>
        <li>カテゴリー2</li>
        <li class="selected">カテゴリー3</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message"></div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php
        echo $_POST["name"];
      ?>

      <div class="form-item">■年齢</div>
      <?php
        echo $_POST["age"];
      ?>

      <div class="form-item">■ 内容</div>
      <?php
        echo $_POST["body"];
      ?>
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