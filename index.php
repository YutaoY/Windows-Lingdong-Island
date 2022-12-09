<?php
// 初始化 可不用
$dbh = new PDO('mysql:host=数据库IP地址;dbname=数据库名', '数据库用户名', '数据库密码');

$yuju = "truncate table 数据表名";
$cha = $dbh->prepare($yuju);
$cha->execute();
?>
<script>
    setTimeout(function() {
        location.href = "index.html";
    }, 1000)
</script>