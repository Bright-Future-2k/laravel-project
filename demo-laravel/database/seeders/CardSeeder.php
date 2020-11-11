<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card = new Card();
        $card->name = 'Nguyen Van An';
        $card->class = '12A2';
        $card->gender = 'male';
        $card->address = '316 Hai Ba Trung';
        $card->save();

    }
}
