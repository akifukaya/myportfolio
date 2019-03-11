<?php
session_start();

require_once 'libs/qd/qdsmtp.php';
require_once 'libs/qd/qdmail.php';

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES);
}
function getToken() {
    return hash('sha256', session_id());
}

if (isset ($_SESSION["contact"])) {
    $contact = $_SESSION["contact"];

    $name    = $contact["name"];
    $email   = $contact["email"];
    $message = $contact["message"];
    $token   = $contact["token"];

    if ($token !== getToken()) {
        header("Location: contact.php");
        exit;
    }
}
else {
    header("Location: contact.php");
    exit;
}

if (isset ($_POST["send"])) {
    $body = <<<EOT
■Name
{$name}

■Email
{$email}

■Message
{$message}

EOT;

$mail = new Qdmail();
$mail -> errorDisplay(FALSE);
$mail -> smtpObject() -> error_display = FALSE;
$mail -> from("zd3F12@sim.zdrv.com", "portfolio");
$mail -> to("zd3F12@sim.zdrv.com", "管理者");
$mail -> subject("portfolio 問い合わせ");
$mail -> text($body);

$param = array (
    "host"     => "w1.sim.zdrv.com",
    "port"     => 25,
    "from"     => "zd3F12@sim.zdrv.com",
    "protocol" => "SMTP"
);

$mail -> smtp(TRUE);
$mail -> smtpServer($param);
$flag = $mail->send();

if ($flag == TRUE) {
    unset ($_SESSION["contact"]);

    header("Location: contact_done.php");
    exit;
}
else {
    header("Location: contact_error.php");
    exit;
}
}

if (isset($_POST["back"])) {
    header("Location: contact.php");
    exit;
}
?>


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
          <li><a href="contact.php"><img src="images/navi_waku/mail_waku.png" alt="contact" width="100px"></a></li>
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
          <h3>Send it?</h3>
          <p class="p_conf">以下の内容でよろしいでしょうか</p>
          <img src="images/post-kitte.png" alt="切手" class="post-kitte" width="200">
          <div class="contact">
          <table>
            <tr>
              <th>Name : </th>
              <td><?php echo h($name); ?></td>
            </tr>
            <tr>
              <th>E-Mail : </th>
              <td><?php echo h($email); ?></td>
            </tr>
            <tr>
              <th>Message : </th>
              <td><?php echo nl2br(h($message)); ?></td>
            </tr>
          </table>
          <form action="" method="post">
            <p class="conf_btn"><button type="submit" name="back" class="back_btn"><span><i class="fa fa-arrow-left"></i></span> back</button></p>
            <p class="conf_btn"><button type="submit" name="send" class="input_btn">send <span><i class="fa fa-paper-plane"></i></span></button></p>
          </form>
          </div>
        </div>
      </div>
      <a href="index.html">
      <img src="images/title.png" alt="fukaya" class="title-contact"></a>
      <img src="images/suisai04.png" alt="絵の具" class="suisai-contact">
    </section>
  </div>
  <footer>
      <div class="footer_contact">
        <p><small>&copy; Aki Fukaya.All Rights Reserved.</small></p>
      </div>
  </footer>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="js/style.js"></script>
</body>
</html>