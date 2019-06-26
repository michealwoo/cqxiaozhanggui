<?php

namespace app\shop\controller;

use think\Db;
use think\Request;

/**
 * VIP会员
 */
class Vip extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {   
        
        return view($this->style . 'Index/index');
    }

   
}