<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Type extends Model{
	public function sele($page){
		 $res = DB::select("select * from type");
		 $count = count($res);
		 $size = 2;
		 $cp=ceil($count/$size);
		 //echo $page;die;
		 $coffset=($page-1)*$size;
		 $up = $page-1<1 ? 1 : $page-1;
		 //echo  $page;die;
		 $nx = $page+1>$cp? $cp :$page+1;
		 $nx="<a href='login?p=$nx'>下一页</a>";
		 $first="<a href='login?p=1'>首页</a>";
		 $up="<a href='login?p=$up'>上一页</a>";
		 $last="<a href='login?p=$cp'>尾页</a>";
		 $res['data']=DB::select("select * from type limit $coffset,$size");
		 $res['str']=$first."&nbsp;&nbsp;".$up."&nbsp;&nbsp;".$nx."&nbsp;&nbsp;".$last;
		 return $res;
	}

}






 ?>