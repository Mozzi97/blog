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

    public function submitPage(){

    	return view('submitPage');
    }

    public function mList(Request $request){
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

    // public function articalList(){

    //     return view('articalList');
    // }



    public function articals(){
    	//展示视图

        //TestController::getData();

        $db = DB::table('samp_db');

        $data = $db -> get();

        $date = date('Y-m-d H:i:s',time());

        //echo $date;

        //return view('mList',['date'=>$date,'data'=>$data]);

		return view('mList',compact('date','data'));
		
	}

    public function aboutMe(){
        //展示视图
        return view('myself');
        
    }

    //获取数据内容
    public function getData(){
        $db = DB::table('samp_db');

        $data = $db -> get();

        $date = date('Y-m-d H:i:s',time());

        echo $date;

        return view('mList',['date'=>$date,'data'=>$data]);
    }

}




