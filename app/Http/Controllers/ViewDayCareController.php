<?php

namespace App\Http\Controllers;

use App\Models\DayInfo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Sortable;



class ViewDayCareController extends Controller
{


  public function index()
  {

    $data = DayInfo::where('verify', 1)->orderBy('id', 'asc')->paginate(10);
    return view('include.daycare', compact('data'));
  }

  public function show($id)
  {
    $course = DayInfo::find($id);
    return view('include.show_daycare')->with('course', $course);
  }




  public function updateByParent(Request $request,$id){
      // Find the DayInfo record by ID
      $dayInfo = DayInfo::findOrFail($id);
    
      // Check if a new image has been uploaded
      if ($request->hasFile('img')) {
          // Upload the new image
          $imagePath = $request->file('img')->store('daycare_images', 'public');
          $requestData["img"] = $imagePath;
          // Update the image field in the database
          $dayInfo->update([
              'img' =>  $requestData["img"] ,
              'name' => $request->input('name'),
              'email' => $request->input('email'),
              'contact' => $request->input('contact'),
              'address' => $request->input('address'),
              'facilities' => $request->input('facilities'),
              'rating' => $request->input('rating'),
          ]);
      } else {
          // No new image selected, update other fields without changing the image field
          $dayInfo->update($request->except('img'));
      }
  
      return redirect()->route('parent.view_daycares')->with('flash_message', 'Daycare information has been updated successfully.');
  }


}