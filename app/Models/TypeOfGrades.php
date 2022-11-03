<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfGrades extends Model
{
    use HasFactory;
    protected $table = 'type_of_grades';
    protected $fillable = [
        'name',
    ];
}
