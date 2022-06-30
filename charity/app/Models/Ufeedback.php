<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ufeedback extends Model
{
    use HasFactory;
    protected $table = "feedback";
    protected $primaryKey = "feedback_id";
    
}
