<?php
/**
 * 管理员操作记录
 * @param $log_url 操作URL
 * @param $log_info 记录信息
 */
function adminLog($log_info,$id) {
    $add['log_time'] = time();
    $add['admin_id'] = $id;
    $add['log_info'] = $log_info;
    $add['log_ip'] = getIP();
    $add['log_url'] = __ACTION__;
    M('admin_log')->add($add);
    $data['login_time']=date('Y-m-d H:i:s',time());
    $data['login_ip']=getIP();
    M('admin')->where('id='.$id)->data($data)->save();
}

function getUserName($id){
    $m=M('user');
    $res=$m->where('id='.$id)->getField('name');
    return $res;
}

/**
    获取年龄函数
 **/
function getDa($date){
    $year_diff='';
    list($year,$month,$day)=explode('-',$date);
    $year_diff=date('Y')-$year;
    $month_diff=date('m')-$month;
    $day_diff=date('d')-$day;
    if($month_diff<0 ){
        $year_diff--;
    }
    if($month_diff==0 && $day_diff<0){
        $year_diff--;
    }
    return $year_diff;
}
