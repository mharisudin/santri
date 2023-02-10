<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherCertification extends Model
{
    use HasFactory;

    protected $table = 'teacher_certifications';
    protected $fillable = [
      'teacher_id', 'name', 'cert_status', 'cert_number', 'is_passed', 'graduate_date', 'profession'
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
