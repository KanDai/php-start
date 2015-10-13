<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
</head>
<body>
<?php

$datas = $_POST;

// 日付を取得して先頭に追加
array_unshift( $datas, date('Y/m/d H:i'));

// 書き込み用ファイルオープン。末尾に追記していく
$fp = fopen('./data.csv', 'a');

$write = fputcsv($fp, $datas);

if( !empty($write) ){
  echo '<h1>書き込み完了</h1>';
} else {
  echo '<h1>書き込み失敗</h1>';
}

fclose($fp);

?>

<a href="data.csv">ダウンロード</a>

</body>
</html>