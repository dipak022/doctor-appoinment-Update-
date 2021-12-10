<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\Auth;
class UpdateDoctorController extends Controller
{
    
    public function updatedoctor(REQUEST $request){
        // /$data =Auth::id();




        $data=array();   
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['about']=$request->about;
        $data['university_name']=$request->university_name;
        $data['degree']=$request->degree;
        $data['year']=$request->year;
        $data['experience']=$request->experience;
        $data['experience_year']=$request->experience_year;
        $data['award_date']=$request->award_date;
        $data['award_name']=$request->award_name;
        $data['award_description']=$request->award_description;

        $data['saturday_time']=$request->saturday_time;
        $data['sunday_time']=$request->sunday_time;
        $data['monday_time']=$request->monday_time;
        $data['tuesday_time']=$request->tuesday_time;
        $data['Wednesday_time']=$request->Wednesday_time;
        $data['thursday_time']=$request->thursday_time;
        $data['friday_time']=$request->friday_time;
        $data['price']=$request->price;





       
 
        
        $image=$request->image;

          if($image){
                $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('public/slidder/'.$image_);
                $data['image']='public/slidder/'.$image_;
               
                $done=DB::table('doctors')->where('id',Auth::guard('doctor')->user()->id)->update($data);

                if($done){
                    $notification = array(
                        'message' => 'Doctor Profile Update Successfully.',
                        'alert-type' => 'success'
                    );
                return redirect()->back()->with($notification);
                }else{
                  $notification = array(
                        'message' => 'Doctor Profile Not Update',
                        'alert-type' => 'danger'
                    );
                return redirect()->back()->with($notification);
                }
                }else{
                    $done=DB::table('doctors')->where('id',Auth::guard('doctor')->user()->id)->update($data);

                            if($done){
                                $notification = array(
                                    'message' => 'Doctor Profile Update Successfully.',
                                    'alert-type' => 'success'
                                );
                            return redirect()->back()->with($notification);
                            }else{
                            $notification = array(
                                    'message' => 'Doctor Profile Not Update',
                                    'alert-type' => 'danger'
                                );
                            return redirect()->back()->with($notification);
                            }
                }

    }

    public function doctorprofile(){
        
        $user=DB::table('doctors')->where('id',Auth::guard('doctor')->user()->id)->first();

        return view('dashboard.doctor.doctor-profile',compact('user'));

    }



    public function allDoctorAppoinment(){
        $profile=DB::table('appoinment')
        ->join('doctors','appoinment.doctor_id','doctors.id')
        ->join('users','appoinment.user_id','users.id')
        ->select('appoinment.*','doctors.image','doctors.name','doctors.specialization','doctors.price')
        ->where('appoinment.doctor_id',Auth::guard('doctor')->user()->id)
        ->get();
        return view('dashboard.doctor.doctor-appoinment-show',compact('profile'));
    }

    public function ConfirmAppoinment($id){
        //echo "Aschi";
        $data=array();   
        $data['status']=1;
        $done=DB::table('appoinment')->where('id',$id)->update($data);
        if($done){
            $notification = array(
                'message' => 'Appoinment Confirm Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
        $notification = array(
                'message' => 'Appoinment Confirm UnSuccessfully',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }


    public function CencelAppoinment($id){

        $data=array();   
        $data['status']=2;
        $done=DB::table('appoinment')->where('id',$id)->update($data);
        if($done){
            $notification = array(
                'message' => 'Appoinment Cancel Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
        $notification = array(
                'message' => 'Appoinment Cancel UnSuccessfully',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }


    public function DeleteAppoinment($id){

      
        $done=DB::table('appoinment')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => 'Appoinment Delete Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
        $notification = array(
                'message' => 'Appoinment Delete UnSuccessfully',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }

    

    public function DoneAppoinment($id){

      
        $data=array();   
        $data['status']=2;
        $done=DB::table('appoinment')->where('id',$id)->update($data);
        if($done){
            $notification = array(
                'message' => 'Appoinment Done  Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
        $notification = array(
                'message' => 'Appoinment Done UnSuccessfully',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }


    

    
}
