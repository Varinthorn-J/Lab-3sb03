<?php

namespace App\Http\Controllers; 

use App\Models\lain;
use Illuminate\Http\Request;
use Mail;


class MailController extends Controller

{
    public function basic_email(){
        $data = array('name'=>"Warinthon Jaitrong");
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('s6135512016@phuket.psu.ac.th','test')->subject('Laravel Basic Testing Mail');
            $message->from('s6135512053@phuket.psu.ac.th','Warinthon');
        });
        echo "Basic Email Sent.Check your inbox.";
    } 
}
