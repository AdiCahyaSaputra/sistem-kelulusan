<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;

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
          "fullname" => "Adi",
          "birth" => bcrypt("11042022"),
          "class" => "12 RPL",
          "isPass" => "Lulus",
          "isPaid" => "Lunas"
        ]);
        
        User::create([
          "nisn" => "0056092748",
          "exam_num" => "987-654-321",
          "fullname" => "Cahya",
          "birth" => bcrypt("25062022"),
          "class" => "12 RPL",
          "isPass" => "Lulus",
          "isPaid" => "Belum Lunas"
        ]);
        
        User::create([
          "nisn" => "0056454892",
          "exam_num" => "476-132-895",
          "fullname" => "Saputra",
          "birth" => bcrypt("01042022"),
          "class" => "12 RPL",
          "isPass" => "Tidak Lulus",
          "isPaid" => "Lunas"
        ]);
        
        Admin::create([
          "username" => "admin123",
          "password" => bcrypt("admin123")
        ]);
        
    }
}
