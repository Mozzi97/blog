<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//软删除
use Illuminate\Database\Eloquent\SoftDeletes;

class Artical extends Model{
  use SoftDeletes;

	protected $table = 'samp_db';
	protected $primaryKey = 'Artical_id';
    protected $guarded = ['Title','Artical'];
    protected $dates = ['delete_at'];
    public function freshTimestamp() {
		return time();
  }
  
  public function delete() 
  {
      self::whereIn('Artical_id', $ids)->delete(); //删除用户
      // withTrashed() 显示所有数据
      // onlyTrashed() 显示删除数所
      // restore()还原数据
  }


}