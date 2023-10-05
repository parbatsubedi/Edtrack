<?php

namespace App\Models;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherAvailability extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id', // Foreign key to relate to the Teacher model
        'date',
        'start_time',
        'end_time',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }
}
