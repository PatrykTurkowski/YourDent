<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\Email\ContactRequest;
use App\Mail\ContactEmail;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {

        $mail_data = $request->validated();
        Mail::to($mail_data['to'])->send(new ContactEmail($mail_data));

        return redirect(route('welcome'));
    }
}