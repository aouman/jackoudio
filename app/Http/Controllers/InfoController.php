<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class InfoController extends Controller
{
    public function sendMail(Request $request){
        $details = [
            'title' => 'Mail from JackAudio',
            'body' => []
        ];
        $all = [];
        foreach($request->all() as $key => $value) {
            $phrase = $key.": ".$value;
            if ($value != null && $key != '_token') {
                array_push($details['body'], $phrase);
            }
        }
        //dd($details);

    //Mail::to('yaodavidarmel@gmail.com')->send(new \App\Mail\MyMail($details));
    Mail::send('emails.myMail', ['details' => $details], function($message) use($details){
      $message->to('yaodavidarmel@gmail.com', 'Cher(ère) Admin')->subject('Vous avez un nouveau message');
      $message->from('eventsoschool@gmail.com', 'JackAudio');
    });

    //dd("Email is Sent.");
    return redirect()->back();
    }
}
