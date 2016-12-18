<?php
/*
 *  公共函数库
 * */

/*
 *  验证码效验
 */
 function check_verify($code, $id = '') {
    $verify = new \Think\Verify();
    return $verify->check($code,$id);
}
/*
 * 弹框函数
 */
function show($status, $message,$data=array()) {
     $reuslt = array (
         'status' => $status,
         'message'=> $message,
         'data' =>$data,
     );
        echo json_encode($reuslt);
}

/*
 * MD5加密
 */
function getMd5Password($password) {
    return MD5($password.C('MD5_C'));
}

function getIP(){
    if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if(getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if(getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";

    if(preg_match('/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1 -9]?\d))))$/', $ip))
        return $ip;
    else
        return '';
}