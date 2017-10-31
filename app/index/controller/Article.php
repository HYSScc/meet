<?php
// +----------------------------------------------------------------------
// | Article.文章页
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.meetoyou.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <1937832819@qq.com> 2017-10-08
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\admin\model\News;
use think\Request;

class Article extends Base
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $this->assign('active', 4);
    }

    //文章集
    public function index()
    {
        $news = new News();
        $newsList = $news::getWhereNews([],20,['news_time'=>'desc']);
        $page = $newsList->render();
        $this->assign('newsList', $newsList);
        $this->assign('page', $page);
        return $this->fetch();
    }

    public function info()
    {
        $n_id = input('id');
        $news = new News();
        $info = $news->getNews($n_id);
        if (empty($info)) {
            $this->error('文章不存在或已被删除', 'index');
        }
        $this->assign('info', $info);
        return $this->fetch();
    }

    /**
     * Author: wjf <1937832819@qq.com>
     * @return mixed
     */
    public function search()
    {
        $k = input("keyword");
        if (empty($k)) {
            $this->error('关键字为空');
        }
        $news = new News();
        $where['news_title|news_key'] = ['like', '%' . $k . '%'];
        $newsList = $news::getWhereNews($where, 20, ['news_time' => 'desc']);
        $page = $newsList->render();
        $this->assign('newsList', $newsList);
        $this->assign('keyword', $k);
        $this->assign('page', $page);
        return $this->fetch();
    }
}