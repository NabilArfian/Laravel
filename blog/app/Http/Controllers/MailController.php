<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"Nabil Arfian");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('kanayaaqila22@gmail.com', 'Nabil Arfian')->subject
            ('Laravel Basic Testing Mail');
         $message->from('fitrioctavia75@gmail.com','Nabil Arfian');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email() {
      $data = array('name'=>"Nabil Arfian");
      Mail::send('mail', $data, function($message) {
         $message->to('exodus190.gt@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('fitrioctavia75@gmail.com','Nabil Arfian');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function send_email() {
  
   }
}