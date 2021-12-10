<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use DB;
class DoctorController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:doctors,email',
             'hospital'=>'required',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $doctor = new Doctor();
          $doctor->name = $request->name;
          $doctor->email = $request->email;
          $doctor->hospital = $request->hospital;
          $doctor->specialization = $request->specialization;
          $doctor->password = \Hash::make($request->password);
          $save = $doctor->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Doctor');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:doctors,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in doctors table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('doctor')->attempt($creds) ){
            
            return redirect()->route('doctor.home');
            
        }else{
            return redirect()->route('doctor.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('doctor')->logout();
        return redirect('/');
    }


    public function home(){
        $check = DB::table('doctors')->where('id',Auth::guard('doctor')->id())->where('status',1)->first();
        if($check){
            return view('dashboard.doctor.deshbord');
  
        }else{
            return view('dashboard.doctor.Pandingdeshbord');
        }
        

    }
}
