<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SendEmailController extends Controller

{
    function index()
    {
        return view('send_email');
    }



    protected function validator(arr $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'am' => ['required', 'string', 'email', 'max:5'],
            'message' => ['required', 'string', 'min:8', 'confirmed'],
            'depart' => ['required', 'string',  'max:255',],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }


    function save(Request $request)
    {
        $user = new Email();
        $user->name = $request->name;
        $user->am = $request->am;
        $user->email = $request->email;
        $user->depart = $request->depart;
        $user->message = $request->message;
        $user->save();
        return back()->with('success', 'Ευχαριστούμε, να έχετε μια όμορφη μέρα!');

    }
}

