<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Type;
class IndexController extends Controller{
	public function index(){
		$data = DB::table('type')->get()->toArray();
		$data =json_encode($data);
		$data=json_decode($data,true);
		//第一种渲染页面 return view('admin/index/index',['data'=>$data]);
		//第二种 return view('admin/index/index')->with('data',$data);
		//统一使用第三种
		return view('admin.index.index',compact('data'));
	}
	public function login(){
		//$res = DB::table('type')->where('t_id',3)->get()->toArray();
		return view('admin.index.login');
	}
	public function del(){
		$id=$_GET['id'];
		$res =DB::table('type')->where('t_id',$id)->delete();
		if($res){
			return redirect('admin/index/index');
		}
	} 
	public function upda(){
		$id=$_GET['id'];
		$res= DB::table('type')->where('t_id',$id)->get()->toArray();
		$res= json_encode($res);
		$res= json_decode($res,true);
		//var_dump($res);die;
		return view('admin.index.upda',compact('res'));
	}
	public function update(){
		$id=$_POST['id'];
		$name= $_POST['name'];
		$res = DB::table('type')->where('t_id','=',$id)->update(['name'=>$name]);
		if($res){
			return redirect('admin/index/index');
			//echo "<script>alert('修改成功!');location.href='index';</script>";
		}else{
			echo "<script>alert('修改失败!');</script>";
		}
	}





}












 ?>