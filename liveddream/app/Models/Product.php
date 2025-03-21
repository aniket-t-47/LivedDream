<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id', 'category_id', 'name', 'product_code',
         'gst', 'warranty_duration', 'warranty_type',
        'adhesive_id', 'labor_charge', 'deliver_time', 'image', 'user_id'
    ];
        // Relationship with ProductSize
        public function sizes()
        {
            return $this->hasMany(ProductSize::class);
        }
    
}