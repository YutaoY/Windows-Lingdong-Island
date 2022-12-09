<?php
// 信息发送处理
$dbh = new PDO('mysql:host=数据库IP地址;dbname=数据库名', '数据库用户名', '数据库密码');

$mode = $_POST['mode'];
$user = $_POST['username'];
$text = $_POST['usertext'];
$fileimg = $_POST['fileimg'];

$nian = date("Y");
$yue = date("m");
$ri = date("d");
$shi = date("H");
$fen = date("i");
$miao = date("s");
$date = $nian . "-" . $yue . "-" . $ri .  " " . $shi . ":" . $fen;

if ($mode == 0) {
    if ($user == "" && $text == "") {
        echo '<script>sessionStorage.setItem("request", "no")</script>';
        exit();
    }
} else if ($mode == 1) {
    if ($fileimg == "") {
        echo '<script>sessionStorage.setItem("request", "no")</script>';
        exit();
    }
}

$dataArr = array("user" => $user, "text" => $text, "mode" => $mode, "img" => $fileimg, "time" => $date);
$dataJSON = addslashes(json_encode($dataArr, true));
$yuju = "INSERT INTO 数据库表(data) VALUES('{$dataJSON}')";
$cha = $dbh->prepare($yuju);
$cha->execute();
$n = $cha->rowCount();
if ($n == 1) {
    echo '<script>sessionStorage.setItem("request", "ok")</script>';
    exit();
}

echo '<script>sessionStorage.setItem("request", "err")</script>';
exit();

?>