<?php
// var_dump($_POST);
// exit();

// データのチェック
if (
    !isset($_POST['no']) || $_POST['no'] == '' ||
    // !isset($_POST['day']) || $_POST['day'] == '' ||
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['brithday']) || $_POST['brithday'] == '' ||
    !isset($_POST['recoder']) || $_POST['recoder'] == '' ||
    !isset($_POST['memo']) || $_POST['memo'] == ''
) {
    exit('ParamError');
}

//入力
$no = $_POST['no'];
// $day = $_POST['day'];
$name = $_POST['name'];
$brithday = $_POST['brithday'];
$recoder = $_POST['recoder'];
$memo = $_POST['memo'];

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d08_05_prod;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// SQL文
// $sql = 'INSERT INTO contract_user(id, name, gender, created_at, updated_at) VALUES(NULL, :name, :gender, sysdate(), sysdate())';
$sql = 'INSERT INTO `user_info`(`id`, `no`, `name`, `brithday`, `recoder`, `memo`, `created_at`, `updated_at`) VALUES (NULL,:no,:name,:brithday,:recoder,:memo,sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':no', $no, PDO::PARAM_STR);
// $stmt->bindValue(':day', $day, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':brithday', $brithday, PDO::PARAM_STR);
$stmt->bindValue(':recoder', $recoder, PDO::PARAM_STR);
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);


// SQLを実行
$status = $stmt->execute();

if ($status == false) {
    // データ登録失敗次にエラーを表示
    exit('sqlError:' . $error[2]);
    $error = $stmt->errorInfo();
} else {
    // 登録ページへ移動
    header('Location:input.php');
}
