<?php
//1. POSTデータ取得
$image  = $_FILES['image'];
$naiyou = $_POST['naiyou'];

$image_name = $image['name'];
$image_type = $image["type"];
$image_data = file_get_contents($image["tmp_name"]);

echo '<pre>';
var_dump($_POST);
var_dump($image);
// echo $image_data;
echo '</pre>';


if($_FILES['image']['name']){
    echo $_FILES['image']['name'];
}

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare(
                'INSERT INTO gs_an_table
                    (image_name, image_data, image_type, naiyou, indate)
                VALUES
                    (:image_name,:image_data,:image_type, :naiyou, sysdate());'
                );
$stmt->bindValue(':image_name', $image_name, PDO::PARAM_STR);
$stmt->bindValue(':image_data', $image_data, PDO::PARAM_STR);
$stmt->bindValue(':image_type', $image_type, PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}