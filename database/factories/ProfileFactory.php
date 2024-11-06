<?php

namespace Database\Factories;

use Psy\Util\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory

{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
           return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => 'dfdsflkdsjfàçsfqskçrdsfdsfjçàsfq,fdqosfijqsfofqdsfjsfjoijl',
            'bio' => fake()->text(),

        ];
    }
}
