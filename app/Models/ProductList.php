<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // Protect the ID field

    protected $fillable = [
        'title',
        'price',
        'special_price',
        'image',
        'categoriesID',  // Allow mass assignment for foreign keys
        'subcategoriesID',
        'remark',
        'star',
        'product_code',
    ];

    public function category() // Define the relationship with Category
    {
        return $this->belongsTo(Category::class, 'categoriesID', 'id');
    }

    public function subCategory() // Define the relationship with SubCategory
    {
        return $this->belongsTo(SubCategory::class, 'subcategoriesID', 'id');
    }
}
