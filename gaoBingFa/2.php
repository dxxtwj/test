<?php
ini_set("display_errors", "off");
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->auth(123456);



while (true) {
    if ($redis->lLen('ooo') >= 100) {// 大于或者等于xxx 就提示队列已满 固定队列长度
        echo '队列已满';
        exit;
    }
    $key = 'sss';
    $redis->incr('num');
    $redis->set($key, 1);
    //设置键的过期时间
    $redis->setTimeout($key, 1000);
    if ($redis->exists('sss')) {
        $int = $redis->lPush('ooo', '1');
        echo $int;
    } else {
        break;
    }
}

