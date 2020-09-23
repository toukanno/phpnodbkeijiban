<?php
require_once("func/header.php");
session_start();
if (!$_SESSION['id']) {
  header('Location: login.php');
  exit;
}
if (!$_POST['line_number']) {
  header('Location: login.php');
  exit;
}

// // 投稿
// $line = $_SESSION['id'];
// $line.= "," . $_POST["comment"];
// $line.= "," . date('Y-m-d H:m:s');
// $line.= PHP_EOL;
// $data .= $line;
// fclose($handle);

?>
<!-- <meta http-equiv="refresh" content="1;URL=top.php"> -->
<!-- 返信を投稿しました。 -->

<!DOCTYPE html>
<title>返信内容</title>

<body>
  <div class="container">
    <h1>返信内容</h1>
    <div class="row">
      <h2><?php echo $_POST['login_id']."さんに返信する"; ?></h2>&nbsp;&nbsp;&nbsp;
      <h3><?php echo "内容:".$_POST['comment']; ?></h3>
      <form action="comment_insert_done.php" method="post">
        コメント
        <input type="text" name="comment">
        <input type="submit" value="投稿" class="btn  btn-outline-primary">
        <input type="hidden" value="<?php echo $_POST['line_number']; ?>" name="line_number">
      </form>
    </div>
  </div>
</body>