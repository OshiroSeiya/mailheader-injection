<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
  $from    = empty($_POST['from']) ? 'example@example.com' : $_POST['from'];
  $to      = empty($_POST['to']) ? 'example@example.com' : $_POST['to'];
  $subject = empty($_POST['subject']) ? 'タイトル' : $_POST['subject'];
  $message = empty($_POST['message']) ? 'テスト本文' : $_POST['message'];
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
  <title>メールヘッダーインジェクションのサンプル</title>
</head>
<body>
  <h1>メールヘッダーインジェクションのサンプル</h1>
  <p>
    Burp の Intercept などで from の値を<span><b>example-from%40example.com%0d%0aCc:%20example-cc%40example.com</b></span>に変更すると<br />
    <a href=<?= "http://${_SERVER['HTTP_HOST']}:1080"?> target="_blank" rel="noreferrer noopener">メーラー</a>でヘッダーが分割されてることを確認できます。
  </p>
  <form method="post">
    <label for="from">From:</label>
    <input type = "text" id="from" name="from" value="example-from@example.com"><br/>
    <label for="to">To:</label>
    <input type = "text" id="to" name="to" value="example-to@example.com"><br/>
    <label for="subject">タイトル:</label>
    <input type = "text" id="subject" name="subject" value="タイトル"><br/>
    <label for="message">本文:</label>
    <input type = "text" id="message" name="message" value="テスト本文"><br/>
    <input type = "submit" value ="送信">
  </form>
</body>
</html>
