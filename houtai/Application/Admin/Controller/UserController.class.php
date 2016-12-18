<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index(){
        $m=M('user');
        $res=$m->where('status>=0')->select();
        $arr=$m->getField('id,name');
        $this->assign('arr',$arr);
        $this->assign('list',$res);
        $this->display();
    }
    public function look(){
        $m=M('user');
        $res=$m->where('uid='.I('get.id'))->select();
        $arr=$m->getField('id,name');
        $vo=$m->find(I('get.id'));
        $this->assign('v',$vo);
            $this->assign('arr',$arr);
            $this->assign('list',$res);
           $this->display();


    }

    public function add() {
        $this->display();
    }

    public function insert(){
        $m=M('user');
        $m->name=I('name');
        $m->password=I('password');
        $m->email=I('email');
        $m->sex=I('sex');
        $m->birthday=I('birthday');
        if(I('tui')==0){
            $m->uid=0;
        }else{
            $uid=$m->where('num="'.I('num').'"')->getField('id');
            $m->uid=$uid;
//            $m->path=
        };
        $m->phone=I('phone');
        $m->create_time=date('Y-m-d H:i:s',time());
        $res=$m->add();
        $m->where('id='.$res)->setField('num','TB'.(80000+$res));
        if($res || $res>0){
            return show(1,'会员添加成功');
        }else{
            return show(0,'会员添加失败');
        }
//
    }
    //修改用户状态
    public function setStatus (){
        $m=M('User');
        try{
            if($_POST) {
               if(trim(I('id'))==''){
                   return show(0,'ID不存在');
               }
               $res=$m->where('id='.trim(I('id')))->setField('status',trim(I('status')));
               if($res){
                   return show(1,'操作成功');
               }else{
                   return show(0,'操作失败');
               }
            }else {
                return show(0,'非法操作');
            }
        }catch(Exception $e){
            return show(0,$e->getMessage());
        }
    }
    public function delete(){
        $m=M('User');
        $res=$m->where('status=-1')->select();
        $arr=$m->getField('id,name');
        $this->assign('arr',$arr);
        $this->assign('list',$res);
        $this->display();
    }
    //会员编辑
    public function edit(){

        $m=M('User');
            $id=I('post.id')?I('post.id'):I('get.id');

        if($_POST){
            if(empty(trim(I('post.bh')))) {
                echo "<script>alert('编号不能为空');</script>";
            }else{
                $uid=$m->where('num="'.I('post.bh').'"')->getField('id');
                if(!$uid){
                   echo "<script>alert('推荐人不存在');</script>";
                }else{
                    $res=$m->where('id='.I('post.id'))->setField('uid',$uid);
                    if($res){
                        echo "<script>alert('推荐人修改成功');</script>";
                    }
                }

            }
        }
        $res=$m->find($id);
        $this->assign('vo',$res);
        $this->display();
    }

    public function save(){
        $m=M('User');
        $m->create();
        $res=$m->save();
        if($res){
            return show(1,'用户修改成功');
        }else{
            return show(0,'用户修改失败');
        }
    }


    //模态框提交数据
    public function bootsave(){
//        var_dump($_GET);die;
        $m=M('User');
        $res=$m->where('id='.I('post.id'))->setField('uid',0);
        if($res){
            return show(1,'会员设置成功');
        }else{
            return show(0,'会员设置失败');
        }

    }
}