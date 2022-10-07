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
        // TODO: Implement handle() method.
    }
}
