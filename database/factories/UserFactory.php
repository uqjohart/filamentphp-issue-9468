<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
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
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'role_id' => Role::where('name', 'pleb')->first()->id,
            'col1' => 'col1',
            'col2' => 'col2',
            'col3' => 'col3',
            'col4' => 'col4',
            'col5' => 'col5',
            'col6' => 'col6',
            'col7' => 'col7',
            'col8' => 'col8',
            'col9' => 'col9',
            'col10' => 'col10',
            'col11' => 'col11',
            'col12' => 'col12',
            'col13' => 'col13',
            'col14' => 'col14',


        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
