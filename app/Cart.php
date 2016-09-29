<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class cart
 * @package App
 */
class Cart extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'total'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
