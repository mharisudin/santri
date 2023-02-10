<?php

namespace App\Models;

use App\Models\Classrom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function classroms()
    {
        return $this->hasMany(Classrom::class);
    }
}
