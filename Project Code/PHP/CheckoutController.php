<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_check()
    {
       
        return view('pages.login');
    }

     public function customer_signup(Request $request)
     {
       
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['password']=md5($request->password);
        $data['customer_phone']=$request->customer_phone;
        
        $customer_id=DB::table('tbl_customer')
                    ->insertGetId($data);

        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect::to('/checkout');
     }
    public function checkout()
    {
        return view('pages.checkout');
    }


    public function customer_login(Request $request)
    {
     
        $customer_email=$request->customer_email;
        $password=md5($request->password);

       
        $result=DB::table('tbl_customer')
                ->where('customer_email',$customer_email)
                ->where('password',$password)
                ->first();
       
              if($result)
              {
                Session::put('customer_name',$result->customer_name);
                Session::put('customer_id',$result->customer_id);
                return Redirect::to('/checkout');

              }
              else
              {
                  Session::put('messege','Email or Password Invalid Try Again');
                  return Redirect::to('/login-check');
              }


    }


    public function logout()
    {
    
      Session::flush();
      return Redirect::to('/login-check');
    }

    // public function AdminAuthCheck()
    // {
    //   $admin_id=Session::get('customer_id');
    //   if($admin_id)
    //   {
    //     return;
    //   }
    //   else
    //   {
    //     return Redirect::to('/admin')->send();
    //   }
    // }


    
    public function save_shipping_details(Request $request)
    {
      $data=array();
      $data['shipping_email']=$request->shipping_email;
      $data['shipping_first_name']=$request->shipping_first_name;
      $data['shipping_last_name']=$request->shipping_last_name;
      $data['shipping_address']=$request->shipping_address;
      $data['shipping_phone_number']=$request->shipping_phone_number;
      $data['shipping_city']=$request->shipping_city;

      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";

      $shipping_id=DB::table('tbl_shipping')
                  ->insertGetId($data);

                  Session::put('shipping_id',$shipping_id);
                
                  return Redirect::to('/payment');
    
      
    }
}
