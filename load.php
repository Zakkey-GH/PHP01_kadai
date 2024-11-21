<?php
if (file_exists('notes.json')) {
    $data = file_get_contents('notes.json');
    echo $data; // JSONデータを返す
} else {
    echo json_encode(['notes' => []]);
}
?>
