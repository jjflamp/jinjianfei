<?php
namespace Common\Model;
use Think\Model;

/*
 * 用户组操作
 */
class AdminModel extends Model {
    private $_db= '';
    public function __construct(){
        $this->_db=M('admin');
    }

    public function getAdminByUsername($name=''){
        return $this->_db->where('username="'.$name.'"')->find();
    }

    //获取所有会员
    public function getAdminByUser() {
        $role= M('AdminRole')->getField('role_id,role_name');
        if(empty($keywords)) {
           $res =$this->_db->order('status desc')->select();
        }else{
            $where=array('username','%'.$keywords.'%');
            $res = $this->_db->where($where)->order('status desc')->select();
        }
        if($role && $res) {
            foreach($res as &$val) {
                $val['role']=$role[$val['role_id']];
            }
        }
    return $res;


    }
//    public function


}