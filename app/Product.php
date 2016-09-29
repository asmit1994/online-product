<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class product
 * @package App
 */
class Product extends Model
{
    /**
     * fillable products
     * @var array
     */
    protected $fillable=[
        'name', 'price', 'description'
    ];
}
