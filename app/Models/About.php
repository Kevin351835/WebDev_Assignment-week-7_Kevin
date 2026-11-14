<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'table_about';

    protected $fillable = ['nama', 'domisili', 'angkatan', 'jurusan', 'smp', 'sma'];
}