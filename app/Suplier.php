<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    //
    protected $table = 'supliers';
        protected $fillable =['nama_perusahaan'];
        protected $visible=['nama_perusahaan'];
        public $timestamps=true;
}
