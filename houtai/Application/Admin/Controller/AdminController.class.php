<?php
namespace Admin\Controller;
use Think\Controller;

class AdminController extends Controller {
    public function index() {
    $keywords=I('post.keywords');
    $res=D('Admin')->getAdminByUser();
//    var_dump($res);
        $this->assign('list',$res);
        $this->display();
    }

    public function rule(){
        $this->display();
    }
    public function dorule(){
        $rules=I();
        $rule=M('AdminAction');
        foreach($rules as $k=>$v){
//            echo $k;
//            return var_dump($k);
            $data['action']=$k;
            $data['actionname']=$v;
            $rule->data($data);
        }

        if($rule->addAll()) {
                return $this->show(1,'规则添加成功');
            } else {
                return $this->show(0,'规则添加失败');
            };
    }

    public function lock(){

        return $this->show(1,'规则添加成功');

    }
}

