# 思南荟积分中台接口封装

## Install

```
composer require kangdev/sinanhui -vvv
```

# Usage

```php
<?php
$config = [
    'channel_no' => 'dc808c5e48454f43b',
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

// 获取中台积分用户核销二维码
$server->getIntegralCode([
    'phone' => '15538586868'
]);

```