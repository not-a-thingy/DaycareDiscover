<?php

namespace App\Http\Controllers;
use App\Models\DayInfo;
use Illuminate\Http\Request;
use Sortable;



class DayCareInfoController extends Controller
{

    
    public function index()
    
    {
        if (auth()->user()->role != 2) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        $course = DayInfo::orderBy('id', 'asc')->paginate(7);
      return view ('operator.daycare.index', compact ('course'));
    }


    public function create()
    {
        if (auth()->user()->role != 2) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        return view('operator.daycare.create');
    }
 
  
    public function show($id)
    {
        if (auth()->user()->role != 2) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        $course = DayInfo::find($id);
        return view('operator.daycare.show')->with('course', $course);
    }

    
    public function edit($id)
    {

        if (auth()->user()->role != 2) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
     
        $user = DayInfo::find($id);
        
        return view('operator.daycare.edit',compact ('user'))->with('user', $user);
    }
 
   
  
    public function update(Request $request,$id)
    {
         $input = $request->all();
        $course = DayInfo::find($id);
       
        
        $course->update($input);
        
        return redirect('daycare')->with('flash_message', 'Courses Updated!');  
    }
 
  
    public function destroy($id)
    {
        DayInfo::destroy($id);
        return redirect('daycare')->with('flash_message', 'Courses deleted!');  
    }

    public function store(Request $request)
    {
        $input = $request->all();
        DayInfo::create($input);
        return redirect('daycare')->with('flash_message', 'Course Addedd!');  
    }

    private function redirectToRole($role)
    {
        switch ($role) {
            case 1:
                return redirect()->route('admin.home');
            case 2:
                return redirect()->route('operator.home');
            default:
                return redirect()->route('home');
        }
    }
}
