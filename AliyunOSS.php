<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 * @copyright Copyright (c) 2013 suncky.com all rights reserved.
 */
namespace suncky\oss;

/**
 * Class AliyunOSS
 * @package suncky\oss
 * @author Choate <choate.yao@gmail.com>
 */
class AliyunOSS
{
    function __construct() {
        include_once __DIR__ . DIRECTORY_SEPARATOR . 'aliyun.php';
    }
}