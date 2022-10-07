<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WindmeterData extends Model
{
    protected $casts = [
        'measured_at' => 'datetime'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'measured_at',
        'original_data',
        'spot_id',
        'direction',
        'knots',
    ];
}
