<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoome extends Model
{
    use HasFactory;
    protected $fillable = [
        'code', 'active','ar_name','en_name'
    ];
}
