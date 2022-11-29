<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\deposit;
use App\Models\transaction;
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

    public function transaction(int $id)
    {
        $profile = User::find($id);
        // dd($profile);
        return view('admin.transaction',compact('profile'));          
        
    }

    public function savetransaction(Request $data){
        $create = [
            'amount' => $data->amount,
            'deposit'=> $data->deposit_withdraw == 'deposit' ?? true,
            'withdraw'=>$data->deposit_withdraw == 'withdraw' ?? false,
            'status'=>'Approved',
            'description'=> $data->description,
            'title'=> $data->title,
            'transaction_id'=>uniqid(),
            'user_id' => $data->user_id,
        ];
        // dd($create);
        // First Line bouns 
        $res = Transaction::create($create);
        if($res){
            $users = User::latest()->paginate(1000);
    
            return view('admin.users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }



    public function users()
    {
        $users = User::latest()->paginate(1000);
    
        return view('admin.users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        
    }

    public function user(int $id)
    {
        $profile = User::find($id);

        $deposits = Deposit::where('user_id', $id)->get();
        Log::info($deposits);
        // Log::info(print_r($deposits->user_id, true));
        return view('admin.profile',compact('profile','deposits'));
        
    }

    public function mark_approve_user(int $id)
    {
        $profile = User::find($id);
        $data = User::where('id', $id)->update([
           'status' => 'Approved'
        ]);
        $deposits = Deposit::where('user_id', $id)->firstOrFail();

        Deposit::where('user_id', $id)->update([
           'status' => 'Approved'
        ]);

        $code_array = $profile->parent_code;
        // $code_array = [];
        while ($code_array) {
            $code = $code_array;
            Log::info(print_r($code, true));
            Log::info("asaaaaaaaaaasssssssssssssssssssss");
            $user = User::where('code', $code)->firstOrFail();

            $this->referal_bouns($deposits['amount'], $user->id);
            
            $code_array = $user->parent_code;
        }
        // in progress
        

        
        return view('admin.profile',compact('profile','deposits'));
        

        
    }

    public function referal_bouns(float $amount, int $user_id)
    {
        // First Line bouns 
        $res = Transaction::create([
            'amount' => $amount/100*5,
            'deposit'=>true,
            'withdraw'=>false,
            'status'=>'Approved',
            'description'=>'Refer Bonus On Deposit Of Refer Person',
            'title'=>'Bouns',
            'transaction_id'=>uniqid(),
            'user_id' =>$user_id,
          ]);

    }


}
