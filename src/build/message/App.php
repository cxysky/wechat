<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDPHP framework]
 * |      Site: www.hdphp.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace Houdunwang\WeChat\build\message;

use Houdunwang\WeChat\build\Base;

/**
 * 消息管理
 * Class Message
 *
 * @package Houdunwang\WeChat\build
 */
class App extends Base
{
    use  Event, Basic, Send, SendAll;
}
