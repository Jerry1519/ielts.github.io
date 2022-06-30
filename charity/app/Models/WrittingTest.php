<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrittingTest extends Model
{
    use HasFactory;
    protected $table = "writting_test";
    protected $primaryKey = "u_test_id";
}
