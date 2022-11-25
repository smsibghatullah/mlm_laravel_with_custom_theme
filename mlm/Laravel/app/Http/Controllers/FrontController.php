<?php
  
namespace App\Http\Controllers;

use Hash;   
use App\Models\User;
use App\Models\MLMMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
  
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login()
    {

        return view('front.login');
    } 

    public function customLogin(Request $request)
    {

            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
       
            $credentials = $request->only('email', 'password');
           

            if (Auth::attempt($credentials)) {
                Log::info('pass');
                return redirect()->intended('index')
                            ->withSuccess('Signed in');
            }
            else {
                Log::info('Faild');
            }
      
            return redirect("index")->withSuccess('Login details are not valid');
    }


    public function index()
    {
        // $users = User::latest()->paginate(5);
    
        return view('front.index');
    }
     
    //  public function show()
    // {
    //     // $users = User::latest()->paginate(5);
    
    //     return view('front.index');
    // }
     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // print_r("asssss");
        // exit();

        return view('front.register');
    }
    
    
    public function save(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:mlm_members',
        ]);
    
        MLMMembers::create($request->all());

        $res = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
          ]);

        Log::info($res);

        return view('front.index');
     
        // return redirect()->route('index')
        //                 ->with('success','User created successfully.');
    }


    /**
    
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        
        //
        exit();
        MLMMembers::create($request->all());

     
        return redirect()->route('/')
                        ->with('success','User created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $profile = MLMMembers::find($id);
        return view('front.profile',compact('profile'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        $user->update($request->all());
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}