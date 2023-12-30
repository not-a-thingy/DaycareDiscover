<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bookvisit;
use App\Models\Addvisit;
use App\Models\DayInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookVisitController extends Controller
{
    /*function bookvisit(){
        $books = Bookvisit::orderBy('date', 'asc')->orderBy('time', 'asc')->get()->toArray();
        $availDate = Addvisit::distinct()->orderBy('date', 'asc')->get('date')->toArray();

        return view('bookvisit', compact('books', 'availDate'));
    }*/

    public function bookvisit($id)
{
    $daycare = DayInfo::find($id);
    $user_id = Auth::id();
    $books = Bookvisit::where('daycare_id', $id)->where('user_id', $user_id)->orderBy('date', 'asc')->orderBy('time', 'asc')->get()->toArray();
    $availDate = Addvisit::distinct()->orderBy('date', 'asc')->get('date')->toArray();
    // other code...
    return view('bookvisit', compact('books', 'availDate', 'daycare'));
}
    
    public function availTime(Request $request)
{
    $date = $request->input('date');
    $times = Addvisit::where('date', $date)->orderBy('time', 'asc')->pluck('time');

    return response()->json(['times' => $times]);
}

    function bookvisitPost(Request $request){

       $request->validate([
            'date' => 'required',
            'time' => 'required'
        ]);

        $bookVisit = new BookVisit;
        $bookVisit->user_id = Auth::id();
        $bookVisit->daycare_id = $request->daycare_id;
        // Assign other booking details from the form
        
        $bookVisit['date'] = $request->date;
        $bookVisit['time'] = $request->time;
        $bookVisit->save();
        if(!$bookVisit){
            return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('error','Please try again');
        }
        return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('success','Please wait for approval'); 
}

    function edit(Request $request, $id, $daycare_id){

        $daycare = DayInfo::find($daycare_id);
        $bookVisit = new BookVisit;
        $bookVisit->user_id = Auth::id();
        $bookVisit->daycare_id = $request->daycare_id;
        $books = Bookvisit::find($id);
        
        $availDate = Addvisit::distinct()->orderBy('date', 'asc')->get('date')->toArray();
        return view('editbook', ['id' => $id, 'daycare_id' => $daycare_id, 'daycare' => $daycare, 'books' => $books, 'availDate' => $availDate, 'bookVisit' => $bookVisit]);
    }

    function update(Request $request, $id){

        $bookVisit = new BookVisit;
        $bookVisit->user_id = Auth::id();
        $bookVisit->daycare_id = $request->daycare_id;
        
        $this->validate($request, [
            'date'=> 'required',
            'time'=> 'required'
            ]);
        $books = Bookvisit::find($id);
        $books->date = $request->get('date');
        $books->time = $request->get('time');
        $books->save();
        if(!$books){
            return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('error','Please try again');
        }
        return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('success','Booking Has Been Updated');
    }

        function cancel(Request $request, $id){
            $bookVisit = new BookVisit;
            $bookVisit->user_id = Auth::id();
            $bookVisit->daycare_id = $request->daycare_id;

            $books = Bookvisit::find($id);
            $books->delete();
            if(!$books){
            return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('error','Please try again');
            }
        return redirect(route('bookvisit', ['id' => $bookVisit->daycare_id]))->with('success','Booking Cancelled');
        }

        function approvevisit(){
            $books = Bookvisit::all()->toArray();
            return view('operator/approvevisit', compact('books'));
          }
  
          function editapprove($id){
              $books = Bookvisit::find($id);
              return view('operator/approvalvisit', compact('books','id'));
          }
  
          function approvalvisit(Request $request,$id){
              $this->validate($request, [
                  'status' => 'required'
              ]);
              $books = Bookvisit::find($id);
              $books->status = $request->get('status');
              $books->save();
              return redirect(route('approvevisit'))->with('success',"Data updated.");
          }
}