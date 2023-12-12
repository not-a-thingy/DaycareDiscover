<?php

namespace App\Http\Controllers;
use App\Models\DayInfo;
use Illuminate\Http\Request;
use Sortable;



class ViewDayCareController extends Controller
{

    
    public function index()
    {
     
      $data = DayInfo::where('verify', 1)->orderBy('id', 'asc')->paginate(10);
      return view ('include.daycare', compact ('data'));
    }

    public function show($id)
    {
        $course = DayInfo::find($id);
        return view('include.show_daycare')->with('course', $course);
    }
}