<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class SettingsController extends Controller
{
   
     public function index(){
        return view('dashboard.admin.settings.settings');
   
    }

    public function storesettings(Request $request){
    	$data=array();   
        $data['fb_link']=$request->fb_link;
        $data['twiter_link']=$request->twiter_link;
        $data['youtoube_link']=$request->youtoube_link;
        $data['address']=$request->address;
        $image=$request->logo;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/team/'.$image_);
                 $data['logo']='public/team/'.$image_;
                 $done=DB::table('setting')->insert($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'Setting Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'team Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }
      

    }
    public function allsettings(){
        $allsettings=DB::table('setting')->get();
    	return view('dashboard.admin.settings.showsettings',compact('allsettings'));
    }

    
    public function editsettings($id){

        $settings=DB::table('setting')->where('id',$id)->first();
     return view('dashboard.admin.settings.Editsettings',compact('settings')); 

     
    }

    public function updatesettings(Request $request,$id){
    	$data=array();   
        $data['fb_link']=$request->fb_link;
        $data['twiter_link']=$request->twiter_link;
        $data['youtoube_link']=$request->youtoube_link;
        $data['address']=$request->address;
        $image=$request->logo;
 
           if($image){
                 $image_= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                 Image::make($image)->resize(300,300)->save('public/team/'.$image_);
                 $data['logo']='public/team/'.$image_;
                 $done=DB::table('setting')->where('id',$id)->update($data);
 
                 if($done){
                     $notification = array(
                         'message' => 'Setting Added Successfully.',
                         'alert-type' => 'success'
                     );
                 return redirect()->back()->with($notification);
                 }else{
                   $notification = array(
                         'message' => 'team Not Added',
                         'alert-type' => 'danger'
                     );
                 return redirect()->back()->with($notification);
                 }
                     
                    
         }else{

         
        
        $done=DB::table('setting')->where('id',$id)->update($data);
 
         if($done){
             $notification = array(
                 'message' => 'settings Update Successfully.',
                 'alert-type' => 'success'
             );
         return redirect()->route("all.settings")->with($notification);
         }else{
           $notification = array(
                 'message' => 'settings Not Update',
                 'alert-type' => 'danger'
             );
         return redirect()->back()->with($notification);
         }
        }   

    }

    public function deletesettings($id){
    	$done=DB::table('setting')->where('id',$id)->delete();
        if($done){
            $notification = array(
                'message' => 'settings Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'settings Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }
    }
}
