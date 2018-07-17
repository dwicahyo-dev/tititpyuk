<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'good_name', 'brand_id', 'category_id', 'description'
    ];
}
