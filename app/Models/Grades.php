<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;
    protected $table = 'grades';
    protected $fillable = [
        'kurasu_id',
        'subject_id',
        'type_id',
    ];
    public function kurasu()
    {
        return $this->belongsTo(Kurasu::class, 'kurasu_id', 'id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
    public function type()
    {
        return $this->belongsTo(TypeOfGrades::class, 'type_id', 'id');
    }
}
