<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningQue extends Model
{
    use HasFactory;
    protected $table = "listening_que";
    protected $primaryKey = "lq_id";
}
