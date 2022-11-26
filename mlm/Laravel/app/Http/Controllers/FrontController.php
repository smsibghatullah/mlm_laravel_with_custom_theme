<?php
  
namespace App\Http\Controllers;

use Hash;   
use App\Models\User;
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
    public function depositeform()
    {
        return view('front.depositeform');
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }


    public function customLogin(Request $request)
    {



            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            

            $credentials = $request->only('email', 'password');
       
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/')
                            ->withSuccess('Signed in');
            }
            else {
            }
      
            return redirect("login")->withSuccess('Login details are not valid');
    }


    public function index()
    {
        // $users = User::latest()->paginate(5);
    
        return view('front.index');
    }
     
   
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

        // dd(uniqid());
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'user_name' => 'required|unique:users',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'fund_password' => 'min:6|required_with:confirm_fund_password|same:confirm_fund_password',
            'phone' => 'required|unique:users',
            'parent_code' => 'exists:users,code',
        ]);


        $res = User::create([
            'full_name' => $request->full_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fund_password' => Hash::make($request->fund_password),
            'phone' => $request->phone,
            'parent_code' => $request->parent_code,
            'code' => uniqid()
          ]);

        Log::info($res);
        // return view('front.index');     
        return redirect()->route('login')->with('success','Registration Completed successfully.');
    }

     
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $profile = User::find($id);
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