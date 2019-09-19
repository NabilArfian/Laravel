<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function sendMail()

    {

        $data['title'] = "Test it from HDTutu.com";

        Mail::send('emails.email', $data, function($message) {

            $message->to('exodus190.gt@gmail.com', 'Nabil Arfian')

                    ->subject('HDTuto.com Mail');

        });

        dd("Mail Sent successfully");

    }
}
