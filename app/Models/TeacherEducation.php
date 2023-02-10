<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherEducation extends Model
{
    use HasFactory;

    protected $table = 'teacher_educations';
    protected $fillable = [
      'teacher_id', 'level', 'school', 'entry_year', 'graduate_year',
      'academic_degree', 'number_degree'
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
