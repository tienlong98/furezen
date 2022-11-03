<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurasu extends Model
{
    use HasFactory;
    protected $table = 'kurasus';
    protected $fillable = [
        'name',
    ];

}
