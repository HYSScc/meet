<?php
// +----------------------------------------------------------------------
// | Member.会员功能
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <admin@abc3210.com> 2017/9/26
// +----------------------------------------------------------------------

namespace app\home\controller;

class Member extends Base
{
    //会员卡
    public function code()
    {
        return $this->fetch();
    }
}