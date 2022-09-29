<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastname'=> fake()->lastName(),
            'firstname'=> fake()->firstName(),
            'middlename'=> fake()->lastName(),
            'email'=> fake()->safeEmail(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'age'=> fake()->numberBetween(18,100),
            'sex'=> fake()->randomElement(['Female','Male']),
            'address'=> fake()->address(),
            'barangay'=> fake()->randomElement(['Poblacion','Hibale','Concepcion','Remedios','Magtangtang', 'Santa Fe']),
            'phone_number'=> fake()->phoneNumber(),
            'profile_image'=> fake()->imageUrl(),
            'customer_status'=> fake()->randomElement(['verified','notverified']),
        ];
    }
}
