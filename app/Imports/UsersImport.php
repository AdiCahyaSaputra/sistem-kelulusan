<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            "nisn" => $row[0],
            "exam_num" => $row[1],
            "fullname" => $row[2],
            "password" => bcrypt($row[3]),
            "class" => $row[4],
            "isPass" => $row[5],
            "isPaid" => $row[6]
        ]);
    }
    
    public function batchSize(): int
    {
        return 700;
    }
}
