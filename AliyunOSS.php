<?php
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