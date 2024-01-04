<?php

namespace App\Http\Controllers;


use App\Models\Addvisit;
use App\Models\DayInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Addvisitcontroller extends Controller
{
    function addvisit(){
        $id = Auth::id();
        $availDaycare = DayInfo::where('id_daycare',$id)->get()->toArray();
        return view('operator/addvisit', compact('availDaycare'));
    }

    function viewvisit(){
        $uid = Auth::id();
        $visits = Addvisit::join('daycare','visits.daycare',"=",'daycare.id')->where('daycare.id_daycare',$uid)->get()->toArray();
        return view('operator/viewvisit',compact('visits'));
    }

    function addvisitPost(Request $request){

        $request->validate([
             'date' => 'required',
             'time' => 'required',
             'daycare' => 'required',
         ]);

         $addVisit = new Addvisit;
         $addVisit['date'] = $request->date;
         $addVisit['time'] = $request->time;
         $addVisit['daycare'] = $request->daycare;
         $addVisit->user_id = Auth::id();
         $addVisit->save();
         if(!$addVisit){
             return redirect(route('viewvisit'))->with('error','Please try again');
         }
         return redirect(route('viewvisit'))->with('success',"Data recorded."); 
    }

    function edit($id){
        $visits = Addvisit::find($id);
        $uid = Auth::id();
        $daycare = DayInfo::where('id_daycare',$uid)->get()->toArray();
        return view('operator/editvisit',compact('visits','id','daycare'));
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
        return redirect(route('viewvisit'))->with('success',"Data updated."); 
    }

    function remove($id){
        $visits = Addvisit::find($id);
        $visits->delete();
        return redirect(route('viewvisit'))->with('success',"Data deleted.");
    }

}