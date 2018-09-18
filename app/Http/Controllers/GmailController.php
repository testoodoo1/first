<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelGmail;

class GmailController extends Controller
{
    public function inbox(){
		$messages = LaravelGmail::message()->unread()->preload()->all();
		var_dump($messages); die;
		foreach ( $messages as $message ) {
		    $body = $message->getHtmlBody();
		    $subject = $message->getSubject();
		}    	
    }
}
