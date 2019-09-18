<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class catagoryesController extends Controller
{
    //

    public function mainCatagory(){

    	$catagoryes = DB::table('catagoryes')->get();

        return view('index', ['catagoryes' => $catagoryes]);



    	//echo $tasks;
    	//return view('index',compact('catagoryes',$catagoryes));

    }


    public function addSubCatagory(){
    	$catagoryes = DB::table('catagoryes')->get();

        return view('addSubCatagory', ['catagoryes' => $catagoryes]);


    }

    public function addSubCatagoryInsert(Request $request){

    $cataName =	$request['catagory'];

    $catagoryes = DB::table('catagoryes')->where('name', $cataName )->first();

	

$name = $request->input('subcatagory');
$src = $request->input('imgurl');
$mainCatagory = $catagoryes->id;

$data=array('name'=>$name,"src"=>$src,"mainCatagoryID"=>$mainCatagory);
DB::table('subcatagoryes')->insert($data);
echo "Record inserted successfully.<br/>";
		}

		public function subCatagory($id){


			$sql = "select * from subCatagoryes where mainCatagoryID = $id ";
           
           
            
			$subCatagoryes = DB::select($sql);
            

			return view('subCatagory', ['subCatagoryes' => $subCatagoryes]);
			
		}
        public function ajax()
        {

    $cataName = $_REQUEST['catagory'];
    

    $catagoryes = DB::table('catagoryes')->where('name', $cataName )->first();

    //print_r($catagoryes);
   



    $catagoryID = $catagoryes->id;
    

    $sql = "select * from subCatagoryes where mainCatagoryID = $catagoryID ";

           
            
            $subCatagoryes = DB::select($sql);

           
          //  $array = array($subCatagoryes);
          return  json_encode($subCatagoryes);

            

    

       

        
        }


        public function main(){

            $catagoryes = DB::table('catagoryes')->get();

            return  json_encode($catagoryes);

        }

}


