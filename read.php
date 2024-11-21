<?php
// data.txt の絶対パスを指定
$filePath = "data/data.txt";

// ファイルの存在を確認
if (file_exists($filePath)) {
    // fopen でファイルを開く
    $file = fopen($filePath, "r"); // "r" は読み取り専用モード
    
    if ($file) {
        echo "<h1>ファイルの内容:</h1>";
        echo "<pre>";
        
        // ファイル内容を1行ずつ読み込む
        while (($line = fgets($file)) !== false) {
            echo htmlspecialchars($line, ENT_QUOTES, 'UTF-8'); // HTMLエスケープして出力
        }
        
        echo "</pre>";
        
        // ファイルを閉じる
        fclose($file);
    } else {
        echo "ファイルを開けませんでした。";
    }
} else {
    echo "指定されたファイルが見つかりません: $filePath";
}
?>
