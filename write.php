<?php
//文字作成
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$c  = ",";

//文字作成（日付）
$str = date("Y-m-d H:i:s");
$str .= $c.$name.$c.$mail.$c.$age;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); //.は文字と変数をくっつける 
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<form action="read.php" method="post">
    <input type="submit" valuea="data.txt を確認">


</form>

<?=$str?>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>