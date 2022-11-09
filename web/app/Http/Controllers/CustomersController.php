<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CustomersController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
   
    
    public function save_customer(Request $request){
         $this->AuthLogin();
        
    	$data = array();
    	$data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
    	$data['customer_password'] = $request->customer_password;
    	$data['customer_phone'] = $request->customer_phone;
        
       
    	
    }

    public function all_customer(){
        $this->AuthLogin();
    	$all_customer = DB::table('tbl_customers')->get();
    	$manager_customer  = view('admin.user.all_customer')->with('all_customer',$all_customer);
    	return view('admin_layout')->with('admin.user.all_customer', $manager_customer);

    }
   // câu 11 sua xoa san pham
      public function delete_customer($customer_id){
        $this->AuthLogin();
        DB::table('tbl_customers')->where('customer_id',$customer_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-customer');
    }

}
