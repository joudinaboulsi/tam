<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{

    public function getContactForm(Request $request)

    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $phone = $request->input('phone');
        $msg_client = $request->input('message');

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.contact', array('name' => $name, 'email_client' => $email_client, 'phone' => $phone, 'msg_client' => $msg_client), function($message) use ($email_client, $name)
            {
                $message->from($email_client, $name);
                $message->to('pierre.dina@tamtrack.com')->subject('Message from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
        }
    }

    public function getInterestForm(Request $request)

    {
        $name = $request->input('name');
        $email_client = $request->input('email');
        $phone = $request->input('phone');
        $interest = $request->input('interest');
        $msg_client = $request->input('message');

        // if form is full
        if (! empty($_POST))
        {
            Mail::send('emails.interest', array('name' => $name, 'email_client' => $email_client, 'phone' => $phone, 'interest' => $interest, 'msg_client' => $msg_client), function($message) use ($email_client, $name)
            {
                $message->from($email_client, $name);
                $message->to('pierre.dina@tamtrack.com')->subject('Message from Website');
            });
            \Session::flash('msg', 'Successfully sent!' );
            return redirect()->back();
        }
    }
}
