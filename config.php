//php5以下连接方法
<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "12345678";
    $dbdatabase = "productsdb";
    $db = mysql_connect($dbhost, $dbuser, $dbpassword);
    mysql_select_db($dbdatabase, $db);

    $sql = "SELECT * FROM products;";
    $result = mysql_query($sql);

    while ($row = mysql_fetch_assoc($result))
    {
        echo $row['description']."<br/>";
    }
?>

//mysqli连接方法
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "productsdb";

// 创建连接
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("连接失败: " . mysqli_connect_error());
}

$mysql = "SELECT * FROM products;";
$result = mysqli_query($link, $mysql);

if (mysqli_num_rows($result) > 0) {
    // 输出数据
    while($row = mysqli_fetch_assoc($result)) {
        echo " 产品: " . $row["product"]. " 描述：" .  $row["description"]."<br>";
    }
} else {
    echo "0 结果";
}

mysqli_close($link);
?>
