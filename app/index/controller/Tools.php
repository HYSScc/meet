<?php
// +----------------------------------------------------------------------
// | Tools.
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <1937832819@qq.com> 2017/10/27
// +----------------------------------------------------------------------

namespace app\index\controller;

class Tools extends Base
{
    //百度站长认证
    public function baiduVerify()
    {
        return $this->fetch('tools/baidu_verify_5BvCfjWUag');
    }
}