<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use DB;

use App\Http\Requests;

class MailController extends Controller
{
    public function subscribe(Request $request)
    {
        $query = DB::select('select * from emails where email = ?',[$request->email]);
        if(!$query){
            $p = new Email;
            $p -> email = $request->email;
            $p -> save();
            return response()->json(['message' => 'Subscribed']);
        }
        else{
            return response()->json(['message' => 'Already Subscribed']);
        }

        // return redirect()->away('https://v2.protectt.ai/#/');

        // dd($request -> all);
        // return redirect()->away('google.com');

        // return redirect()->away('http://localhost:36775/#/');
        // $url = "www.google.com";
        // return Redirect::to($url);
        // return view('index');
    }
}
