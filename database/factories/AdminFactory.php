<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Zacaria Lhadji",
            'email' => "zacaria@admin.com",
            'email_verified_at' => now(),
            'password' => Hash::make("123"), // password
            'remember_token' => Str::random(10),
        ];
    }
}
