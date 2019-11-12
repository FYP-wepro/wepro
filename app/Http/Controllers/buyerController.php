<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
Use Validator;
Use DB;
Use App\Buyer;
use App\Buyerpersonal;

use Session;

class buyerController extends Controller
{
    public function signup(Request $request){

$validator = \Validator::make($request->all(), [
            'username' => 'required|unique:buyers',
            'email' => 'required|unique:buyers',
            'password' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }




$email = $request->input('email');
$username = $request->input('username');
$password = $request->input('password');



      $data=array('username'=>$username,"email"=>$email,"password"=>$password,"created_at"=> Carbon::now());
      $last_id=DB::table('buyers')->insertGetId($data);
   
      
      session(['buyerId' => $last_id]);

      $sellerId=session('buyerId');

     



//return redirect('/register');
return response()->json(['success'=>$sellerId]);
}

public function login(Request $request){

      $email=$request->email;
      $password=$request->password;



      $sql="select * from buyers where username='$email' OR email='$email' AND password=$password";

      $buyer=DB::select($sql);
      
      

      if(count($buyer)>0){ 
        session(['buyerId' => $buyer[0]->id]);

          return response()->json(["success"=>'sucecess']);
      }
      else{
          return response()->json(['errors'=>'invalid username OR Password']);
        }
}

  public function logout(){
    Session::flush();
   return redirect('/');
  }
///////////////////////////////////////////////////////////////////////
  public function buyerRequests(){
    $buyerId= session('buyerId');
    $sql="select * from requests where buyerId=$buyerId";
    $requests =DB::select($sql);
    return view('buyer.buyerRequest', ['requests' => $requests]);
  }

  /////////////////////////////////////////////////////////////////////

  public function dashboard(){
     $buyerId= session('buyerId');
    $sql="select * from requests where buyerId=$buyerId";
    $requests =DB::select($sql);
    return view('buyer.dashboard', ['requests' => $requests]);
  }

  ////////////////////////////////////////////////////////////////////////////

  public function deleteRequest($id){
    $sql="DELETE FROM requests WHERE id=$id";
    $requests =DB::select($sql);
    return redirect('/B_dashboard');
  }
  ///////////////////////////////////////////////////////////////////////////

  public function register(){
    return view('buyer.register');
  }

///////////////////////////////////////////////////////////////////////////////
  
    public function personal(Request $request)

{

    // $personal = new sellerpersonal();

     $rules = array(
      
      'profileImg'=>'required|image'     
    );

    

     $error = Validator::make($request->all(), $rules);

     if($error->fails())
     {
      return response()->json(['errors' => $error->errors()->all()]);
     }

    
     $profileImg = $request->file('profileImg');
     
     

     
     $new_name_profile = rand() . '.' . $profileImg->getClientOriginalExtension();
     
     $profileImg->move(public_path('buyer'), $new_name_profile);

    $fullName= $request->input('fullName');
   
    $discription =$request->input('discription');
    $country = $request->input('country');

    $data=array('fullName'=>$fullName,"discription"=>$discription,"profileImg"=>$new_name_profile,"country"=>$country,"buyerId"=>session('buyerId'));

     Buyerpersonal::insert($data);
   




     $output = array(
         'success' => 'Images uploaded successfully',
        );

        return response()->json($output);
  

  }

 
}
