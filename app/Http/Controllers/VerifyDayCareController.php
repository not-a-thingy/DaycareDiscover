<?php

namespace App\Http\Controllers;
use App\Models\DayInfo;
use Illuminate\Http\Request;
use Sortable;



class VerifyDayCareController extends Controller
{

    
    public function index()
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
      $data = DayInfo::orderBy('id', 'asc')->paginate(10);
      return view ('admin.verify.verify', compact ('data'));
    }

  
    public function show($id)
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        $user = DayInfo::find($id);
        return view('admin.verify.show')->with('user', $user);
    }

    
    public function edit($id)
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
     
        $user = DayInfo::find($id);
        
        return view('admin.verify.edit',compact ('user'))->with('user', $user);
    }
 
   
  
    public function update(Request $request,$id)
    {
         $input = $request->all();
        $course = DayInfo::find($id);
        $course->update($input);
        
        return redirect('/admin/verify/daycares')->with('flash_message', 'Courses Updated!');  
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
