<?php

require_once 'config.php';

session_start();
$uName = $_POST['username'];
$pWord = $_POST['password'];

//$datenow = Date('Y-m-d H:i:s');
$qry = "SELECT *
FROM `user` u
WHERE u.username='" . $uName . "' AND u.password='" . $pWord  ."'";

$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row = mysql_fetch_assoc($res);
if ($num_row == 1) {
    echo 'true';
    $id = $row['id'];
    // mysql_query("update user set last_login = '$timeNdate' WHERE (`usrid`='$id')");
    $_SESSION['uName'] = $row['username'];
    // $_SESSION['oId'] = $row['usrid'];
    // $_SESSION['auth'] = $row['oauth'];
    // $_SESSION['posID'] = $row['posid'];
} else {
    echo 'false';
}