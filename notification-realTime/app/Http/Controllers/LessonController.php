<?php

namespace App\Http\Controllers;

use App\Lesson;

use App\Notifications\NewLessonNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class LessonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function newLesson()
    {
        $lesson = new Lesson();
        $lesson->user_id = auth()->user()->id;
        $lesson->title = 'Laravel Model';
        $lesson->body = 'This lesson will learn you about notification laravel';
        $lesson->save();

        $user = User::where('id','!=',auth()->user()->id)->get();

        \Notification::send($user,new NewLessonNotification(Lesson::latest('id')->first()));

    }

    public function notification()
    {
        return auth()->user()->unreadNotification;
    }
}
