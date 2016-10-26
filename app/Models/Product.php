<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'category_id',
    	'name',
    	'description',
    	'price',
        'image'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

}
