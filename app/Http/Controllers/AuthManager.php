<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Testvisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function bookvisit(){
        return view('bookvisit');
    }

    function bookvisitPost(Request $request){

       $request->validate([
            'date' => 'required',
            'time' => 'required'
        ]);

        $data['date'] = $request->date;
        $data['time'] = $request->time;
        $testvisit = Testvisit::create($data);
        if(!$testvisit){
            return redirect(route('bookvisit'))->with('error','Please try again');
        }
        return redirect(route('bookvisit'))->with('success','Please wait for approval'); 
}


        /*function bookcheckPost(Request $request){
            $credentials = $request->only('date','time');
            if(Auth::attempt( $credentials )){
                return redirect(route('bookvisit'))->with('success','Please wait for approval');
        }
        return redirect(route('bookvisit'))->with('erroe','Please try again');
        }*/
}