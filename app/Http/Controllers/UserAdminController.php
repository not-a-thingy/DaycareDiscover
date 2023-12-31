<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use PDF;
use Auth;
use Image;

class UserAdminController extends Controller
{
    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct()
    {
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }

        $data = User::orderBy('id', 'desc')->paginate(5);
        
        return view('admin.index', compact('data'));
    }

   
   
    public function create()
    {
      if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        

        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'contact' => 'required',
            'address' => 'required',
            'image' => 'image|max:10048',
            'role' => 'required'
        ]);
    
        $input = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $input['image'] = $imagePath;
        }
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
       
    
        return redirect()->route('admin.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        $user = User::find($id);
        if (!$user) {
            abort(404); // or handle the situation appropriately
        }

        return view('admin.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }
        $user = User::find($id);

        return view('admin.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required'
          
           
        ]);
    
        $input = $request->all();
        
        if(!empty($input['password'])) { 
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
    
        return redirect()->route('admin.index')
            ->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('admin.index')
            ->with('success', 'User deleted successfully.');
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
