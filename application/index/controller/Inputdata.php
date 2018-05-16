<?php
namespace app\index\controller;
use think\Controller;
class Inputdata extends Controller
{
	//首页入口
    public function index()
    {
        return $this->fetch();
    }
	//查看医养院数据
	public function mnhome_look()
	{
		$mnhome = db("mnhome")->where("id=2")->find();
		var_dump($mnhome);
    	$this->assign("mnhome",$mnhome);
		
		
//		$id1_list = db("test_ulli")->where("id=1")->find();
//  	$this->assign("id1_list",$id1_list);
		return $this->fetch();
	}
	//修改医养院数据
	public function mnhome_edit()
	{
		$dbhostname="mysql:dbhost=localhost:88;dbname=mnrsystem;charset=utf8";
		$pdo=new PDO($dbhostname,'root','');
		$mnhome_name="西二320医养院";
		$worker_num=1;
		$build_cost=1;
		$car_num=1;
		$all_bednum=1;
		$available_bednum=1;
		$green_area=1;
//		$edit_time="";
		
		try{
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$postuser_add_spl="insert into mnhome (mnhome_name,worker_num,build_cost,car_num,all_bednum,available_bednum,green_area,edit_time) Values('$mnhome_name','$worker_num','$build_cost','$car_num','$all_bednum','$available_bednum','$green_area','.time().')";
			$program_status=$pdo->exec($postuser_add_spl);
			var_dump($program_status);
		}catch(PDOExeption $e){
			echo $e->getMessage();
		}
		
		return $this->fetch();
	}
	//查看老人数据
	public function oldman_look()
	{
		return $this->fetch();
	}
	//老人详细资料
	public function oldman_detailed()
	{
		return $this->fetch();
	}
	//修改老人数据
	public function oldman_edit()
	{
		return $this->fetch();
	}
	//修改老人数据详细
	public function oldman_edit_detailed()
	{
		return $this->fetch();
	}
	//查看志愿者数据
	public function volunteer_look()
	{
		return $this->fetch();
	}
	//志愿者详细资料
	public function volunteer_detailed()
	{
		return $this->fetch();
	}
	//修改志愿者数据
	public function volunteer_edit()
	{
		return $this->fetch();
	}
	//修改志愿者数据详细
	public function volunteer_edit_detailed()
	{
		return $this->fetch();
	}
}