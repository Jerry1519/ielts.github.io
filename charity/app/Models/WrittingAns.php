<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrittingAns extends Model
{
    use HasFactory;
    protected $table = "writting_answer";
    protected $primaryKey = "w_ans_id";
}
