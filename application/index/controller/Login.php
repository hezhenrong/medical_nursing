<?php
namespace app\index\controller;
use think\Controller;
class Login extends Controller
{
	//首页入口
    public function index()
    {
        return $this->fetch();
    }
	//login入口
	public function login()
	{
		return $this->fetch();
	}
	//login入口
	public function user_register()
	{
		return $this->fetch();
	}
}
