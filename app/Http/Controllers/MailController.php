<?php

namespace App\Http\Controllers;

use App\Mail\testmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
       public function sendEmail(){
           $details=[
               'title'=> 'mail from laravel',
               'body'=>'this is  for testing mail using gmail'
           ];
             Mail::to("naderabdou809@gmail.com")->send(new testmail($details));
             return 'Email send';
       }

}
