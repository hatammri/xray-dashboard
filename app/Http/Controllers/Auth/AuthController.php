<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OTPSms;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->method()=='GET'){
            return view('auth.login');
        }

            $request->validate([
            'cellphone'=>'required|iran_mobile'
        ]);
        try{
            $user=User::where('cellphone',$request->cellphone)->where('role','admin')->first();
            $OTPCode=mt_rand(10000,99999);
            $loginToken =Hash::make('DCDVFBVYJJ!@EDFRdgthjngrNHBVF');
            if($user){
             $user->update([
            'otp'=>$OTPCode,
            'login_token' =>$loginToken
         ]);
         $user->notify(new OTPSms($OTPCode));
         return view('auth.two_steps' , compact('user'));
       }else{
        dd("notfound");
        //شما ثبت نام نکرده اید و یا پیام شما دسترسی ندارید چاپ شود
        // $user=User::Create([
        //     'cellphone' =>$request->cellphone,
        //     'otp'=>$OTPCode,
        //     'login_token' =>$loginToken
        //  ]);
       }

        }catch(\Exception $ex){
            return response(['errors'=>$ex->getMessage()],422);

        }

    }
    public function checkOtp(Request $request)
    {
        $request->validate([
            'otp'=>'required|digits:5',
            'login_token'=>'required'
        ]);
         try{
      $user=User::where('login_token',$request->login_token)->firstOrFail();
      if($user->otp==$request->otp)
      {
        auth()->login($user,$remember=true);
        return response(['otp'=>'ورود با موفقیت انجام شد'],200);

      }else
      {
        return response(['errors'=>['otp'=>['کد تاییدیه نادرست است']]],422);

      }
    }catch(\Exception $ex){
        return response(['errors'=>$ex->getMessage()],422);

    }
    }
    public function resendOtp(Request $request)
    {
        $request->validate([
            'login_token'=>'required'
        ]);
        try{
            $user=User::where('login_token',$request->login_token)->firstOrFail();
            $OTPCode=mt_rand(10000,99999);
            $loginToken =Hash::make('DCDVFBVYJJ!@EDFRdgthjngrNHBVF');
          $user->update([
            'otp'=>$OTPCode,
            'login_token'=>$loginToken
          ]);
       $user->notify(new OTPSms($OTPCode));
       return response(['login_token'=>$loginToken],200);
        }catch(\Exception $ex){
            return response(['errors'=>$ex->getMessage()],422);

        }

    }
}
