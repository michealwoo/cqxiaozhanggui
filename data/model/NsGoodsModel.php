<?php

namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品表
 * @author Administrator
 *
 */
class NsGoodsModel extends BaseModel 
{

    protected $table = 'ns_goods';
    protected $rule = [
        'goods_id'  =>  '',
        'description'  =>  'no_html_parse',
        'goods_spec_format'  =>  'no_html_parse'
    ];
    protected $msg = [
        'goods_id'  =>  '',
        'description'  =>  '',
        'goods_spec_format'  =>  ''
    ];
    /**
     * (non-PHPdoc)
     * @see \data\model\BaseModel::save()
     */
    public function save($data = [], $where = [], $sequence = null){
        $retval = parent::save($data, $where, $sequence);
        if($retval)
        {
            //$this->addLog($data, $where, $sequence);
        }
        return $retval;
    }
    /**
     * 添加日志(针对父类save方法)
     * @param unknown $data
     * @param unknown $where
     * @param unknown $sequence
     */
    public function addLog($data, $where, $sequence){
        $user_log = new UserLogModel();
        if(empty($where))
        {
            $user_log->addUserLog(1, "添加商品:".json_encode($data));
        }else{
            $user_log->addUserLog(1, "修改商品:".json_encode($data));
        }
    }
  
    

}