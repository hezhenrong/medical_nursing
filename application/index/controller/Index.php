<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
	//首页入口
    public function index()
    {
        return $this->fetch();
    }
	//数据导入入口
	public function tab_inputdata()
	{
		return $this->fetch();
	}
	//公告入口
	public function tab_notice()
	{
		return $this->fetch();
	}
	//用户信息入口
	public function tab_userdata()
	{
		return $this->fetch();
	}
	//联系我们入口
	public function tab_contact()
	{
		return $this->fetch();
	}
	//test
	public function test()
	{
		return $this->fetch();
	}
}
