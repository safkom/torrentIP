<?php
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$public_ip = '46.182.225.4';

echo $ip;

if ($ip === $public_ip) { // Check if the local IP matches
    header('Location: http://192.168.0.111:6420');
    exit();
} else {
    header('Location: http://'.$public_ip.':6420/');
    exit();
}
?>
