<?php
// +----------------------------------------------------------------------
// | Test.测试模块
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <admin@abc3210.com> 2017/9/25
// +----------------------------------------------------------------------

namespace app\home\controller;

use EasyWeChat\Message\Text;
use program\face\Spouse;

class Test extends Base
{
    public function index()
    {
        $img_url = 'http://dev.meet.com/public/img/fuqi.jpg';
       $face = new Spouse($img_url);
       pr($face);
        //return $this->fetch('test:index');
    }

    public function ceshi()
    {
        $text = new Text();
        $data = $text->reply('测试一下');
        pr($data);
    }

    public function getCoupleComment($eye, $mouth, $nose, $eyebrow, $similarity)
    {
        $index = round(($eye + $mouth + $nose + $eyebrow) / 4);
        if ($index < 40) {
            $comment = "花好月圆";
        } else if ($index < 50) {
            $comment = "相濡以沫";
        } else if ($index < 60) {
            $comment = "情真意切";
        } else if ($index < 70) {
            $comment = "郎才女貌";
        } else if ($index < 80) {
            $comment = "心心相印";
        } else if ($index < 90) {
            $comment = "浓情蜜意";
        } else {
            $comment = "海盟山誓";
        }
        return "【夫妻相指数】\n得分：" . $index . "\n评语：" . $comment;
    }
}