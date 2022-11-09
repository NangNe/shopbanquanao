<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{

    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index() {
        
    	return view('admin_login');
    }


    public function show_drashboard() {
         $this->AuthLogin();
         $count_product = DB::table('tbl_product')->count();
         $count_order = DB::table('tbl_order')->count();
         $count_category = DB::table('tbl_category_product')->count();
         $count_coupon = DB::table('tbl_coupon')->count();
         $count_user = DB::table('tbl_customers')->count();
         $manager_product  = view('admin.dashboard')->with('count_product',$count_product)->with('count_order',$count_order)->with('count_category',$count_category)->with('count_coupon',$count_coupon)->with('count_user',$count_user);
         return view('admin_layout')->with('admin.dashboard', $manager_product);
    }

    public function count_product()
    {
        $this->AuthLogin();
        $count_product = DB::table('tbl_product')->count();
        $manager_product  = view('admin.dashboard')->with('count_product',$count_product);
        return view('admin_layout')->with('admin.dashboard', $manager_product);

    }

     public function dashboard(Request $request){
         
      	$admin_email = $request->admin_email;
    	$admin_password = ($request->admin_password);
    	$result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where ('admin_password',$admin_password)->first();
        // console.log(&$result);
    	if($result){
    		Session::put('admin_name',$result->admin_name);
    		Session::put('admin_id',$result->admin_id);
            $this->AuthLogin();
            $count_product = DB::table('tbl_product')->count();
            $count_order = DB::table('tbl_order')->count();
            $count_category = DB::table('tbl_category_product')->count();
            $count_coupon = DB::table('tbl_coupon')->count();
            $count_user = DB::table('tbl_customers')->count();
            $manager_product  = view('admin.dashboard')->with('count_product',$count_product)->with('count_order',$count_order)->with('count_category',$count_category)->with('count_coupon',$count_coupon)->with('count_user',$count_user);
            return view('admin_layout')->with('admin.dashboard', $manager_product);
    		// return view('admin.dashboard');
    	}else{
    		Session::put('message','mat khau hoac email khong dung, nhap lai nhe');
    		return Redirect::to('/admin');
    	}
    	
    }

    public function logout(){
		Session::put('admin_name',null);
    		Session::put('admin_id',null);
    		return Redirect::to('/admin');
    	
    }

    //thống kê theo ngày
   public function show_order_day(Request $request){
 
       $day   = str_pad($request->day, 2, '0', STR_PAD_LEFT);
       $month = str_pad($request->month, 2, '0', STR_PAD_LEFT);
       $year  = $request->year;

    if($day && $month && $year)
    {
         $all_order = DB::table('tbl_order')->where(DB::raw("DATE_FORMAT(created_at, '%d-%m-%Y')"),"$day-$month-$year")->get();
        return view('admin.day_order')->with('all_order',$all_order);
        
    }

        return view('admin.day_order');
   }

   public function show_multi_email(){
 
         return view('admin.view_order');
   }
   public function send_mail(Request $request){
         //send mail
                $to_name = "nangnkvit";
            //    $to_email = $request->email_account;
              
          
            //        $to_email= ['nvnang.20it1@vku.udn.vn']; // mail nguoi nhan
  
                   
                 
          
                //$to_email = ['ngolequanit@gmail.com','lequan007@gmail.com'];
             
                $data = array("name"=>"NKVFashion SHOP","body"=>'Đặt đơn hàng thành công'); //body of mail.blade.php
                
                // Mail::send('admin.multi_email',$data,function($message) use ($to_name,$to_email){

                //     $message->to($to_email)->subject('Đặt hàng');//send this mail with subject
                //     //$message->from($to_email,$to_name);//send from this mail

                // });
                Mail::send('test_mail', $data, function ($message) {
                    $message->from('destyledecor@gmail.com', 'NangNKV');
                   
                    $message->to('nvnang.20it1@vku.udn.vn', 'NangNKV'); //mail nguoi nhan
                    
                    $message->subject('Order Success');
                    
                    
                });
                 return view('admin.dashboard');
                //--send mail
    }
   

}
