<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListeningResult extends Model
{
    use HasFactory;
    protected $table="listening_result";
    protected $primaryKey="result_id";
}
