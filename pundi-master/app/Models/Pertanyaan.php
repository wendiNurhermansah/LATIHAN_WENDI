<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id', 'nama', 'email', 'pertanyaan', 'created_at', 'created_by', 'updated_at', 'updated_by'];
}
