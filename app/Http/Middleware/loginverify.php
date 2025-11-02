<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\View\View;

use App\Mail\OtpMail;
use App\Mail\LoginMail;

class loginverify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user_id=$request->user()->id;

      $status=  DB::table('users')->where('id',$user_id)->value('login');
      $name=  DB::table('users')->where('id',$user_id)->value('name');
      $email=  DB::table('users')->where('id',$user_id)->value('email');
    //   dd($user_id);
        if($status!="Verified"){
            $otp=substr(number_format(time() * rand(),0,'',''),0,4);

            $details = [
                'name' => $name,
                'otp' =>$otp,
            ];
            DB::table('users')->where('id',$user_id)->update([
                "login_otp"=>$otp,
    ]);
                    Mail::to($email)->send(new LoginMail($details));
                   
                    return redirect('login-verify');
        }else{
            return $next($request);


        }

    }
}
