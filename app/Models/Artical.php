<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model{
	protected $table = 'samp_db_id';
	protected $primaryKey = 'artical_id';
    protected $guarded = ['Title','Artical'];
    public function freshTimestamp() {
		return time();
	}

}