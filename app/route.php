<?php
// +----------------------------------------------------------------------
// | ${NAME}.
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.abc3210.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: wjf <1937832819@qq.com> 2017/10/26
// +----------------------------------------------------------------------
//调用extend的路由类
$Route = new \Route;
$route_array = $Route->route_array();
$route_more = [
    //也可以这里添加路由规则
    '__domain__' => [
        'blog' => 'blog',

    ],
    /** start index模块路由  */
    //首页
    '' => ['index/index', ['ext' => ''], []],
    //主页面
    'hot' => ['index/index/hot', ['ext' => 'html'], []],
    '[cat]' => [
        '$' => ['index/cat/index', ['ext' => 'html'], []],
        'info/<cat_id>$' => ['index/cat/info', ['ext' => 'html'], ['cat_id' => '\d+']],
    ],
    '[article]' => [
        '$' => ['index/article/index', ['ext' => 'html'], []],
        'info/<id>$' => ['index/article/info', ['ext' => 'html'], ['id' => '\d+']],
        'search$' => ['index/article/search', ['ext' => 'html'], ['id' => '\d+']],
    ],

    //小功能
    'vip' => 'index/effects/vip',
    'fall' => 'index/effects/fall',
    //工具
    'robots.txt' => ['index/tools/robots', ['ext' => 'txt'], []],
    'baidu_verify_MZ1QlgcMwh' => 'index/tools/baiduVerify',
    /** end index模块路由  */
];
$route = array_merge($route_more, $route_array);
return $route;