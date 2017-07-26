<?php
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:tojPoVjG1wfe7JG';
$access_token = 'tGB5WH9AfUCs6PIE3QKcGkrnnvqgNDCwep/5ZsEABIesFgYnZH6SH0r4XTl7L+mS7zyrnSzlisMTC7ZWMmUTdCEdsUwFBya1Hm5LJaHH4oZm6fVioynJpfytNmc1nb2EeLso66pBaRgK45y0/eqwBwdB04t89/1O/w1cDnyilFU=';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$response = $bot->replyText('<reply token>', 'hello!');