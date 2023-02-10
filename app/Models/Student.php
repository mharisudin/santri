<?php

namespace App\Models;

use App\Models\Classrom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $guarded = [];

    public function classroms()
    {
        return $this->hasMany(Classrom::class);
    }
}
