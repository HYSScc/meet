<?php
// +----------------------------------------------------------------------
// | Index.
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <admin@abc3210.com> 2017/9/29
// +----------------------------------------------------------------------

namespace app\live\controller;

class Index extends Base
{
    /**
     * home
     * Author: wjf <1937832819@qq.com>
     * @return mixed
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 关于
     * Author: wjf <1937832819@qq.com>
     */
    public function about()
    {
        return $this->fetch();
    }
}