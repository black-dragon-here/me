<?php
$data = json_decode(file_get_contents("php://input"), true);

$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $data['userAgent'];
$url = $data['url'];
$referrer = $data['referrer'];
$time = date("Y-m-d H:i:s");

$log = "$time | IP: $ip | URL: $url | Referrer: $referrer | User-Agent: $userAgent\n";

file_put_contents("logs.txt", $log, FILE_APPEND);
?>