<?php
/**
 * Created by PhpStorm.
 * User: liguangyao
 * Date: 2019/3/3
 * Time: 20:11
 */

namespace app\TLZCSYS\controller;

class MachineList extends PublicController
{
    function index()
    {
        $MachineModelList = db('MachineModelList')->select();
        $MachineList = db('MachineList')->select();
        $this->assign('MachineModelList',$MachineModelList);
        $this->assign('MachineList',$MachineList);
        return view('index');
    }

    function AddMachine(){
        $MachineSN = trim(input('MachineSN'));
        $MachineModel = trim(input('MachineModel'));
        $MachineDesc = trim(input('MachineDesc'));

        if(empty($MachineSN) || empty($MachineModel)){
            $this->assign('Warning','请选择机床型号并输入机床序号!');
            goto OUT;
        }

        $data['MachineSN'] = $MachineSN;
        $data['MachineModel'] = $MachineModel;
        $data['MachineDesc'] = $MachineDesc;
        $data['AddTime'] = date('Y-m-d H:i:s');

        db('MachineList')->insert($data);

        OUT:
            return $this->index();
    }
}