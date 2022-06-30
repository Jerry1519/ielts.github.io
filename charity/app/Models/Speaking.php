<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaking extends Model
{
    use HasFactory;
    protected $table = "speaking";
    protected $primaryKey = "que_id";
}
