<?php

namespace App\Http\Controllers;


use App\Models\Addvisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Addvisitcontroller extends Controller
{
    function addvisit(){
        return view('operator/addvisit');
    }

    function viewvisit(){
        $visits = Addvisit::all()->toArray();
        return view('/operator/viewvisit',compact('visits'));
    }

    function addvisitPost(Request $request){

        $request->validate([
             'date' => 'required',
             'time' => 'required'
         ]);
 
         $data['date'] = $request->date;
         $data['time'] = $request->time;
         $addvisit = Addvisit::create($data);
         if(!$addvisit){
             return redirect(route('/operator/viewvisit'))->with('error','Please try again');
         }
         return redirect(route('/operator/viewvisit'))->with('success',"Data recorded."); 
    }

    function edit($id){
        $visits = Addvisit::find($id);
        return view('/operator/editvisit',compact('visits','id'));
    }

    function update(Request $request,$id){
        $this->validate($request, [
            'date' => 'required',
            'time' => 'required'
        ]);
        $visits = Addvisit::find($id);
        $visits->date = $request->get('date');
        $visits->time = $request->get('time');
        $visits->save();
        return redirect(route('/operator/viewvisit'))->with('success',"Data updated."); 
    }

    function remove($id){
        $visits = Addvisit::find($id);
        $visits->delete();
        return redirect(route('/operator/viewvisit'))->with('success',"Data deleted.");
    }

}