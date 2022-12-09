<?php
// 信息返回处理

$code = $_GET['code'];
$requestID = $_GET['requestID'];

if (!isset($requestID)) {
    header("Content-type: text/html; charset=utf-8");
    echo '参数错误.';
    exit;
}

$dbh = new PDO('mysql:host=数据库IP地址;dbname=数据库名', '数据库用户名', '数据库密码');
$yuju = "SELECT * FROM 数据表名";
$cha = $dbh->prepare($yuju);
$cha->execute();
$shuju = $cha->fetchAll();
foreach ($shuju as $key => $value) {
    if ($requestID == $value['id']) {
        $dataArr = array("id" => $value['id'], "data" => $value['data']);
        $data = array("RequestStatus" => "success", "RequestData" =>  $dataArr);
        echo $code . '(' . json_encode($data) . ')';
        exit;
    }
}
$data = array("RequestStatus" => "fail");
echo $code . '(' . json_encode($data) . ')';
exit;

?>