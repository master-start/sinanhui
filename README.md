# 思南荟积分中台接口封装

## Install

```
composer require kangdev/sinanhui -vvv
```

# Usage

```php
<?php
$config = [
    'channel_no' => 'your-channel_no',
    'url' => 'your-url',
    'debug' => true,
    'log' => [
        'name' => 'sinanhui',
        'file' => __DIR__ . '/sinanhui.log',
        'level' => 'debug',
        'permission' => 0777,
    ],
];

$server = new \Kangdev\Sinanhui\Server($config);

// 同步增加or减少积分接口
$server->action_integral([
    'phone' => '15538586868',
    'integral' => 500,
    'datetime' => "2023-05-23 19:25:30",
    'order_no' => "hdj1684376288662783891",
]);

// 获取中台积分用户核销二维码
$server->action_integral([
    'phone' => '15538586868'
]);

```