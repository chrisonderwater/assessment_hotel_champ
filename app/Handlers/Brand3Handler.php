<?php

namespace App\Handlers;

use App\Models\Spot;
use App\Models\WindmeterData;

class Brand3Handler implements WindmeterDataHandlerInterface
{

    public function getOriginalData(Spot $spot): array
    {
        // TODO: Get original data using basic username and pass.
        return [];
    }

    public function handle(WindmeterData $windmeterData): void
    {
        $originalData = $windmeterData->original_data;
        // $windmeterData->measured_at = Carbon::createFromTimeString($originalData['time']);
        $windmeterData->direction = $originalData['wind_dir'];
        $windmeterData->knots = $originalData['knots'];
        $windmeterData->save();
    }
}
