<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->task = 'Weekend hookup';
        $task->description = 'Call me in the Mon';
        $task->done = false;
        $task->save();

        $task = new Task();
        $task->task = 'Late night coding';
        $task->description = 'Success and happy';
        $task->done = false;
        $task->save();

        $task = new Task();
        $task->task = 'Late night coding';
        $task->description = 'Success and happy';
        $task->done = true;
        $task->save();
    }
}
