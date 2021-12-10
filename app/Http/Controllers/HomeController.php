<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function DoctorAccountPermition($id){

        $data=array();   
        $data['status']=1;
        $done=DB::table('doctors')->where('id',$id)->update($data);
        if($done){
            $notification = array(
                'message' => 'Accept Doctor Account Successfully.',
                'alert-type' => 'success'
            );
        return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'Denay Doctor Account Successfully.',
                'alert-type' => 'danger'
            );
        return redirect()->back()->with($notification);
        }

    }
}
