<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $user = Auth::user();
        // $complaints = Complaint::where('user_name', $user->name)->orderBy('created_at', 'desc')->get();
        $complaints = Complaint::all()->orderBy('created_at', 'asc')->get();
        // return view('complaints.index',compact('user', 'complaints'));
        return view('admin.index','complaints',compact('user', 'complaints'));
    }

    public function action(Complaint $complaint){

        return view ('admin.action',['complaint' => $complaint]);

    }

    // to be implemented soon...
    public function status(Complaint $complaint){
        return redirect('home');
    }
}
