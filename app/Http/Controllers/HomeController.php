<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        // Check if the authenticated user is an admin
        if (auth()->user()->role != 1) {
            // If not an admin, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }

        return view('admin.admin-home');
    }

    public function operatorHome()
    {
        // Check if the authenticated user is an operator
        if (auth()->user()->role != 2) {
            // If not an operator, redirect to the appropriate home based on the role
            return $this->redirectToRole(auth()->user()->role);
        }

        return view('operator.operator-home');
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
