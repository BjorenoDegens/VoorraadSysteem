<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'achternaam',
        'class_id',
        'student_nummer',
        'cohort',
    ];


    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
