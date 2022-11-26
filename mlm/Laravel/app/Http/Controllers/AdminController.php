<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //


    public function index()
    {
        // $users = User::latest()->paginate(5);
    
        return view('admin.index');
    }



    public function users()
    {
        $users = User::latest()->paginate(5);
    
        return view('admin.users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        
    }

    public function user(int $id)
    {
        $profile = User::find($id);
        return view('admin.profile',compact('profile'));


        
    }

    public function mark_approve_user(int $id)
    {

        $data = User::where('id', $id)->update([
           'status' => 'Approved'
        ]);

        $profile = User::find($id);
        return view('admin.profile',compact('profile'));
        

        
    }



}
