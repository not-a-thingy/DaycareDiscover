<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\DayInfo;
use Illuminate\Support\Facades\Auth;
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

        $user = Auth::user();
        $course = DayInfo::orderBy('id', 'asc')->where('id_daycare', $user->id)->get();
      return view ('operator.daycare.index', compact ('course'));
    }


    public function create()
    {
        if (auth()->user()->role != 2) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }

        $imageName = '';
        return view('operator.daycare.create', compact('imageName'));
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
 
   
  
    public function update(Request $request, $id)
    {
        
        // Find the DayInfo record by ID
        $dayInfo = DayInfo::findOrFail($id);
    
        // Check if a new image has been uploaded
        if ($request->hasFile('img') && $request->hasFile('lisence')) {
            // Upload the new image
            $imagePath = $request->file('img')->store('daycare_images', 'public');
            $requestData["img"] = $imagePath;
            

            $filelicense = time().$request->file('lisence')->getClientOriginalName();
            $pathlicense = $request->file('lisence')->storeAs('license_images', $filelicense, 'public');
            $requestData["lisence"] = 'public/'.$pathlicense;

            // Update the image field in the database
            $dayInfo->update([
                'img' =>  $requestData["img"] ,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
                'facilities' => $request->input('facilities'),
                'lisence' =>  $requestData["lisence"],
                'landmark' =>  $request->input('landmark'),
            
            ]);       
    
        }else if($request->hasFile('lisence')){

            $filelicense = time().$request->file('lisence')->getClientOriginalName();
            $pathlicense = $request->file('lisence')->storeAs('license_images', $filelicense, 'public');
            $requestData["lisence"] = 'public/'.$pathlicense;

            // Update the image field in the database
            $dayInfo->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
                'facilities' => $request->input('facilities'),
                'lisence' =>  $requestData["lisence"],
                'landmark' =>  $request->input('landmark'),
            ]);

           
        }else {
            dd($dayInfo);

            $dayInfo->update($request->except('img' , 'lisence'));
        }
    
        return redirect('daycare')->with('flash_message', 'Daycare information has been updated successfully.');
    }
    
  
    public function destroy($id)
    {
        DayInfo::destroy($id);
        return redirect('daycare')->with('flash_message', 'Courses deleted!');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|string',
            'email' => 'required|email',
            'contact' => 'required|string',
            'address' => 'required|string',
            'facilities' => 'required|string',
            'lisence' =>  'required|image|mimes:jpeg,png,jpg,gif,svg',
            'landmark' => 'required|string',
            
        ]);

        $user = Auth::user();
        if ($request->hasFile('img')) {
            $fileName = time().$request->file('img')->getClientOriginalName();
            $path = $request->file('img')->storeAs('daycare_images', $fileName, 'public');
            $requestData["img"] = 'public/'.$path;
    
            $filelicense = time().$request->file('lisence')->getClientOriginalName();
            $pathlicense = $request->file('lisence')->storeAs('license_images', $filelicense, 'public');
            $requestData["lisence"] = 'public/'.$pathlicense;

        // Handle image upload
        DayInfo::create([
            'id_daycare' => $user->id, 
            'img' => $requestData['img'], 
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address'),
            'facilities' => $request->input('facilities'),
            'lisence' => $requestData['lisence'],
            'landmark' => $request->input('landmark'),
           
        ]);

        $imageName = $request->file('img')->hashName();

        $request->file('img')->storeAs('public/daycare', $imageName);

        return redirect('daycare')->with('flash_message', 'Daycare information has been added successfully.');
    } else {
        return redirect('daycare')->with('error', 'Image upload failed.');
    }
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
