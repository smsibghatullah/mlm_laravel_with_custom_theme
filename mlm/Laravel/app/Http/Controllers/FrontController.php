<?php
  
namespace App\Http\Controllers;
   
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
        Log::info('0000000000000000000000000000000000000000!');
        Log::info($request);

            $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);
       
            $credentials = $request->only('username', 'password');
Log::info($credentials);

            // print_r("sssssss");
            // exit();

            if (Auth::attempt($credentials)) {
                return redirect()->intended('inde')
                            ->withSuccess('Signed in');
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
        $res = User::create([
            'name' => 'aaaaa',
            'email' => 'aaaaa@sdsd.com',
            //'password' => 'aaaaaadasasasasa'
          ]);

        Log::info($res);
        print_r("asssss");
        exit();

        return view('front.register');
    }
    
    
    public function save(Request $request)
    {

exit();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        MLMMembers::create($request->all());
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
        print_r("--------------");
        $profile = MLMMembers::find($id);
        print_r($profile);
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