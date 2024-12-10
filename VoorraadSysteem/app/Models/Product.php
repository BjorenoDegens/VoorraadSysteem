<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'item_name',
        'category_id',
        'status_id',
        'sku',
        'image',
        'stock',
    ];

    protected $attributes = [
        'status_id' => 2, // Standaard status_id
        'stock' => 0,
    ];

    /**
     * The "booted" method of the model.
     * Handles model events like creating.
     */
    protected static function booted()
    {
        static::creating(function ($product) {
            // Generate a unique SKU if not provided
            if (empty($product->sku)) {
                $product->sku = self::generateUniqueSku();
            }
        });
    }

    /**
     * Generate a unique SKU.
     *
     * @return int
     */
    protected static function generateUniqueSku()
    {
        do {
            // Generate a random 8-digit integer
            $sku = random_int(10000000, 99999999);
        } while (self::where('sku', $sku)->exists());

        return $sku;
    }

    /**
     * Define the relationship with the Category model.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Define the relationship with the Status model.
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Define the relationship with OrderItem model.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
