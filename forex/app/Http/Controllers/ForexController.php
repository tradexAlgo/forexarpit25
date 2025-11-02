<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Str;
use Validator;
class ForexController extends Controller
{

public function last_update(){
    // return view('client.last_update')->with('orders',$orders)->with('close_orders',$close_orders);
    $user_id= Auth::user()->id;
    $orders=DB::table('orders')->where('user_id',$user_id)->get()->toArray();
    $close_orders=DB::table('close_orders')->where('user_id',$user_id)->get()->toArray();

    return view('client.last_update')->with('orders',$orders)->with('close_orders',$close_orders);

}  

    public function index(Request $request)
    {
        $user_id= Auth::user()->id;
        $orders=DB::table('orders')->where('user_id',$user_id)->get()->toArray();
        $close_orders=DB::table('close_orders')->where('user_id',$user_id)->get()->toArray();

        return view('client.index')->with('orders',$orders)->with('close_orders',$close_orders);
    }  
 
    public function close_trade(Request $request,$order_id){

        $id=DB::table('orders')->where('id',$order_id)->value('user_id');
        $bal=DB::table('users')->where('id',$id)->value('bal');
        $symbol=DB::table('orders')->where('id',$order_id)->value('symbols');
        $ticket=DB::table('orders')->where('id',$order_id)->value('ticket');
        $comment=DB::table('orders')->where('id',$order_id)->value('comment');
        $open=DB::table('orders')->where('id',$order_id)->value('open');
        $pay=DB::table('orders')->where('id',$order_id)->value('pay');
        $type=DB::table('orders')->where('id',$order_id)->value('type');
        $volume=DB::table('orders')->where('id',$order_id)->value('volume');
        DB::table('orders')->where('id',$order_id)->update([
            'profit'=>$request->key1,
        ]);


        DB::table('orders')->where('id',$order_id)->update([
    'profit'=>$request->key1,
]);
DB::table('close_orders')->insert([
    'user_id'=>$id,
    'close'=>$request->key2,
    'symbols'=>$symbol,
    'ticket'=>$ticket,
    'type'=>$type,
    'volume'=>$volume,
    'comment'=>$comment,
    'pay'=>$pay,
    'open'=>$open,
    'profit'=>$request->key1,
]);

$profit=$request->key1;
// dd($profit);
                $lot=$volume*100000;

$new_bal=$bal+$profit+$pay;
            DB::table('users')->where('id',$id)->update([
                'bal'=>$new_bal,    
            ]);
DB::table('orders')->where('id',$order_id)->delete();
return response()->json("auidoiasdpapsdgasdogo".$profit);
    }
    
    public function process_trade(Request $request){
        $user_id= Auth::user()->id;
        $ticket=substr(number_format(time() * rand(),0,'',''),0,6);

        if ($request->has('action')) {
            $action = $request->input('action');

            if ($action === 'sel_market') {
                // Handle Action 1
   // Handle Action 2
   $bal=DB::table('users')->where('id',$user_id)->value('bal');
   $open_price=$request->open_prices;



   $volume=$request->volume;
   $lot=$volume*$open_price;

   if($lot>$bal){
    //    dd("TEst".$lot);

       return back()->with("warning",'Your Funds Are Low');

       }else{

           $new_bal=$bal-$lot;

           DB::table('orders')->where('user_id',$user_id)->insert([
               'symbols'=>$request->user_symbol,
               'comment'=>$request->comment,
               'open'=>$request->open_prices,
               'pay'=>$lot,
               'type'=>"sell",
               'volume'=>$volume,
               'ticket'=>$ticket,
               'user_id'=>$user_id,
           ]);

           DB::table('users')->where('id',$user_id)->update([
               'bal'=>$new_bal,
               'free'=>$new_bal,
           ]);
           return back()->with("success",'Order Started Successfully');
       }
            } elseif ($action === 'buy_market') {
                // Handle Action 2
                $bal=DB::table('users')->where('id',$user_id)->value('bal');
                $open_price=$request->open_prices;
        
        
        
                $volume=$request->volume;
                $lot=$volume*$open_price;

                if($lot>$bal){
                    // dd("TEst".$lot);

                    return back()->with("warning",'Your Funds Are Low');
            
                    }else{
                        // dd("TausduiasEst".$lot);
                        $new_bal=$bal-$lot;

                        // dd("New_bal".$new_bal);

                        DB::table('orders')->where('user_id',$user_id)->insert([
                            'symbols'=>$request->user_symbol,
                            'comment'=>$request->comment,
                            'open'=>$request->open_prices,
                            'pay'=>$lot,
                            'type'=>"buy",
                            'volume'=>$volume,
                            'ticket'=>$ticket,
                            'user_id'=>$user_id,
                        ]);
            
                        DB::table('users')->where('id',$user_id)->update([
                            'bal'=>$new_bal,
                            'free'=>$new_bal,

                        ]);
                        return back()->with("success",'Order Started Successfully');
                    }
            }
        }

    }
    public function start_buy_order(Request $request){
        $user_id= Auth::user()->id;

        $bal=DB::table('users')->where('id',$user_id)->value('bal');
        $price=$request->price;
        $open_price=$request->open_prices;



        $volume=$request->volume;
        $lot=$volume*100000;
        dd($open_price);

        if($price>$bal){
        return back()->with("warning",'Your Funds Are Low');

        }else{
            $new_bal=$bal-$price;
            DB::table('orders')->where('user_id',$user_id)->insert([
                'symbols'=>$request->user_symbol,
                'pay'=>$price,
                'open'=>$open_price,
                'user_id'=>$user_id,
            ]);

            // DB::table('users')->where('id',$user_id)->update([
            //     'bal'=>$new_bal,
            // ]);
            return back()->with("success",'Order Started Successfully');
        }
     
    }

    public function auth_page(Request $request){

            return view('client.change_auth');
    }

    public function change_auth(Request $request){
        $user_id= Auth::user()->id;
        $request->validate([
            'password' => 'required',

            'account_Id' => 'required|unique:users',
        ]);
        DB::table('users')->where('id',$user_id)->update([
            'account_Id'=>$request->account_Id,
            'password'=>$request->password,
        ]);
        return redirect('/dashboard')->with("success",'Login Details Change Successfully');


    }
    public function deposit_page(){

        return view('client.deposit');
    }

    public function withdraw_page(){

        return view('client.withdraw');
    }
    public function make_withdraw(Request $request){
        $user_id= Auth::user()->id;

        DB::table('withdraw')->insert([
            'user_id'=>$user_id,
            'account_number'=>$request->account_number,
            'bname'=>$request->bname,
            'iban'=>$request->iban,
            'amount'=>$request->amount,
        ]);
        return back()->with("success",'Withdraw Done Successfully');

    }

    public function UploadDocuments(Request $request){

        $user_id=$request->user()->id;

   
   
      $image  = $request->image->getClientOriginalName();
      
   
    
   
       // dd($email);
      DB::table('deposit')->insert([
       'image'=>$image,
       'user_id'=>$user_id,
    //    'status'=>'Uploaded',
      ]);
    
    

 
           $request->image->move(public_path('images'), $image);
   
    return back()->with('success','Deposit Submitted Successfully ');
       }
}
