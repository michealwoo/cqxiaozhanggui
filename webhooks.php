<?php

/**
 * GETEE HOOK 测试服务器端代码
 *
 * @author   hb1707 <hb1707@live.cn>
 */



//如果已经clone过,则直接拉去代码

$res=shell_exec('cd /www/wwwroot/wechatshop.vrccn.com && git pull');

echo $res;

?>