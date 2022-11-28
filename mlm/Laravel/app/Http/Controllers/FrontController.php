<?php
  
namespace App\Http\Controllers;

use Hash;   
use App\Models\User;
use App\Models\deposit;
use App\Models\dailytask;
use Illuminate\Http\Request;
use App\Models\transaction;
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
    public function depositform()
    {
        $user_detail = Auth::user();
        return view('front.depositform',compact('user_detail'));
    }

    public function activity()
    {
        return view('front.activity');

    }

    public function dailytaskcomplate()
    {
        
        $level1_user_amount = Deposit::where('user_id',Auth::user()->id)->firstOrFail();

        if($level1_user_amount['level']==1)
        {
            $amount = ($level1_user_amount['amount']/100)*0.5;
        }
        elseif($level1_user_amount['level']==2)
        {
            $amount = ($level1_user_amount['amount']/100)*0.6;
        }
        elseif($level1_user_amount['level']==3)
        {
            $amount = ($level1_user_amount['amount']/100)*0.73;
        } 
        elseif($level1_user_amount['level']==4)
        {
            $amount = ($level1_user_amount['amount']/100)*0.83;
        } 

        $res = Dailytask::create([
            'amount' => $amount,
            'user_id' => Auth::user()->id,
          ]);

        $response = array(
          'status' => 'success',
          'msg' => 'Done',
      );

        // Log::info($res);

        response()->json($response); 

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
     


    public function tree()
    {
        // $users = User::latest()->paginate(5);
        $tree_html = '<ul><li>';
        $plucked = User::all()->pluck(
          'full_name', 
          'code'
        );
        $user_name_data = $plucked->all();

        Log::info(print_r($user_name_data['63832848403fa'], true));


        $code = Auth::user()->code;

                        Log::info(print_r(Auth::user()->code, true));

        $tree_html .='<a>'.$user_name_data[$code].'</a>';
        $tree = [];

        $child = $this->get_child($code);
        
        if(count($child)>0)
            { 
                $tree[$code] = $child;
                $tree_html .= '<ul>';
                foreach ($child as $code1) 
                {
                    $tree_html .='<li>';
                    $child1 = $this->get_child($code1);
                    $tree_html .='<a>'.$user_name_data[$code1].'</a>';

                    if(count($child1)>0)
                        { 
                    
                        $tree_html .= '<ul>';
                        $tree[$code][$code1] = $child1;
                        foreach ($child1 as $code2) 
                            {
                            $tree_html .='<li>';
                            $child2 = $this->get_child($code2);
                            $tree_html .='<a>'.$user_name_data[$code2].'</a>';

                            if(count($child2)>0)
                                {
                                    $tree_html .= '<ul>';
                                foreach ($child2 as $code3) 
                                    { 
                                            $tree_html .='<li>';
                                            // $child2 = $this->get_child($code2);
                                            $tree_html .='<a>'.$user_name_data[$code3].'</a>';                                            
                                            $tree_html .='</li>';

                                    }
                                    $tree_html .='</ul>';
                                }
                            $tree_html .='</li>';
                            }
                        $tree_html .='</ul>';
                        }
                    $tree_html .='</li>';
                }
                $tree_html .='</ul>';

            }
            
$tree_html .='</li></ui>';




                Log::info(print_r($tree_html, true));    
        return view('front.tree',compact('tree_html'));
    }
     


    public function get_child($code)
    {
            $sub_tree = [];
            $level1_user = User::where('parent_code',$code)->get();
            
            if($level1_user)
            {

            foreach ($level1_user as $user)    
            {
                array_push($sub_tree,$user['code']);
            }
            }
            return $sub_tree;


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
    

    public function savedeposit(Request $request)
    {
        Log::info(" savedeposit 00000000");

        // dd(uniqid());
        $request->validate([
            'amount' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);    

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/deposit'), $imageName);
        $res = Deposit::create([
            'amount' => $request->amount,
            'image' => $imageName,
            // 'email' => $request->email,
            'status'=>'pending',
            'user_id' => Auth::user()->id,
          ]);

        Log::info($res);
        // return view('front.index');     
        return redirect()->route('/transaction')->with('success','Registration Completed successfully.');
    }

    public function transactions()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        return view('front.transactions',compact('transactions'));
    }

    public function blog()
    {
        // $transactions = Transaction::where('user_id', Auth::user()->id)->get();
        return view('front.blog');
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
            // 'phone' => 'required|unique:users',
            // 'parent_code' => 'exists:users,code',
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