<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $to      = empty($_POST['to']) ? 'example@example.com' : $_POST['to'];
  $subject = empty($_POST['subject']) ? 'テストサブジェクト' : $_POST['subject'];
  $message = empty($_POST['message']) ? 'テスト本文' : $_POST['message'];
  $from = empty($_POST['from']) ? 'example@example.com' : $_POST['from'];
  $headers = 'From: ' . $from . "\r\n";
  mb_send_mail($to, $subject, $message, $headers);

  $url = "http://${_SERVER['HTTP_HOST']}";
  header('Location: ' . $url);
  exit;
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta charset = "UFT-8">
  <title>お問い合わせ</title>
</head>
<body>
  <h1>お問い合わせの送信</h1>
  <form method="post">
    <label for="to">To:</label>
    <input type = "text" id="to" name ="to"><br/>
    <label for="subject">Subject:</label>
    <input type = "text" id="subject" name ="subject"><br/>
    <label for="message">Message:</label>
    <input type = "text" id="message" name ="message"><br/>
    <label for="from">From:</label>
    <input type = "text" id="from" name ="from"><br/>
    <input type = "submit" value ="送信">
  </form>
</body>
</html>
