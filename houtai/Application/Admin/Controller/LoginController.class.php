<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function index() {
        $this->display('public:login');
    }
    //验证码生成
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 40;
//        $Verify->useImgBg = true;
        $Verify->codeSet="0123456789";
        $Verify->length=4;
        $Verify->useNoise = false;//是否使用噪点
//
        $Verify->entry();
    }
    /*
     * 验证账号密码
     */
    public function check() {
        if(!check_verify($_POST['verify'])){
            return show('0','验证码错误');
        }
        $res = D('Admin')->getAdminByUsername($_POST['username']);
        if(!$res) {
            return show('0','该用户不存在');
        }
        if($res['password'] != getMd5Password($_POST['password'])){
            return show('0','密码错误');
        }
        if($res && $res['password']==getMd5Password($_POST['password'])){
            session('adminUser',$res);
//            $m=M('AdminLog');
////            $m->
           adminLog("后台登录",$res['id']);

            return show('1','登陆成功');
        }

    }
    }
