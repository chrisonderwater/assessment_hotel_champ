<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WindmeterData;
use Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    public function data(User $user): JsonResponse
    {
        // TODO: Use $user->id.
        $spots = User::find(1)->spots
            ->pluck('id')
            ->toArray();

        return response()->json(WindmeterData::whereIn('spot_id', $spots)
            ->get());
    }
}
