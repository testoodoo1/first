<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelGmail;

class GmailController extends Controller
{
    public function inbox(){
    	var_dump("hi");
		$messages = LaravelGmail::message()->unread()->preload()->all();
		foreach ( $messages as $message ) {
		    $body = $message->getHtmlBody();
		    $subject = $message->getSubject();
		    var_dump($subject);
		}    	
    }
}
