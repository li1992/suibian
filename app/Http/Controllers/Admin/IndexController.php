<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;

class IndexController extends Controller{
	public function index(){
		$data= array(
		   array("id"=>1,"name"=>"list","age"=>20),
		   array("id"=>2,"name"=>"list","age"=>50),
		   array("id"=>3,"name"=>"list","age"=>10),
		   array("id"=>4,"name"=>"list","age"=>9),
		   array("id"=>5,"name"=>'list',"age"=>4),
		 );
		$arr='888456';
		//第一种渲染页面 return view('admin/index/index',['data'=>$data]);
		//第二种 return view('admin/index/index')->with('data',$data);
		//统一使用第三种
		return view('admin/index/index',compact('data','arr'));
	}
	public function login(){
		return view('admin.index.login');
	}









}












 ?>