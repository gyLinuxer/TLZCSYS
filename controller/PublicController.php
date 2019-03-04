<?php
namespace app\TLZCSYS\controller;
use think\Controller;
use think\Db;
use think\Request;

class PublicController extends  Controller{



        public function __construct(Request $request = null)
        {
            parent::__construct($request);
            if(is_null(session("Name"))){
                $this->redirect('TLZCSYS/Login/Index');
            }
        }

}
