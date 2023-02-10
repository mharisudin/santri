<?php

namespace App\Models;

use App\Models\User;
use App\Models\TeacherChildren;
use App\Models\TeacherDocument;
use App\Models\TeacherEducation;
use App\Models\TeacherCertification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function teacher_educations()
    {
        return $this->hasMany(TeacherEducation::class);
    }

    public function teacher_certifications()
    {
        return $this->hasMany(TeacherCertification::class);
    }

    public function teacher_childrens()
    {
        return $this->hasMany(TeacherChildren::class);
    }

    public function teacher_documents()
    {
        return $this->hasMany(TeacherDocument::class);
    }
}
