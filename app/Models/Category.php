<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    use HasFactory;
    protected $guarded = [
        'id'
    ]; // Only protect the ID field

    protected $fillable = [  // Allow mass assignment for these attributes
        'category_name',
        'category_image',
        'category_slug',
    ];

    public function productsList()
    {
        return $this->hasOne(ProductList::class);
    } // One-to-Many relationship

    public function SubCategories() {
        return $this->hasMany(SubCategory::class, 'categoriesID', 'id');
    } // Descriptive foreign key
}
