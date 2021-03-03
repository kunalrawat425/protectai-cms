<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

use App\Http\Requests;

class MailController extends Controller
{
    public function subscribe($email)
    {
        $p = new Email;
        $p -> email = $email;
        $p -> save();
        // return redirect()->away('http://localhost:36775/#/');
        // $url = "www.google.com";
        // return Redirect::to($url);
        return view('index');
    }
}
