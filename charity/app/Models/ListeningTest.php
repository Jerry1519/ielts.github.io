<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningTest extends Model
{
    use HasFactory;
    protected $table = "listening_test";
    protected $primaryKey = "l_test_id";
}
