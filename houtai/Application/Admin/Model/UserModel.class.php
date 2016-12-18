<?php


namespace Admin\Model;
use Think\Model;

class UserModer extends Model {
//    protected $patchValidate = true;
//
//    protected $_validate = array(
//    array('name','require','商品名称必须填写！',1 ,'',3),
//    );
    private $_db='';
    public function __construct(){
        $this->_db=M('user');
    }
    public function getInsertUser(){
        if(post.name==''){
            return 1;
        }
    }
}