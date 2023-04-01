<?php

namespace Database\Factories;

use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Members;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transactions>
 */
class TransactionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $borrowed_at = $this->faker->dateTimeBetween('-1 week', 'now');
        $returned_at = $this->faker->dateTimeInInterval($borrowed_at, '2 week');

        return [
            'member_id' => Members::factory(),
            'member_name' => Members::factory(),
            'member_email' => Members::factory(),
            'member_address' => Members::factory(),
            'book_id' => Books::factory(),
            'book_title' => Books::factory(),
            'book_author' => Books::factory(),
            'borrowed_at' => $borrowed_at,
            'returned_at' => $returned_at,
            'status' => $returned_at != NULL ? 'returned' : 'not_returned'
        ];
    }
}
