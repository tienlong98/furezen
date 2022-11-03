<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradesStudent extends Model
{
    use HasFactory;
    protected $table = 'grades_students';
    protected $fillable = [
        'grades_id',
        'user_id',
        'result',
    ];
    public function grades()
    {
        return $this->belongsTo(Grades::class, 'grades_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
