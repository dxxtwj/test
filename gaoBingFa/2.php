<?php
var_dump($_REQUEST);exit;
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->auth(123456);