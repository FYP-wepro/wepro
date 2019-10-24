<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
 use Illuminate\Database\QueryException;
use Carbon\Carbon;
Use Validator;
use App\Sellerpersonal;
use App\subcatagorye;

class sellerController extends Controller
{
    
    public function mainCatagory(){

    	$catagoryes = DB::table('catagoryes')->get();

        return view('seller.register', ['catagoryes' => $catagoryes]);



    	//echo $tasks;
    	//return view('index',compact('catagoryes',$catagoryes));

    }


public function signup(Request $request){

$validator = \Validator::make($request->all(), [
            'username' => 'required|unique:sellers',
            'email' => 'required|unique:sellers',
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
      $last_id=DB::table('sellers')->insertGetId($data);
   
      
      session(['sellerId' => $last_id]);

      $sellerId=session('sellerId');



//return redirect('/register');
return response()->json(['success'=>$sellerId]);
}



    public function personal(Request $request)

{

    // $personal = new sellerpersonal();

     $rules = array(
      'coverImg'  => 'required|image',
      'profileImg'=>'required|image'     
    );

    

     $error = Validator::make($request->all(), $rules);

     if($error->fails())
     {
      return response()->json(['errors' => $error->errors()->all()]);
     }

     $coverImg = $request->file('coverImg');
     $profileImg = $request->file('profileImg');
     
     

     $new_name_cover = rand() . '.' . $coverImg->getClientOriginalExtension();
     $new_name_profile = rand() . '.' . $profileImg->getClientOriginalExtension();
      $coverImg->move(public_path('seller'), $new_name_cover);
     $profileImg->move(public_path('seller'), $new_name_profile);

    $fullName= $request->input('fullName');
    $pTitle = $request->input('pTitle');
    $discription =$request->input('discription');
    $pRate = $request->input('pRate');

   // $data=array('fullName'=>$fullName,"pTitle"=>$pTitle,"discription"=>$discription,"pRate"=>$pRate,"coverImg"=>$new_name_cover,"profileImg"=>$new_name_profile, "sellerId"=>$sellerId);

     //sellerpersonal::insert($data);
   




     $output = array(
         'success' => 'Images uploaded successfully',
         'coverImg'=>$new_name_cover,
         'profileImg'=>$new_name_profile,
         'discription'=>$discription,
         'fullName'=>$fullName,
         'pTitle'=>$pTitle,
         'pRate'=>$pRate,
         'sellerId'=>session('sellerId'),

         //'image'  => '<img src="/fahad/image/'.$new_name.'" class="img-thumbnail" />'
        );

        return response()->json($output);
    }
     
    
    public function personalSave(Request $request){
    $personal=new Sellerpersonal;
    $personal->fullName=$request->fullName;
    $personal->pTitle=$request->pTitle;
    $personal->discription=$request->discription;
    $personal->profileImg=$request->profileImg;
    $personal->coverImg=$request->coverImg;
    $personal->pRate=$request->pRate;
    $personal->country='pakistan';
    $personal->sellerId=$request->sellerId;
    $personal->save();

      return response()->json(["success"=>'sucecess']);
    }


    ////////////////////////////////////////////////////////////////////////

    public function sellers(){

      $sellers = DB::table('sellerpersonals')->get();

         return  json_encode($sellers);

    }

    ////////////////////////////////////////////////////////////////////////////

    public function professional(Request $request){
        $mainCata1=$request->mainCata1;
        $mainCata2=$request->mainCata2;
        $subCataName1=$request->checkbox1;
        $subCataName2=$request->checkbox2;
        $skills=$request->skill_arr;

        $sellerId=session('sellerId');

        $data1=array('mainCataName'=>$mainCata1,"sellerId"=>$sellerId);
        $data2=array('mainCataName'=>$mainCata2,"sellerId"=>$sellerId);
        
        DB::table('smaincatagories')->insert($data1);
        DB::table('smaincatagories')->insert($data2);

        foreach ($subCataName1 as $subCata1) {
            DB::insert('insert into ssubcatagories (subCataName, sellerId) values (?, ?)', array($subCata1, $sellerId));
        }

        foreach ($subCataName2 as $subCata2) {
            DB::insert('insert into ssubcatagories (subCataName, sellerId) values (?, ?)', array($subCata2, $sellerId));
        }

        foreach ($skills as $skill) {
            DB::insert('insert into sskills (skillName, sellerId) values (?, ?)', array($skill, $sellerId));
        }

        


        return  json_encode("success");




    }
//////////////////////////////////////////////////////////////////////////////////////////////

    public function showSeller($id){
       $subCatagory = subcatagorye::find($id);
        $subCataName=$subCatagory->name;

$sql = "SELECT sellerpersonals.*,ssubcatagories.subCataName 
FROM sellerpersonals, ssubcatagories
 WHERE sellerpersonals.sellerId = ssubcatagories.sellerId AND ssubcatagories.subCataName='$subCataName'";
        //$sql ="select * from sellerpersonals"
        $sellers = DB::select($sql);

        return view('seller.showSeller', ['sellers'=>$sellers]);
       
    }


   //////////////////////////////////////////////////////////////////////

    public function sellerProfile($id){
       // $sellerpersonals = Sellerpersonal::find($id);
        //$sql="select sellerpersonals.*, sskills.*
               // FROM sellerpersonals, sskills
               // where Sellerpersonals.sellerId=sskills.sellerId AND Sellerpersonals.sellerId=$id
      // ";
        $sql="select * from sskills where sellerId= $id";
        $sql2="select * from sellerpersonals where sellerId= $id";
         $skills = DB::select($sql);
        $sellers = DB::select($sql2);

        
         //$name = array('skill' => 'fahad' );
         return view('seller.sellerProfile', ['sellers'=>$sellers],['skills'=>$skills]);

    }



  
    
}
