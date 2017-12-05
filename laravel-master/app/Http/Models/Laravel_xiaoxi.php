<?php  
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;  
use Illuminate\Support\Facades\DB;  
use Carbon\Carbon;
class Laravel_xiaoxi extends Model  
{  
    protected $tableName = 'laravel_xiaoxi';  

    public function add($post)
    {
    	$arr = [
            'x_name'     => $post['name'],
            'x_text'     => $post['text'],
            'x_datatime' => $post['datatime'],
            'x_time'     => Carbon::now(),
            'u_id'       => $post['u_id'],
    	];
        // return $post;
    	return DB::table($this->tableName)->insert($arr);
    }

    // public function sel()
    // {
    // 	return DB::table($this->tableName)->get();
    // }
    
    // public function selone($id)
    // {
    // 	return DB::table($this->tableName)->where(['d_id'=>$id])->first();
    // }
    // public function selonesss($listall)
    // {
    // 	// return $listall;
    // 	$arr = [
    // 		'a_user' => $listall['name'],
    // 		'a_pas'  => $listall['pas'],
    // 	];
    // 	return DB::table($this->tableName)->where($arr)->first();
    // }

    // public function del($id)
    // {
    // 	return DB::table($this->tableName)->where(['d_id'=>$id])->delete();
    // }

    // public function upda($post)
    // {
	   //  	$arr = [
    // 		'd_name'=>$post['d_name'],
    // 		'd_text'=>$post['d_text'],
    // 		'd_time'=>Carbon::now(),
    // 		'u_id'  =>1,
    // 	];
    // 	return DB::table($this->tableName)->where(['d_id'=>$post['d_id']])->update($arr);
    // }
}
?>