<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sender;
use App\Models\Recipient;   


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Letter>
 */
class LetterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Generate a random sent date (current or future)
        $sentDate = fake()->dateTimeBetween('-1 month', 'now');
        
        // Generate an expiration date after the sent date
        $expirationDate = fake()->dateTimeBetween($sentDate, '+1 month');

        return [
            'sender_id' => Sender::inRandomOrder()->first()->id,
            'recipient_id' => Recipient::inRandomOrder()->first()->id,
            'sent_date' => $sentDate,
            'expiration_date' => $expirationDate,
            'description' => fake()->text(),
        ];
    }
}
