<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $this->middleware('auth')->only('mList');
    }

    public function submitPage(){

    	return view('submitPage');
    }


    //提交文章内容
    //返回主页视窗
    public function mList(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'article' => 'required',
        ],[
            'title.required' => '请输入标题。',
            'article.required' => '请输入内容。',
        ]);

    	$articals = new Artical();

    	$result = $articals -> create($request -> all());
    	// $db = DB::table('samp_db');
    	// $result = $db -> insert(
    	// 	[
    	// 	'title' => '1', 
    	// 	'article' => 'hi'
    	// 	]
    	// );

    	// dd($result);

      return view('mainPage');

    }

    //获取数据内容，并分页
    public function articals(){

        //TestController::getData();

        $db = DB::table('samp_db');

        $data = $db -> paginate(5);

        $date = date('Y-m-d H:i:s',time());

        //echo $date;

        //return view('mList',['date'=>$date,'data'=>$data]);

		return view('mList',compact('date','data'));
		
	}

    //返回“关于我”视窗
    public function aboutMe(){
        return view('myself');
        
    }

 
    // public function getData(){
    //     $db = DB::table('samp_db');

    //     $data = $db -> get();

    //     $date = date('Y-m-d H:i:s',time());

    //     echo $date;

    //     return view('mList',['date'=>$date,'data'=>$data]);
    // }

    //删除文章

    public function deleteArtical($id){
       $db = DB::table('samp_db');
    
       $data = $db ->where('Artical_id','=',$id)->delete();

      // echo $request;
      // $student = $db::find(1);//找到id为7的
      // $bool = $student->delete();//删除
      // var_dump($bool);
    

      //$data = $db::delete('delete from vipinfo where vip_ID= ?',[$request->Artical_id]);

      return view('mainPage');
    }

    //修改文章

    public function reviseArtical($id){

      return view('submitPage');
    }

}




