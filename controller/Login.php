<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2019/3/3
 * Time: 19:40
 */
namespace app\TLZCSYS\controller;
use think\Controller;
class  Login extends Controller{


    public function index()
    {
        $Name = session("Name");
        if(!empty($Name)){
            $this->redirect(url("/TLZCSYS/TaskList"));
            return;
        }
        return view('index');
    }
    public  function Login()
    {
        $UserName = input('aU');
        $Pwd = input('bP');
        $Ret = db("UserList")->where(array(
            "UserName"=>$UserName,
            "Pwd"=>$Pwd
        ))->select();
        if(empty($Ret)){
            $this->assign("Warning","用户名或者密码错误！");
        }else{
            session("Corp",$Ret[0]["Corp"]);
            session("Name",$Ret[0]["Name"]);
            session("Role",$Ret[0]["Role"]);
            $this->redirect(url("/TLZCSYS/index"));
        }
        return $this->index();
    }

    public function ExitSYS()
    {
        session("Corp",NULL);
        session("Name",NULL);
        session("Role",NULL);
        return $this->index();
    }
}
