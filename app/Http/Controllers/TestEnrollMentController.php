<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\User;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Notifications;

class TestEnrollMentController extends Controller
{
    
    public function testnotif(){
        $user=User::first();

        $enrollmentData=[
            'body'=>'You have received a new test notification',
            'enrollmentText'=>'You are allowed to enroll',
            'url'=>url('/'),
            'thankyou'=>'You have 14 days to enroll'

        ];
        $user->notify(new TestEnrollment($enrollmentData));

    }
    //
}
