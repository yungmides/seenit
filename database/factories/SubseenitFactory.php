<?php

namespace Database\Factories;

use App\Models\Subseenit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubseenitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subseenit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usersId = User::all()->pluck('id')->toArray();
        $name = $this->faker->text(15);
        return [
            'name' => $name,
            'user_id' => $this->faker->randomElement($usersId),
            'description' => $this->faker->text(),
            'slug' => Str::slug($name)
        ];
    }
}
