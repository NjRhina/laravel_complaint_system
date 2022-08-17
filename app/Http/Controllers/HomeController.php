<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function index(){
        $complaints = Complaint::all();

        if(Auth::check()){

            if (Auth::user()->role=='1'){

                return view('admin.index',['complaints' => $complaints]);
            }else{
                $user = Auth::user();
                $complaints = Complaint::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
                return view('complaints.index',['complaints' => $complaints]);
            }

        }else{
            return redirect('/login');
        }
    }
}
