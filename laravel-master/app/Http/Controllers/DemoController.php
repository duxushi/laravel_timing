<?php  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
// 引入model
use App\Http\Models\Demo;
class DemoController extends Controller{

    public $demo;
    
    public function __construct(){
        $this->demo = new Demo();// 实例化model
    }

    public function index(){
    	echo '6660';
    }
    
    // 添加
    public function u_add(){
		return view('demo/u_add');
    }
    // 添加 动作
    public function u_add_do(){
    	$post = Input::all();
    	$list = $this->demo->add($post);
		if ($list) {
            echo '<script>alert("添加成功");location.href="'.'u_sel'.'";</script>';
    	}
    }

    // 删除
    public function u_del(){
        $id = Input::get('id');
    	$list = $this->demo->del($id);
    	if ($list) {
            echo '<script>alert("删除成功");location.href="'.'u_sel'.'";</script>';
    	}
    }

    // 修改
    public function u_save(){
        $id = Input::get('id');
    	$list = $this->demo->selone($id);
		// var_dump($list);exit;
		return view('demo/u_save',['list'=>$list]);
    }
    // 修改 动作
    public function u_save_do(){
        $post = Input::all();
    	$list = $this->demo->upda($post);
    	if ($list) {
            echo '<script>alert("修改成功");location.href="'.'u_sel'.'";</script>';
    	}
    }

    // 查询
    public function u_sel(){
    	$list = $this->demo->sel();
    	return view('demo/u_sel',['list'=>$list]);
    	var_dump($list);
    	echo '查询';
    }

    
}
?>