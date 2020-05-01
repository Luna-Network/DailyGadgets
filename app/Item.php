<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    protected $fillable = [
        'type',
        'title',
        'in_stock',
        'price',
        'brand',
        'description',
        'review',
        'dimensions',
        'processor',
        'os',
        'storage_capacity',
        'ram',
        'colour',
        'camera',
        'battery_capacity',
        'images'
    ];
}
