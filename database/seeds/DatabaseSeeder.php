<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Suplier;
use App\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
         $this->call(UserSeeder::class);
         $this->call(SuplierSeeder::class);
         $this->call(BarangSeeder::class);
         $this->call(Barang_masukSeeder::class);
    }
}
