<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $orders=DB::table('orders')->get()->toArray();
        $users=DB::table('users')->get()->toArray();
        $total_users=DB::table('users')->count();
        $revenue=DB::table('users')->sum('bal');
        $total_live_orders=DB::table('orders')->count();
        $total_close_orders=DB::table('close_orders')->count();

        return view('Admin.index')->with('orders',$orders)->with('total_users',$total_users)
        ->with('revenue',$revenue)->with('total_live_orders',$total_live_orders)
        ->with('total_close_orders',$total_close_orders)->with('users',$users)
        
        ;
    }



    public function close(){
        $orders=DB::table('close_orders')->get()->toArray();

        return view('Admin.close')->with('orders',$orders);
    }

    public function users(){
        $users=DB::table('users')->get()->toArray();

        return view('Admin.users')->with('users',$users);
    }

    public function orders(){
        $orders=DB::table('orders')->get()->toArray();

        return view('Admin.orders')->with('orders',$orders);
    }

    public function withdraw(){
        $withdraw=DB::table('withdraw')->get()->toArray();

        return view('Admin.withdraws')->with('withdraw',$withdraw);
    }
    public function withdraw_edit(Request $request,$id){
        DB::table('withdraw')->where('id',$id)->update([
            "status"=>"Approved",
        ]);
        
        // dd(number_format($request->btc));
    return back()->with('success',"Changed Successfully");
            }
    // 26212.606567
    public function change($id){
        $open_price=DB::table('orders')->where('id',$id)->value('open');
        $volume=DB::table('orders')->where('id',$id)->value('volume');
        $symbols=DB::table('orders')->where('id',$id)->value('symbols');
        // dd($symbols);

        return view('Admin.change')->with('open_price',$open_price)->with('id',$id)
        ->with('volume',$volume)->with('symbols',$symbols)
        
        ;
    }

    public function users_edit($id){
        $name=DB::table('users')->where('id',$id)->value('name');
        $email=DB::table('users')->where('id',$id)->value('email');
        $password=DB::table('users')->where('id',$id)->value('password');
        $bal=DB::table('users')->where('id',$id)->value('bal');
        // dd($symbols);

        return view('Admin.users_edit')->with('name',$name)->with('id',$id)
        ->with('email',$email)->with('password',$password)
        ->with('bal',$bal)
        
        ;
    }


    public function update_order(Request $request){
        $id=$request->id;
        DB::table('orders')->where('id',$id)->update([
            "open"=>$request->open_price,
            "volume"=>$request->volume,
            "symbols"=>$request->symbols,
        ]);
        
        // dd(number_format($request->btc));
    return redirect('admin')->with('success',"Changed Successfully");
            }

            public function delete($id){

                DB::table("users")->where('id',$id)->delete();
            return redirect('admin')->with('success',"Changed Successfully");

            }

            public function update_user(Request $request){
                $id=$request->id;
                DB::table('users')->where('id',$id)->update([
                    "name"=>$request->name,
                    "email"=>$request->email,
                    "password"=>$request->password,
                    "bal"=>$request->bal,
                ]);
                // dd($request->id);
                // dd(number_format($request->btc));
            return redirect('admin')->with('success',"Changed Successfully");
                    }


                    public function ViewDoc(Request $request){
                        $doc = DB::table('users')
                                  ->join('deposit', 'users.id', '=', 'deposit.user_id')
                                  ->select('users.*','deposit.*')
                                  ->get();
                        return view("Admin.deposits")->with('doc',$doc);
                      
                      }
                      

                      

public function ViewDeposit(Request $request,$id){
    $doc = DB::table('users')
              ->join('deposit', 'users.id', '=', 'deposit.user_id')
              ->select('users.*','deposit.*')->where('deposit.id',$id)
              ->get();
    return view("Admin.view_deposit")->with('doc',$doc);
  
  }
  
  
                      
}
