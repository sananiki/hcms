<?php
namespace app\admin\controller;
use think\controller;
class Index extends controller
{
    protected function _initialize(){
    // 获取当前用户ID
    define('UID',is_login());
    if( !UID ){// 还没登录 跳转到登录页面
        $this->redirect('login/index');
    }
    /* 读取数据库中的配置 */
    } 
}
