<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class claudia extends Model
{
    use HasFactory;
    protected $table = "claudia";
    protected $fillable= ['nama', 'kelas', 'nominal'];
}
