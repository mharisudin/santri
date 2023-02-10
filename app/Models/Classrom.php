<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Program;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\ClassLevel;
use App\Models\SchoolYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classrom extends Model
{
    use HasFactory;

    protected $fillable = [
      'school_year_id', 'class_level_id', 'program_id', 'student_id', 'teacher_id', 'teacher_kmi_id',
      'title', 'title_kmi', 'absent_number', 'added_by'
    ];

    public function school_years()
    {
        return $this->belongsTo(SchoolYear::class, 'school_year_id');
    }

    public function class_levels()
    {
        return $this->belongsTo(ClassLevel::class, 'class_level_id');
    }

    public function programs()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function teachers_kmi()
    {
        return $this->belongsTo(Teacher::class, 'teacher_kmi_id');
    }

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }


    // use accessor
    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d-M-Y H:i:s'),
        );
    }
}
