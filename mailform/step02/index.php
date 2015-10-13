<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
</head>
<body>
  <h1>送信データをCSVに保存する</h1>
  <section>
    <form action="./csv.php" method="post">
      <p>名前 : <input type="text" value="" name="name"></p>
      <p>コメント : <textarea value="" name="comment"></textarea></p>
      <input type="submit" value="csv生成">
    </form>
  </section>
</body>
</html>

