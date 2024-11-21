<?php
// JSON形式でデータを受け取る
$data = json_decode(file_get_contents('php://input'), true);
if (isset($data['notes'])) {
    file_put_contents('notes.json', json_encode($data)); // JSONファイルに保存
    echo "記録が保存されました。";
} else {
    echo "データが正しく送信されていません。";
}
?>
