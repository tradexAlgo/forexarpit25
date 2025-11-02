<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use Mail;
use Session;
use Carbon\Carbon; 

use App\Mail\OtpMail;
use App\Mail\ForgetPassword;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Str;



  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('Auth.login');
    }  

 

  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('Auth.register');
    }
  
      
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

   
        $credentials = User::where('account_Id', $request->id)
        ->where('password', $request->password)
        ->first();

      $email=$request->email;
    
if($credentials) {
    Auth::login($credentials);
    $user_id=$request->user()->account_Id;
    $main_id=$request->user()->id;
    $admin_id=$request->user()->id;
    // dd($user_id);   
    if($admin_id=="1"){
        return redirect('admin');
      }
//       DB::table('users')->where('id',$main_id)->update([
//         "login"=>"Notverified",
// ]);

      
    return redirect('dashboard')->withSuccess('Welcome Back');
} else {
    return redirect("login")->withWarning('Oppes! You have entered invalid credentials');

}
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

$name=$request->name;
$password=$request->password;
$email=$request->email;

$account_id=substr(number_format(time() * rand(),0,'',''),0,6);
// dd($account_id);
  $user=  User::create([
             'account_Id' => $account_id,
             'name' => $request->name,
            'email' => $email,
            'password' =>$request->password,
           ]);
           $details = [
            'name' =>$request->name,
            'id' =>$account_id,
            'password'=>$request->password,
        ];
      
         Mail::to($email)->send(new RegisterMail($details));
        Auth::login($user);
     
return redirect('dashboard')->with('success',"Thanks You are fully Verified");
}


    // return redirect('dashboard')->with('success','Congratulations You are verified With us to do banking');

    public function otpPage(){
        return view('client.emailOtp');
    }

public function  ConfirmOtp(Request $request){
    $confirm_otp1=$request->confirm_otp1;
    $confirm_otp2=$request->confirm_otp2;
    $confirm_otp3=$request->confirm_otp3;
    $confirm_otp4=$request->confirm_otp4;
    $confirm_otp=$request->otp;
    $user_id=$request->user()->id;

    $user_otp=  DB::table('users')->where('id',$user_id)->value('otp');
// dd($confirm_otp1);
    if($user_otp==$confirm_otp){
      $account_number=  DB::table('users')->where('id',$user_id)->value('account_number');
      $email=  DB::table('users')->where('id',$user_id)->value('email');
      $password=  DB::table('users')->where('id',$user_id)->value('password');

        $details = [
            'name' => $request->name,
            'email' => $email,
            'email' =>$email,
            'password' =>$password,
        ];
        DB::table('users')->where('id',$user_id)->update([
            "status"=>"Verified",
]);
        Mail::to($email)->send(new RegisterMail($details));
        return redirect('dashboard')->with('success',"Thanks You are fully Verified");


    }else{
        return back()->with('warning',"Your Otp is Not Verified ");
    }
}
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create( Request $request)
    {
      User::create([
        'name' =>  $request->fullname,
        'email' => $request->email,
        'password' =>$request->password,
   
      ]);
   

    //   return redirect(route('login'))->withSuccess(' You have access');
    return redirect('profile')->withSuccess('Great! You are Successfully Registered');


    }



    public function showForgetPasswordForm()
    {
       return view('Auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);
        $email=$request->email;

        $token = Str::random(64);

        DB::table('forget_password')->insert([
            'email' => $email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
         $name=DB::table('users')->where('email', $email)->value('name');
          $details = [
            'name' => $name,
            'email' =>$email,
            'token'=>$token
        ];
        Mail::to($email)->send(new ForgetPassword($details));

     

        return back()->with('success', 'We have e-mailed your password reset link!');
    }




    public function showResetPasswordForm($token) { 
        return view('auth.forgetPasswordLink', ['token' => $token]);
     }
    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('forget_password')
                            ->where([
                              'email' => $request->email, 
                              'token' => $request->token
                            ])
                            ->first();

        if(!$updatePassword){
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
                    ->update(['password' => $request->password]);

        DB::table('forget_password')->where(['email'=> $request->email])->delete();
        return redirect('/login')->with('message', 'Your password has been changed!');
        
    }

    public function loginPage(){
        return view('client.loginotp',['success'=>'Property is updated .']);
    }
    


    public function  loginotp(Request $request){
    $confirm_otp=$request->confirm_otp;
    $user_id=$request->user()->id;

    $user_otp=  DB::table('users')->where('id',$user_id)->value('login_otp');
    // dd($confirm_otp);
    if($user_otp==$confirm_otp){

      $email=  DB::table('users')->where('id',$user_id)->value('email');
      $password=  DB::table('users')->where('id',$user_id)->value('password');

      
      DB::table('users')->where('id',$user_id)->update([
        "login"=>"Verified",

]);




        return redirect('dashboard')->with('success',"Thanks Welcome Back");


    }else{
        return back()->with('warning',"Your Otp is Not Verified ");
    }
}
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}