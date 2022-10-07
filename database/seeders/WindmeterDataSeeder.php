<?php

namespace Database\Seeders;

use App\Models\Spot;
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
        $spotsBrand1 = Spot::where('brand', 'brand1')
            ->get()
            ->toArray();

        $spotsBrand2 = Spot::where('brand', 'brand2')
            ->get()
            ->toArray();

        $spotsBrand3 = Spot::where('brand', 'brand3')
            ->get()
            ->toArray();

        $windmeterData = [
                [
                    'spot_id' => $spotsBrand1[0]['id'],
                    'original_data' => '{
                    "date_time": "2022-10-06 12:00:00.000000 UTC (+00:00)",
                    "direction": "NNW",
                    "meter_per_second": 11
                }',
                ],
                [
                    'spot_id' => $spotsBrand1[1]['id'],
                    'original_data' => '{
                    "date_time": "2022-10-06 12:15:00.000000 UTC (+00:00)",
                    "direction": "NW",
                    "meter_per_second": 10
                }',
                ],
                [
                    'spot_id' => $spotsBrand1[2]['id'],
                    'original_data' => '{
                    "date_time": "2022-10-06 12:30:00.000000 UTC (+00:00)",
                    "direction": "NNW",
                    "meter_per_second": 12
                }',
                ],
                [
                    'spot_id' => $spotsBrand1[3]['id'],
                    'original_data' => '{
                    "date_time": "2022-10-06 12:45:00.000000 UTC (+00:00)",
                    "direction": "N",
                    "meter_per_second": 13
                }',
                ],
                [
                'spot_id' => $spotsBrand2[0]['id'],
                'original_data' => '{
                    "datetime": 1665064800,
                    "dir": "NNW",
                    "ms": "11"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[1]['id'],
                    'original_data' => '{
                    "datetime": 1665065700,
                    "dir": "NW",
                    "ms": "10"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[2]['id'],
                    'original_data' => '{
                    "datetime": 1665066600,
                    "dir": "NNW",
                    "ms": "12"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[3]['id'],
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[4]['id'],
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[5]['id'],
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => $spotsBrand2[6]['id'],
                    'original_data' => '{
                    "datetime": 1665067500,
                    "dir": "N",
                    "ms": "13"
                }',
                ],
                [
                    'spot_id' => $spotsBrand3[0]['id'],
                    'original_data' => '{
                        "time": "2022-10-06T14:00:00+00:00",
                        "wind_dir": "NNW",
                        "knots": 22
                    }',
                ],
            ];

        foreach ($windmeterData as $data) {
            DB::table('windmeter_data')
                ->insert($data);
        }
    }
}
