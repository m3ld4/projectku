<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang_masuk extends Model
{
    protected $table = 'barang_masuks';
        protected $fillable =['tgl_masuk','user_id'];
        protected $visible=['tgl_masuk','user_id'];
        public $timestamps=true;

   public function User()
        {
        		return$this->belongsto('App\User', 'user_id');
        }
}
