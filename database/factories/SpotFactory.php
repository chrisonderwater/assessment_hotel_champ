<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spot>
 */
class SpotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $meterInfo = $this->spotInfo();

        return [
            'name' => fake()->name(),
            'brand' => $meterInfo['brand'],
            'credentials' => $meterInfo['credentials'],

        ];
    }

    /**
     * @return array
     */
    private function spotInfo(): array
    {
        $brandName = fake()->randomElement(['brand1', 'brand2', 'brand3']);

        return match ($brandName) {
            'brand1' => [
                'credentials' => [
                    'token' => Str::uuid()->toString(),
                ],
                'brand' => $brandName,
            ],
            default => [
                'credentials' => [
                    'username' => 'admin',
                    'password' => Str::uuid()->toString(),
                ],
                'brand' => $brandName,
            ],
        };
    }
}
