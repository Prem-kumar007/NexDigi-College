<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CollegeInstituteSingleController extends Controller
{
    public function index(){
        return view('college.college_one');
    }
    public function contact_us(Request $request){
       
        $lead_data =[
            'name'=> $request->name,
            'email'=>$request->email,
            'phone'=>$request->number,
            'message' =>$request->message,
            'subject'=>$request->subject,
            'created_at' =>now()->format('Y-m-d H:i:s')
        ];
        
      $data =  DB::table('leads_table')->insert($lead_data);

      if($data){
        return response()->json(
            ['message'=>'Registered Successfully Will Contact You soon!..',
            'status' => 'success'
            ]
        );
      }else{
        return response()->json(
            ['message'=>'Something Went Wrong !...',
            'status' => 'error'
            ]
        );
      }
    }
}
