<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'is_active', 'added_by'
    ];

    public function addedBy()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
