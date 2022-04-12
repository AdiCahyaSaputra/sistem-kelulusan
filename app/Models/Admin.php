<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Authenticatable
{
    protected $guarded = ["id"];
    protected $hidden = ["password", "remember_token"];
}
