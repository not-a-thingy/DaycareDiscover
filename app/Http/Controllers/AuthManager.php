<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Testvisit;
use App\Models\Bookvisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function bookvisit(){
        $books = Bookvisit::all()->toArray();
        return view('bookvisit', compact('books'));
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

    function edit($id){
        $books = Bookvisit::find($id);
        return view('editbook', compact('books','id'));
    }

    function update(Request $request, $id){
        $this->validate($request, [
            'date'=> 'required',
            'time'=> 'required'
            ]);
        $books = Bookvisit::find($id);
        $books->date = $request->get('date');
        $books->time = $request->get('time');
        $books->save();
        return redirect(route('bookvisit'))->with('success','Booking Has Been Updated');
    }


        function cancel($id){
            $books = Bookvisit::find($id);
            $books->delete();
            return redirect(route('bookvisit'))->with('success','Booking Cancelled');


        }
}