<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = 'Tactical Thinking: 50 Brain-Training Puzzles to Change the Way You Think';
        $book->author = 'Charles Phillips';
        $book->price = 80000;
        $book->category_id = 1;
        $book->avatar = 'abc.jpg';
        $book->status = 'have book';
        $book->save();

        $book = new Book();
        $book->name = 'Tactical Thinking: 50 Brain-Training Puzzles to Change the Way You Think';
        $book->author = 'Charles Phillips';
        $book->price = 80.000;
        $book->category_id = 1;
        $book->avatar = 'abc.jpg';
        $book->status = 'out of book';
        $book->save();
    }
}
