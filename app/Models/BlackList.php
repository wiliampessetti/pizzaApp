<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class BlackList extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'client_id',
        'reason',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
