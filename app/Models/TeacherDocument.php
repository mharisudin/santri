<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherDocument extends Model
{
    use HasFactory;

    protected $table = 'teacher_documents';
    protected $fillable = [
      'teacher_id', 'file_kk', 'file_ktp', 'file_npwp', 'file_rekening',
      'file_ijazah', 'file_sertifikasi'
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
