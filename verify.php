<?php
$access_token = 'tGB5WH9AfUCs6PIE3QKcGkrnnvqgNDCwep/5ZsEABIesFgYnZH6SH0r4XTl7L+mS7zyrnSzlisMTC7ZWMmUTdCEdsUwFBya1Hm5LJaHH4oZm6fVioynJpfytNmc1nb2EeLso66pBaRgK45y0/eqwBwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;