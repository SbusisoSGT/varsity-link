<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'link'
    ];

    /**
     * Get the shop that the product belongs to.
     *
     * @return Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    /**
     * Get the products related to this product
     *
     * @return string $name
     */
    public function relatedProducts()
    {
        return $this->shop->products()->get()->except([$this->id]);
    }

}
