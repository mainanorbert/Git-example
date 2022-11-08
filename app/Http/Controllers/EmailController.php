<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AttachmentMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function email(){

        Mail::to('mainanorbert@gmail.com')->send(new AttachmentMail());

        return new AttachmentMail();
    }
    //
}
