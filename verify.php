<?php
$access_token = 'Pwr2qJRQrqfoIg40/sRZiJ1s7fG6ptpSuGHHP8UvgTlVyWPQDE1/+4bcMHEZvnHDRFVo2rQRY1OiG+iAxBuju2nNGpjhuRGtG1+RL4VBXBabK9qV8ZmnbijFGqgz4eGTIVOchyolgi23iyp3yfAO6wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
