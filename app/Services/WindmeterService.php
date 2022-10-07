<?php

namespace App\Services;

use App\Models\Spot;
use App\Models\WindmeterData;

class WindmeterService
{
    public function createFromOriginalData(array $originalData, Spot $spot): WindmeterData|null
    {
        // First store the original data, so it's easy to debug if the handler fails.
        $windmeterData = new WindmeterData(
            ['original_data' => $originalData,
                'spot_id' => $spot->id]
        );
        $windmeterData->save();

        return $windmeterData;
    }
}
