<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class UserLogicController extends Controller
{

    public function SearchDoctor(Request $request)
    {
         //$brands=DB::table('brand')->get();
          //$brands= DB::table('products')->where('subcategory_id',$id)->select('brand_id')->groupBy('brand_id')->get();
          $item=$request->search;
          $doctor=DB::table('doctors')
                       ->where('name','LIKE', "%{$item}%")
                       ->orWhere('specialization','LIKE', "%{$item}%")
                       ->get();
        
          return view('dashboard.user.search',compact('doctor'));
    
    }

    public function viewProfile($id){
        
        $user=DB::table('doctors')->where('id',$id)->first();
        return view('dashboard.user.doctor-profile-details',compact('user'));

    }

    public function appoinmentDoctor($id){

        $appoinment=DB::table('doctors')->where('id',$id)->first();
        return view('dashboard.user.doctor-appoinment',compact('appoinment'));

    }

    public function appoinment(Request $request){


        if(Auth::check()){
            $data=array();   
            $data['first_name']=$request->first_name;
            $data['email']=$request->email;
            $data['last_name']=$request->last_name;
            $data['phone']=$request->phone;
            $data['payment']=$request->payment;
            $data['doctor_id']=$request->doctor_id;
            $data['user_id']=Auth::user()->id;
            $data['status']=0;
           
    
            $done=DB::table('appoinment')->insert($data);
    
            if($done){
                $notification = array(
                    'message' => 'Appoinment  Done Successfully.',
                    'alert-type' => 'success'
                );
            return redirect()->back()->with($notification);
            }else{
            $notification = array(
                    'message' => 'Appoinment  Done Unsuccessfully',
                    'alert-type' => 'danger'
                );
            return redirect()->back()->with($notification);
            }
            
        }else{
            $notification = array(
                'message' => 'At First Login Your Account .',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }

       

    }

    public function UserProfileShow(){

        

        $profile=DB::table('appoinment')
        ->join('doctors','appoinment.doctor_id','doctors.id')
        ->join('users','appoinment.user_id','users.id')
        ->select('appoinment.*','doctors.image','doctors.name','doctors.specialization','doctors.price')
        ->where('appoinment.user_id',Auth::user()->id)
        ->get();
        return view('dashboard.user.user-appoinment-show',compact('profile'));

    }

    public function DeleteUserCancelAppinment($id){
        $done=DB::table('appoinment')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => ' Delete Appoinment Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
        $notification = array(
                'message' => ' Delete UnSuccessfully',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }


}
