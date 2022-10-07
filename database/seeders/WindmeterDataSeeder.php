<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class WindmeterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $windmeterData = [
                [
                    'spot_id' => 2,
                    'original_data' => '{
                    "date_time": "2022-10-06 12:00:00.000000 UTC (+00:00)",
                    "direction": "NNW",
                    "meter_per_second": 11
                }',
                ],
                [
                    'spot_id' => 13,
                    'original_data' => '{
                    "date_time": "2022-10-06 12:15:00.000000 UTC (+00:00)",
                    "direction": "NW",
                    "meter_per_second": 10
                }',
                ],
                [
                    'spot_id' => 14,
                    'original_data' => '{
                    "date_time": "2022-10-06 12:30:00.000000 UTC (+00:00)",
                    "direction": "NNW",
                    "meter_per_second": 12
                }',
                ],
                [
                    'spot_id' => 13,
                    'original_data' => '{
                    "date_time": "2022-10-06 12:45:00.000000 UTC (+00:00)",
                    "direction": "N",
                    "meter_per_second": 13
                }',
                ],
                [
                'spot_id' => 1,
                'original_data' => '{
                    "datetime": 1665064800,
                    "dir": "NNW",
                    "ms": "11"
                }',
                ],
                [
                    'spot_id' => 4,
                    'original_data' => '{
                    "datetime": 1665065700,
                    "dir": "NW",
                    "ms": "10"
                }',
                ],
                [
                    'spot_id' => 5,
                    'original_data' => '{
                    "datetime": 1665066600,
                    "dir": "NNW",
                    "ms": "12"
                }',
                ],
                [
                    'spot_id' => 7,
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => 3,
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => 6,
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => 8,
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => 10,
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ]
            ];

        foreach ($windmeterData as $data) {
            DB::table('windmeter_data')
                ->insert($data);
        }
    }
}
