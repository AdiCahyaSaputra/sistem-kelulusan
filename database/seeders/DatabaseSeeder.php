<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        User::create([
          "nisn" => "0056399286",
          "exam_num" => "123-456-789",
          "fullname" => "Adi Cahya Saputra",
          "birth" => bcrypt("11042022"),
          "class" => "11 RPL",
          "isPass" => "Lulus",
          "isPaid" => "Lunas"
        ]);
        
    }
}
