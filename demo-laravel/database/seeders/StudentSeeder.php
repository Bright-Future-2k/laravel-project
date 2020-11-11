<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = 'John';
        $student->age = 22;
        $student->avatar = 'abc.jpg';
        $student->save();
    }
}
