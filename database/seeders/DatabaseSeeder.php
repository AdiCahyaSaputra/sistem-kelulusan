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
          "password" => bcrypt("11042022"),
          "class" => "12 RPL",
          "isPass" => "LULUS",
          "isPaid" => "LUNAS"
        ]);
        
        User::create([
          "nisn" => "0056092748",
          "exam_num" => "987-654-321",
          "fullname" => "Cahya",
          "password" => bcrypt("25062022"),
          "class" => "12 RPL",
          "isPass" => "LULUS",
          "isPaid" => "BELUM LUNAS"
        ]);
        
        User::create([
          "nisn" => "0056454892",
          "exam_num" => "476-132-895",
          "fullname" => "Saputra",
          "password" => bcrypt("01042022"),
          "class" => "12 RPL",
          "isPass" => "TIDAK LULUS",
          "isPaid" => "LUNAS"
        ]);
        
        Admin::create([
          "username" => "admin123",
          "password" => bcrypt("password_admin_123")
        ]);
        
    }
}
