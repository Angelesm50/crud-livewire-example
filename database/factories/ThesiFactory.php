<?php

namespace Database\Factories;

use App\Models\Thesi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ThesiFactory extends Factory
{
    protected $model = Thesi::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
