<?php

namespace App\Models;

use App\Models\Classrom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'is_active', 'added_by'
    ];

    public function classroms()
    {
        return $this->hasMany(Classrom::class);
    }
}
