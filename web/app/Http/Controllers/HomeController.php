<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Customer;
// use Illuminate\Support\Facades\Crypt;
// use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Support\Facades\Mail;
session_start();
class HomeController extends Controller
{
    public function send_mail(){
         //send mail
                $to_name = "nangnkvit";
               
                   $to_email= 'destyledecor@gmail.com';
         
                $data = array("name"=>"Mail từ tài khoản Khách hàng","body"=>'Mail gửi về vấn về hàng hóa'); //body of mail.blade.php
                
                Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){

                    $message->to($to_email)->subject('Đơn đặt hàng thành công');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail

                });
                 return view('pages.send_mail')->with('name',$to_name);
                //--send mail
    }

	public function index(Request $request){
        //seo 
        $meta_desc = "cap nhat..."; 
        $meta_keywords = "cap nhat";
        $meta_title = "cap nhat";
        $url_canonical = $request->url();
        //--seo
        
    	$cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

        
        
         $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->paginate(20); 

    	return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical); 
    }
    // top menu all product
    public function index1(Request $request){
        //seo 
        $meta_desc = "cap nhat..."; 
        $meta_keywords = "cap nhat";
        $meta_title = "cap nhat";
        $url_canonical = $request->url();
        //--seo
        
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

        
        
         $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->paginate(20);

        return view('pages.sanpham.all_product')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical); 
    }
    
        public function search(Request $request){

        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }

    // lay thong tin tai khoan
    public function get_customer(){
        $customer_id= Session::get('customer_id');
        $customer = DB::table('tbl_customers')->where('customer_id',$customer_id)->first();

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

             return view('pages.user.update_user')->with('category',$cate_product)->with('brand',$brand_product)->with(compact('customer'));

      
        }

        // cau 26 cap nhat user
        public function update_user(Request $request){
              $customer_id= Session::get('customer_id');
        $data = array();
        $data['customer_name'] = $request->customer_name;
       $data['customer_email'] = $request->customer_email;
       $data['customer_phone'] = $request->customer_phone;
       $data['customer_id'] =  $customer_id;
                    DB::table('tbl_customers')->where('customer_id',$customer_id)->update($data);
                    Session::put('message','Cập nhật sản phẩm thành công');
                    return Redirect::to('cap-nhat-user');
        }
           public function show_update_pass(Request $request){
          

        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get(); 

             return view('pages.user.update_password')->with('category',$cate_product)->with('brand',$brand_product);
        } 
    public function update_pass_saver(Request $request){
             
              $old_password = md5($request->old_password);
        $result = DB::table('tbl_customers')->where('customer_password',$old_password)->first();
        
        
        if($result){
        $data = array();
         $customer_id= Session::get('customer_id');
       $data['customer_password'] = md5($request->new_password);
                    DB::table('tbl_customers')->where('customer_id',$customer_id)->update($data);
                    return Redirect::to('cap-nhat-user');
                   
                }

                else
                {
                    Session::put('message','đổi mât khẩu không thành công');
                     return Redirect::to('cap-nhat-pass');
                }
                
        }


    //news
        public function news(){     
            $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();     
            $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();      
            return view('pages.news')->with('category',$cate_product)->with('brand',$brand_product); 
        } 
        
    //contact
        public function contact(){     
            $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
            $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();      
            return view('pages.contact')->with('category',$cate_product)->with('brand',$brand_product); 
        }

        public function quen_mat_khau(Request $request){
            //category post
          
           $meta_desc = "Quên mật khẩu"; 
           $meta_keywords = "Quên mật khẩu";
           $meta_title = "Quên mật khẩu";
           $url_canonical = $request->url();
           //--seo
           
           $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->orderby('category_id','desc')->get(); 
           
           $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
   
   
           $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->paginate(6); 
           return view('pages.checkout.forget_pass')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title); //1
           
       }
  
       public function recover_pass(Request $request){
    	$data = $request->all();

		$title_mail = "Lấy lại mật khẩu NKVFashion Shop";
		$customer = Customer::where('customer_email','=',$data['email_account'])->get();
		foreach($customer as $key => $value){
			$customer_id = $value->customer_id;
		}
		
		if($customer){
            $count_customer = $customer->count();
            if($count_customer==0){
                return redirect()->back()->with('error', 'Email chưa được đăng ký để khôi phục mật khẩu');
            }else{
               	$token_random = '123456'.rand(0,99);
                $customer = Customer::find($customer_id);
                $customer->customer_token = $token_random;
                $customer->save();
                //send mail
              
                $to_email = $data['email_account'];//send to this email
                $link_reset_pass = url('/update-new-pass?email='.$to_email.'&token='.$token_random);
             
                $data = array("name"=>$title_mail,"body"=>$link_reset_pass,'email'=>$data['email_account']); //body of mail.blade.php
                
                Mail::send('pages.checkout.forget_pass_notify', ['data'=>$data] , function($message) use ($title_mail,$data){
		            $message->to($data['email'])->subject($title_mail);//send this mail with subject
		            $message->from($data['email'],$title_mail);//send from this mail
	    		});
                //--send mail
                return redirect()->back()->with('message', 'Gửi mail thành công,vui lòng vào email để reset password');
            }
        }
    }
    public function update_new_pass(Request $request){

       $meta_desc = "Quên mật khẩu"; 
       $meta_keywords = "Quên mật khẩu";
       $meta_title = "Quên mật khẩu";
       $url_canonical = $request->url();
       //--seo
       
       $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->orderby('category_id','desc')->get(); 
       
       $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 


       $all_product = DB::table('tbl_product')->where('product_status','0')->orderby(DB::raw('RAND()'))->paginate(6); 

   

       return view('pages.checkout.new_pass')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title); //1
   }
   public function reset_new_pass(Request $request){
    $data = $request->all();
    $token_random = '123456'.rand(0,99);
    $customer = Customer::where('customer_email','=',$data['email'])->where('customer_token','=',$data['token'])->get();
    $count = $customer->count();
    if($count>0){
            foreach($customer as $key => $cus){
                $customer_id = $cus->customer_id;
            }
            $reset = Customer::find($customer_id);
            $reset->customer_password = md5($data['password_account']);
            $reset->customer_token = $token_random;
            $reset->save();
            return redirect('login-checkout')->with('message', 'Mật khẩu đã cập nhật mới,vui lòng đăng nhập');
    }else{
        return redirect('quen-mat-khau')->with('error', 'Vui lòng nhập lại email vì link đã quá hạn');
    }
}
    public function mail_order(){
        return view('pages.mail.mail_order');    
    }
  
}