<?php
/**
 * Created by PhpStorm.
 * User: liliuwei
 * Date: 2020/1/28
 * Time: 16:33
 */
namespace app\platform\controller;

class Index extends Base
{
    protected $noNeedLogin = [];
    
    public function index()
    {

        return $this->fetch();
    }

}