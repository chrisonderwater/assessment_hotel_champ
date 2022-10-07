<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use App\Models\User;
use App\Models\WindmeterData;
use Illuminate\Http\JsonResponse;

class SpotController extends Controller
{
    public function show(Spot $spot): JsonResponse
    {
        $user = auth()->user();

        if (!$user->spots->contains($spot)) {
            throw new \Exception('You have no permission to access this spot');
        }

        // TODO: Use $user->id.
        $spots = User::find(1)->spots
            ->pluck('id')
            ->toArray();

        $spotData = $spot->except('credentials')
            ->toArray();

        $spotData['windmeter_data'] = $spot->except('original_data')
            ->toArray();

        return response()->json(WindmeterData::whereIn('spot_id', $spots)
            ->get());
    }
}
