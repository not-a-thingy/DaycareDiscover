<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use PDF;
use Auth;
use Image;

class UserController extends Controller
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
        $user = Auth::user();
    
        return view('users.show', compact('user'));
    }
    

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editt($id)
    {
        $user = User::find($id);
        
        return view('users.edit', compact('user'));
    }

    public function editpass($id)
    {
        $user = User::find($id);
        
        return view('users.change', compact('user'));
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
        'email' => 'required|email|unique:users,email,' . $id,
    ]);

    $input = $request->only(['name', 'email']);

    $user = User::find($id);
    $user->update($input);

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

public function update1(Request $request, $id)
{
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
    ]);

    $input = $request->only(['name', 'email']);

    $user = User::find($id);
    $user->update($input);

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}


public function change(Request $request, $id)
{
    $this->validate($request, [
        'password' => 'required|confirmed|min:6',
    ]);

    $input = $request->only(['password']);
    $input['password'] = Hash::make($input['password']);

    $user = User::find($id);
    $user->update($input);

    return redirect()->route('users.index')->with('success', 'Password updated successfully.');
}

    // public function update(Request $request, $id)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users,email,'.$id,
    //         'password' => 'confirmed',
    //         'roles' => 'required'
    //     ]);
    
    //     $input = $request->all();
        
    //     if(!empty($input['password'])) { 
    //         $input['password'] = Hash::make($input['password']);
    //     } else {
    //         $input = Arr::except($input, array('password'));    
    //     }
    
    //     $user = User::find($id);
    //     $user->update($input);

    //     DB::table('model_has_roles')
    //         ->where('model_id', $id)
    //         ->delete();
    
    //     $user->assignRole($request->input('roles'));
    
    //     return redirect()->route('users.index')
    //         ->with('success', 'User updated successfully.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
   


   
}
