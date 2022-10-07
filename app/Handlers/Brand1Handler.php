<?php

namespace App\Handlers;

use App\Models\Spot;
use App\Models\WindmeterData;

class Brand1Handler implements WindmeterDataHandlerInterface
{

    public function getOriginalData(Spot $spot): array
    {
        // TODO: Get original data using unique token.
        return [];
    }

    public function handle(WindmeterData $windmeterData): void
    {
        $originalData = $windmeterData->original_data;
        //$windmeterData->measured_at = new Carbon($originalData['date_time']);
        $windmeterData->direction = $originalData['direction'];
        $windmeterData->knots = WindmeterData::meterPerSecondToKnots($originalData['meter_per_second']);
        $windmeterData->save();
    }
}
