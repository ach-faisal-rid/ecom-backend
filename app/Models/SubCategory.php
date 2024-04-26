<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // Only protect the ID field

    protected $fillable = [
        'categoriesID',  // Allow mass assignment for foreign key
        'subcategory_name',
        'subcategory_slug',
    ];

    public function category() // Define the relationship
    {
        return $this->belongsTo(Category::class, 'categoriesID', 'id'); // Specify foreign keys
    }
}
