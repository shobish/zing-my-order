<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slectionModel extends Model
{
    use HasFactory;
    protected $protect = [
        "name",
        "address",
        "category",
        "pname",
        "pdes",
        "pprice",

    ];
}
