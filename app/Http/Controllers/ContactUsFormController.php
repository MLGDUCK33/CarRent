<?php

namespace App\Http\Controllers;

use App\ContactClient;
use Illuminate\Http\Request;


class ContactUsFormController extends Controller
{
    public function ContactUsForm(Request $request) {
dd($request);

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'message' => 'required',
            'accept' => 'required'
        ]);

        //  Store data in database
        ContactClient::create($request->all());

        \Mail::send('contact-mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'textMessage' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->get('email'));
            $message->to('car@rent.io')->subject('NEW CONTACT CLIENT');
        });

        return back()->with('success', 'Thank you for contact us!');
    }
}
