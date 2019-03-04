<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2019/3/3
 * Time: 19:28
 */
namespace app\TLZCSYS\controller;
use think\Controller;

class MachineModelMng extends PublicController {
    function index()
    {
        $this->assign('MachineModelList',db('MachineModelList')->order('MachineModel ASC')->select());
        return view('index');
    }

    function AddMachineModel(){
        $MachineModel = trim(input('MachineModel'));
        $MachineModelDesc = input('MachineModelDesc');
        if(empty($MachineModel)){
            $this->assign("Warning","机床型号不可空!");
            goto OUT;
        }

        $Ret = db('MachineModelList')->where(array('MachineModel'=>$MachineModel))->select();

        if(!empty($Ret)){
            $this->assign('Warning',$MachineModel.'型号不已经存在!');
            goto OUT;
        }
        $data['MachineModel'] = $MachineModel;
        $data['MachineModelDesc'] = $MachineModelDesc;
        $data['AddTime']     = date("Y-m-d H:i:s");
        db('MachineModelList')->insert($data);

        OUT:
          return  $this->index();
    }
}