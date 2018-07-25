<?php
namespace app\admin\controller;

class Login extends Base
{
    public function index()
    {
        return $this->fetch();
	}
	
	public function out()
    {
		
        return $this->fetch();
	}
	
	public function cinfo()
    {
		if(request()->isPost()){
			
		}else{
			return $this->fetch();
		}
	}
}
