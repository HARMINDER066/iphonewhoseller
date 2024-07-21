<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'discount_price',
        'description',
        'model',
        'category',
        'parent_category',
        'images',
        'created_at',
        'updated_at'
    ];
}
