<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
class PaymentController extends Controller
{
    public function createOrder(Request $request){
        $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        // request
        $name= $request->name;
        $email= $request->email; 
        $contact= $request->contact;
        $amount= $request->amount *100;  //amount in paisa so paisa *100 is 1 rs

        $order = $api->order->create([
            'receipt' =>'receipt_'.uniqid(),
            'amount'=>$amount,
            'currency'=>'INR'
        ]);

        // store to database
$data = [
    
    'name' =>$name, 
    'email' =>$email, 
    'contact' =>$contact, 
    'amount' =>$amount, 
    'order_id' =>$order['id'], 
    'status' =>1, //created
    'created_at' =>$created_at, 
    'created_by' =>$created_by
];
        DB::tabel('payments_table')->insert($data);

        return response()->json([
            'order_id' =>$order['id'],
            'amount' =>$amount,
            'name' =>$name, 
            'email' =>$email, 
            'contact' =>$contact, 
            'key' =>env('RAZORPAY_KEY'),
        ]);
    }
   
    public function payment_form() {
        return view('payment');
    }
}
