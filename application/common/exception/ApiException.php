<?php
/**
 * Created by PhpStorm.
 * User: liliuwei
 * Date: 2017/2/14 我去，情人节，886214
 * Time: 1:03
 */

namespace app\common\exception;


/**
 * 404时抛出此异常
 */
class ApiException extends BaseException
{
    public $code = 404;
    public $msg = 'global:your required resource are not found';
    public $errorCode = 10001;
}