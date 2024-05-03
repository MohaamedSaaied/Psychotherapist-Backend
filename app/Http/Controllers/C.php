<?php

namespace App\Http\Controllers;
use App\Models\signup;
use App\Models\doctor;
use App\Models\appointment;
use App\Models\post;
use App\Models\un_doctor;
use App\Models\un_post;
use App\Models\user_result;
use App\Models\quiz_result;
use App\Models\quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\admin;
class C extends Controller
{
    public function user_store(Request $request) {

        $nameext=$request->file('path')->getClientOriginalName();
        $name=pathinfo($nameext,PATHINFO_FILENAME);
        $ext=$request->file('path')->getClientOriginalExtension();
        $sname=$name.'_'.time().'.'.$ext;
        $path=$request->file('path')->storeAs('public\img',$sname);
        $data=$request->input();
        $pass=Crypt::encrypt($data['password']);
        $user=new signup;
        $user->P_Name=$data['P_Name'];
        $user->Gender=$data['Gender']; 
        $user->B_Date=$data['B_Date'];    
        $user->username=$data['username'];
        $user->password=$pass;
        $user->img=$sname;
        $user->save(); 
        return true;
        
    }   
    public function doctor_store(Request $request) {     
       

        $data = $request->validate([
            'D_Name' => 'required',
            'B_Date'=> 'required',
            'Field' => 'required',
            'EXP_Years' => 'required',
            'Rate' => 'required',
            'Location' => 'required',
            'Phone' => 'required',
            'username' => 'required',
            'password' => 'required',
            'img' => 'required',

            
        ]);

        doctor::create($data);
        $old=un_doctor::find($data['D_ID']);
        $old->delete();
        return true;


    }
    public function un_doctor_store(Request $request) {
        $nameext=$request->file('path')->getClientOriginalName();
        $name=pathinfo($nameext,PATHINFO_FILENAME);
        $ext=$request->file('path')->getClientOriginalExtension();
        $sname=$name.'_'.time().'.'.$ext;
        $path=$request->file('path')->storeAs('public\img',$sname);
        $data=$request->input();
        $pass=Crypt::encrypt($data['password']);
        $doctor=new un_doctor;
        $doctor->D_Name=$data['D_Name'];
        $doctor->B_Date=$data['B_Date'];
        $doctor->Field=$data['Field'];
        $doctor->EXP_Years=$data['EXP_Years'];
        $doctor->Rate=5;
        $doctor->Location=$data['Location'];
        $doctor->Phone=$data['Phone'];
        $doctor->username=$data['username'];
        $doctor->password=$pass;
        $doctor->img=$sname;
        $doctor->save(); 
        return true;

    }
    public function appointment_store(Request $request) {
        $data = $request->validate([
            'P_ID' => 'required',
            'D_ID'=> 'required',
            'Date' => 'required',
            'Time' => 'required',
            'Order' => 'required',

            
        ]);

        appointment::create($data);
        return true;

    }
    public function post_store(Request $request) {

        $data = $request->validate([

            'U_ID' => 'required',
            'img'=> 'required',
            'post' => 'required',
            
        ]);

        post::create($data);
        $old=un_post::find($data['post']);
        $old->delete();
        return true;
    }
    public function un_post_store(Request $request) {
        
        $data=$request->input();
        $post=new un_post;
        $post->U_ID=$data['U_ID'];
        $post->post=$data['post'];
        $nameext=$request->file('path')->getClientOriginalName();
        $name=pathinfo($nameext,PATHINFO_FILENAME);
        $ext=$request->file('path')->getClientOriginalExtension();
        $sname=$name.'_'.time().'.'.$ext;
        $path=$request->file('path')->storeAs('public\img',$sname);
        $post->img=$sname;
        $post->save();
        return true;

    }
    public function user_result_store(Request $request) {
        $data = $request->validate([
            'U_ID'=> 'required',
            'type' => 'required',
            'score' => 'required',

            
        ]);

        user_result::create($data);
        return true;

    }


    public function Dsignup(Request $request) {
        return view('Dsignup');

    }

    public function signup(Request $request) {
        return view('signup');

    }
    public function app_check(Request $request) {
        return view('app_check');

    }
    public function u_check(Request $request) {
        return view('user_check');

    }

    public function login(Request $request) {
        $user= signup::where('username',$request->input('username'))->get();
        if( crypt::decrypt($user[0]->password)==$request->input('password'))
        {$dataz=signup::where('username',$request->input('username'))->select("P_ID as id","P_Name as name" )->get();

            return response()->json(["user"=>$dataz], 200);
        }
    }

    public function Dlogin(Request $request) {
        $users= un_doctor::where('username',$request->input('username'))->get();
        if( crypt::decrypt($users[0]->password)==$request->input('password'))
        {
            $datazz=signup::where('username',$request->input('username'))->select("D_ID as id","D_Name as name" )->get();
            return response()->json(["doctor"=>$datazz], 200);
        }            
    }

    public function Alogin(Request $request) {
        $userss= admin::where('username',$request->input('username'))->get();
        if( ($userss[0]->password)==$request->input('password'))
        {
            $datazzz=signup::where('username',$request->input('username'))->select("A_ID as id","A_Name as name" )->get();
            return response()->json(["user"=>$datazzz], 200); 
        }           
    }

    public function appointment_check(Request $request) {
        $data=appointment::where('D_ID',$request->input('D_ID'))->get();
        return $data;     
    }

    public function user_check($id) {
        $data=signup::where('P_ID',$id)->get();
        return $data;   
    }

    public function doctor_check(Request $request) {
        $data=doctor::where('D_ID',$request->input('D_ID'))->get();
        return $data;    
    }
    public function quiz_check($type) {
        $data=quiz::where('type',$type)->get();
        return $data;   
    }
    public function quiz_result_check(Request $request) {
        $data=quiz_result::where('score',$request->input('score'))->get();
        return $data;   
    }

    public function update_user_profile($id){
        $data=signup::where('P_ID',$id)->get();
        $data->P_Name=$request->P_Name;
        $data->Gender=$request->Gender;
        $data->B_Date=$request->B_Date;
        $data->username=$request->username;
        $data->password=Crypt::encrypt($request->password);
        $data->save();
    }
    public function update_doctor_profile($id){
        $data=signup::where('D_ID',$id)->get();
        $data->D_Name=$request->D_Name;
        $data->Field=$request->Field;
        $data->EXP_Years=$request->EXP_Years;
        $data->Location=$request->Location;
        $data->Phone=$request->Phone;
        $data->username=$request->username;
        $data->password=Crypt::encrypt($request->password);
        $data->save();
    }
    public function admin_view_un_doctor(){
       
        $data=un_doctor::all();
        return ($data);
    }
    public function admin_view_un_post(){
       
        $data=un_post::all();
        return ($data);
    }
    public function delete_un_doctor($id){
        $data=un_doctor::find($id);
        $data->delete();
        return true;  
    }
    public function delete_un_post($id){
        $data=un_post::find($id);
        $data->delete();
        return true;  
    }




    
}
