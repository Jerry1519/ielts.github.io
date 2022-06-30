<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakingTest extends Model
{
    use HasFactory;
    protected $table = "speaking_test";
    protected $primaryKey = "s_test_id";
}
