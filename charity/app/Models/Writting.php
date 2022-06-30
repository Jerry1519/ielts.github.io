<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writting extends Model
{
    use HasFactory;
    protected $table = "writting";
    protected $primaryKey = "writting_id";
}
