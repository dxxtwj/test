<?php
// 适配器模式
class tianqi
{
    public static function show()
    {
        $today = ['tep' => 28, 'wind' => 7, 'sun' => 'sunny'];
        return serialize($today);
    }
}
// 有一天 java的人来了，需要返回它接受的数据，这时候需要增加适配器
class AdapterTianqi extends tianqi {
    public static function show()
    {
        $today =  parent::show(); // TODO: Change the autogenerated stub
        $today = unserialize($today);
        $today = json_encode($today);
        return $today;
    }
}
// php客户端调用
$tp = unserialize(tianqi::show());
var_dump($tp);
echo '<br />';
// java客户端调用
$tp = AdapterTianqi::show();
var_dump($tp);
