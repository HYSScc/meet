<?php
// +----------------------------------------------------------------------
// | index.
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <1937832819@qq.com> 2017/10/25
// +----------------------------------------------------------------------

namespace app\blog\controller;

use app\blog\lib\Base;

class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}