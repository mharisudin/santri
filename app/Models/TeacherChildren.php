<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherChildren extends Model
{
    use HasFactory;

    protected $table = 'teacher_childrens';
    protected $fillable = [
      'teacher_id', 'name', 'place_birth', 'date_birth', 'gender', 'education',
      'work', 'is_child'
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
