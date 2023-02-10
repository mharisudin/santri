<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Familie extends Model
{
    use HasFactory;

    protected $table = 'families';
    protected $guarde = [];

    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
