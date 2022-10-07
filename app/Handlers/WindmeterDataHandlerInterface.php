<?php

namespace App\Handlers;

use App\Models\Spot;
use App\Models\WindmeterData;

interface WindmeterDataHandlerInterface
{
    public function getOriginalData(Spot $spot): array;
    public function handle(WindmeterData $windmeterData): void;
}
