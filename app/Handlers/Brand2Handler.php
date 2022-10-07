<?php

namespace App\Handlers;

use App\Models\Spot;
use App\Models\WindmeterData;

class Brand2Handler implements WindmeterDataHandlerInterface
{

    public function getOriginalData(Spot $spot): array
    {
        // TODO: Get original data using basic username and pass.
        return [];
    }

    public function handle(WindmeterData $windmeterData): void
    {
        $originalData = $windmeterData->original_data;
        // $windmeterData->measured_at = Carbon::createFromTimestamp($originalData['datetime']);
        $windmeterData->direction = $originalData['dir'];
        $windmeterData->knots = WindmeterData::meterPerSecondToKnots($originalData['ms']);
        $windmeterData->save();
    }
}
