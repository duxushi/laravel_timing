<?php  
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// 接值Input
use Illuminate\Support\Facades\Input;
// 引入model
use App\Http\Models\Schedule;
use App\Http\Models\Laravel_xiaoxi;
use App\Http\Models\Laravel_remind;
use Illuminate\Support\Facades\Session; 

use Illuminate\Support\Facades\Redis; // Redis
class ScheduleController extends Controller{

    public $schedule;
    public $xiaoxi;
    public $remind;
    
    public function __construct(){
        $this->schedule = new Schedule();// 实例化model
        $this->xiaoxi = new Laravel_xiaoxi();// 实例化model
        $this->remind = new Laravel_remind();// 实例化model
    }

    // 登录
    public function index(){
    	// echo "111";exit;
    	// Redis::set('key','value'); //存入redis
    	// echo Redis::get('key'); //获取redis中的值

    	return view('schedule/index');
    	// echo '6660';
    }
    // 登录
    public function index_do(){
    	$post = Input::all();
    	$list = $this->schedule->selonesss($post);
    	if ($list) {
    		session::put('user_id',$list->a_id);
            echo '<script>alert("登录成功");location.href="'.'show'.'";</script>';
    	}
    }
    // 展示
    public function show(){
    	return view('schedule/show');
    }
    // 添加日程
    public function show_do(){
    	$_POST['u_id'] = session('user_id');
    	$list = $this->xiaoxi->add($_POST);


    	$list = json_encode($_POST);
    	Redis::lpush('schedule',$list); //存入redis
    	echo '<script>alert("设置成功");location.href="'.'show'.'";</script>';
    }
 	
 	 // 添加提醒表
    public function remind(){
    	// 取出Redis 存入提醒表
    	$num = Redis::llen('schedule'); //存入redis
    	if ($num != 0) {
    		if ($num >= 100) { $num = 100;}

    		for ($i=1; $i <= $num; $i++) {
	    		$arr = json_decode(Redis::rpop('schedule'),true);
	    		$arr['r_type'] = 'schedule';
		    	$this->remind->add($arr);
	    	}
    	}

    	// 搜索 提醒表 找出需要提醒的数据
    	$arr = $this->remind->selwhere();
    	var_dump($arr);
    }
}
?>
