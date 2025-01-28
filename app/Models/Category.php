<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    //
    Use HasFactory;
    protected $fillable=['category_name'];
    public function products(){
        return $this->hasMany(Product::class);
    }
    
}