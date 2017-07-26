<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:tojPoVjG1wfe7JG';
$access_token = 'tGB5WH9AfUCs6PIE3QKcGkrnnvqgNDCwep/5ZsEABIesFgYnZH6SH0r4XTl7L+mS7zyrnSzlisMTC7ZWMmUTdCEdsUwFBya1Hm5LJaHH4oZm6fVioynJpfytNmc1nb2EeLso66pBaRgK45y0/eqwBwdB04t89/1O/w1cDnyilFU=';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('tGB5WH9AfUCs6PIE3QKcGkrnnvqgNDCwep/5ZsEABIesFgYnZH6SH0r4XTl7L+mS7zyrnSzlisMTC7ZWMmUTdCEdsUwFBya1Hm5LJaHH4oZm6fVioynJpfytNmc1nb2EeLso66pBaRgK45y0/eqwBwdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '319c3f7ce26b0faf197ee09a08872bc1']);
$response = $bot->replyText('<reply token>', 'hello!');