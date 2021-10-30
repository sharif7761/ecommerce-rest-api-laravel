<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =  [
        'name', 'details', 'stock', 'price', 'discount'
    ];


    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
