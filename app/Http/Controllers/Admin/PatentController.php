<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class PatentController extends Controller
{
    public function AllDoctor(){
        $doctor =DB::table('doctors')->get();
        return view('dashboard.admin.doctorlist',compact('doctor'));

    }

    
    public function deletedoctor($id){

      
        $done=DB::table('doctors')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => ' Delete Doctor Account Successfully.',
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

    
    public function AllPatent(){
        $patent =DB::table('users')->get();
        return view('dashboard.admin.patentlist',compact('patent'));

    }

    

    public function deletepatent($id){

      
        $done=DB::table('users')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => ' Delete Patent Account Successfully.',
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
