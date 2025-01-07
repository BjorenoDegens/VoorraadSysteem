<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'uitleen_datum',
        'terugbreng_datum',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
