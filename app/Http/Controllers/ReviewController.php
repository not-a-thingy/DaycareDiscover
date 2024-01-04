<?php

namespace App\Http\Controllers;

use App\Models\DayInfo;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    
    public function create($id)
    {
      $daycare = DayInfo::find($id);
      return view('parent.add-review')->with('daycare', $daycare);
    }

    public function store(Request $request){
        $review = Review::create([
            'parent_id'=>$request->parent_id,
            'daycare_id'=>$request->daycare_id,
            'review_comment'=>$request->review_comment,
        ]);
        return redirect()->route('parent.view_daycares')->with('flash_message', 'Daycare review has been added successfully.');
    }

    public function update(Request $request,$id){
      $review = Review::find($id);
      $review->update([
        'parent_id'=>$request->parent_id,
        'daycare_id'=>$request->daycare_id,
        'review_comment'=>$request->review_comment || '',
    ]);
    return redirect()->route('parent.view_daycares')->with('flash_message', 'Daycare review has been updated successfully.');
    }

    public function edit($daycare)
    {
      $daycare = DayInfo::find($daycare);
      return view('parent.edit-review',['daycare'=>$daycare]);
    }

    public function delete($id){
        // Find the DayInfo record by ID
        $review = Review::find($id);
        $review->delete();
        return redirect()->back()->with('flash_message', 'Daycare review has been deleted successfully.');
      }
}
