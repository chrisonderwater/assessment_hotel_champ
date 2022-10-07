<?php

namespace App\Jobs;

use App\Handlers\WindmeterDataHandlerFactory;
use App\Models\Spot;
use App\Models\WindmeterData;
use App\Services\WindmeterService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GetWindmeterDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(WindmeterService $windmeterService, WindmeterDataHandlerFactory $factory)
    {
        $spots = Spot::all();

        // First get all original data using the API implementations.
        // TODO: This has yet to be implemented. The endpoints are not available yet. Use seeder instead.
//        $spots->each(function (Spot $spot) use ($factory, $windmeterService) {
//            $handler = $factory->build($spot);
//
//            $originalData = $handler->getOriginalData($spot);
//            $windmeterData = $windmeterService->createFromOriginalData($originalData, $spot);
//
//            if (!$windmeterData) {
//                logger()->error('Could not create windmeterData object for spot: ' . $spot->id);
//                return;
//            }
//        });

        WindmeterData::toProcess()->each(function (WindmeterData $windmeterData) use ($factory) {
            $handler = $factory->build($windmeterData->spot);

            // Surrounded with try catch to keep functioning if one of the API's fail.
            try {
                $handler->handle($windmeterData);
            } catch (\Exception $e) {
                logger()->error("Failed to handle data for WindmeterData: {$windmeterData->id}", [
                    'exception' => $e
                ]);
            }
        });
    }
}
