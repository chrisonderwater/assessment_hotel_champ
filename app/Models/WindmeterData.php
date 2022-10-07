<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WindmeterData extends Model
{
    public $timestamps = false;

    protected $casts = [
        'measured_at' => 'datetime',
        'original_data' => 'array'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function spot()
    {
        return $this->belongsTo(Spot::class);
    }

    public static function toProcess()
    {
        return self::query()
            ->whereNotNull('original_data')
            ->whereNull('measured_at')
            ->get();
    }

    /*
     * See: https://www.calculateme.com/speed/meters-per-second/to-knots/ for the used calculation.
     */
    public static function meterPerSecondToKnots(float $meterPerSecond): float
    {
        return $meterPerSecond * 1.9438445;
    }
}
