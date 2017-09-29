<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewUserWelcome;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    //
    public function index(){
    return view('welcome');
    }

    public function postIndex(Request $request)
    {
        $this->validate($request, [
             'email' => 'required|email',
             'subject' => 'min:3',
             'message' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
                Mail::send('emails.contact', $data, function($message) use ($data){
                    $message->from($data['email']);
                    $message->to('gturner0316@gmail.com');
                    $message->subject($data['subject']);
        });
                Session::flash('success', 'Your Email was Sent');
                    return redirect('/');
    }

    public function services(){
        return view('pages.services');
    }

    public function fund()
    {
        return view('pages.fund');
    }


}
