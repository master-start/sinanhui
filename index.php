<?php
require_once __DIR__ . '/vendor/autoload.php';

$config = [
    'channel_no' => 'dc808c5e48ba28f24ff43b',
    'url' => 'https://luya.huidaojia.net',
];

$server = new \Kangdev\Sinanhui\Server($config);

// 同步增加or减少积分接口
$res = $server->action_integral([
    'phone' => '15538586868',
    'integral' => 500,
    'datetime' => "2023-05-23 19:25:30",
    'order_no' => "hdj168291".rand(10,1000),
]);

echo $res;