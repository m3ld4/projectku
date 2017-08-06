<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
        protected $fillable =['merk','harga','stock'];
        protected $visible=['merk','harga','stock'];
        public $timestamps=true;

}