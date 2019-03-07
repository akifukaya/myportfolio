<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="ポートフォリオ Aki Fukaya">
  <meta name="keywords" content="portfolio,web,ポートフォリオ,ウェブ制作">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Aki Fukaya</title>
  <!-- 初期化 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/10up-sanitize.css/8.0.0/sanitize.min.css">
  <!-- cssの読み込み -->
  <link rel="stylesheet" href="css/style.css">
  <!-- font-awesomeの読み込み -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- animeteの読み込み -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" type="text/css" />
  <!-- faviconの読み込み -->
  <link rel="icon" href="images/favicon.ico">
</head>
<body>
  <div class="wrapper">
    <div class="container-header">
    <header>
<!-- PC用メニュー -->
      <nav>
        <ul>
          <li><a href="index.html"><img src="images/navi/top.png" alt="top" width="100px"></a></li>
          <li><a href="work.html"><img src="images/navi/work.png" alt="work" width="100px"></a></li>
          <li><a href="skill.html"><img src="images/navi/skill.png" alt="skill" width="100px"></a></li>
          <li><a href="profile.html"><img src="images/navi/profile.png" alt="profile" width="100px"></a></li>
          <li><a href="contact.html"><img src="images/navi_waku/mail_waku.png" alt="contact" width="100px"></a></li>
        </ul>
      </nav>
<!-- モバイル用メニュー -->
      <div id="navToggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </header>
    </div>
    <div class="container-main">
      <div class="main-img">
        <img class="ebe" src="images/jinjya.png" alt="神社">
      </div>
      <section>
        <div class="container-contact">
          <div class="container-contact__box shadow">
            <h3>Contact me</h3>
            <p>*すべてご入力ください</p>
            <div class="contact">
              <form action="" method="post">
                <p>Name* <span class="error"></span></p>
                <input type="text" name="name" size="41" required>
                <p>E-Mail* <span class="error"></span></p>
                <input type="email" name="email" size="41" required>
                <p>Message* <span class="error"></span></p>
                <textarea name="textarea" cols="40" rows="5" required></textarea></p>
                <p><input type="submit" value="send" class="input_send"></p>
              </form>
            </div>
            <div class="mydata">
              <img src="images/name_stamp.png" width="250" alt="連絡先">
            </div>
            <div class="sns">
              <ul>
                <li>
                  <a href="https://twitter.com/FukkaTw" target="_blank"><img src="images/twitter.png" width="50" alt="twitter"></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/hatenaru.insta" target="_blank"><img src="images/insta.png" width="50" alt="insta"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div ><a href="contact_conf.html">
        <img src="images/title.png" alt="fukaya" class="title-contact"></a></div>
        <img src="images/suisai04.png" alt="絵の具" class="suisai-contact">
    </section>
  </div>
  <footer>
      <div class="footer_contact">
        <p><small>&copy; Aki Fukaya.All Rights Reserved.</small></p>
      </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/style.js"></script>
</body>
</html>