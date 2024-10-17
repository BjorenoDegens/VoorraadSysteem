<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_name',
        'category_id',
        'status_id',
        'sku',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function status()
    {
        return $this->belongsTo(Status::class);
    }


    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
