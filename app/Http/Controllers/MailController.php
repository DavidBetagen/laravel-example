<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function index()
    {
        return view("send_mail");
    }

    public function sendMail(Request $request)
    {
        $to = $request->to;
		$title = $request->title;
		$content = $request->content;
        
		Mail::to($to)->send(new SendMail($title, $content));

		$message = "Success:: Email has been sent";
		return redirect()
			->route('send-mail')
			->withMessage($message);
    }
}
