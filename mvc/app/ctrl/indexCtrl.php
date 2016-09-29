<?php
namespace app\ctrl;
use core\lib\model;

class indexCtrl extends \core\imooc
{
    public function index()
    {
        $data="欢迎使用李江pro框架";
        $this->assign('data',$data);
        $this->display('index.html');
    }

}