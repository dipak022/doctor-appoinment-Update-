<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.admin.category.category');
   
    }

    public function storecategory(Request $request){    
    	 $data=array();   
         $data['title']=$request->title;
        
        $done=DB::table('category')->insert($data);
        if($done){
            $notification = array(
                'message' => 'Category Added Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->route('all.category')->with($notification);
        }else{
        $notification = array(
                'message' => 'Category Not Added',
                'alert-type' => 'danger'
            );
         return redirect()->back()->with($notification);
        }
                     
                    
         

    }

    public function allcategory(){
        $category=DB::table('category')->get();
    	return view('dashboard.admin.category.showcategory',compact('category'));
    }

    public function editcategory($id){

        $category=DB::table('category')->where('id',$id)->first();
     return view('dashboard.admin.category.Editcategory',compact('category')); 

     
    }

    public function updatecategory(Request $request,$id){
        $data=array();   
        $data['title']=$request->title;
        $done=DB::table('category')->where('id',$id)->update($data);
        if($done){
            $notification = array(
                'message' => 'Category Update Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->route("all.category")->with($notification);
        }else{
            $notification = array(
                'message' => 'category Not Update',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }
    }

    public function deletecategory($id){

      

          $done=DB::table('category')->where('id',$id)->delete();
        
        if($done){
            $notification = array(
                'message' => 'Category Delated Successfully.',
                'alert-type' => 'success'
            );
        return Redirect()->back()->with($notification);
        }else{
          $notification = array(
                'message' => 'category Not  Delated.',
                'alert-type' => 'danger'
            );
        return Redirect()->back()->with($notification);
        }

    }
}
