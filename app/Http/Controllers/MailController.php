<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

use App\Http\Requests;

class MailController extends Controller
{
    public function subscribe(Request $request)
    {
        $p = new Email;

        $p -> email = $request->email;
        $p -> save();

        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);

        // return redirect()->away('https://v2.protectt.ai/#/');

        // dd($request -> all);
        // return redirect()->away('google.com');

        // return redirect()->away('http://localhost:36775/#/');
        // $url = "www.google.com";
        // return Redirect::to($url);
        // return view('index');
    }
}
