<?php

namespace App\Controllers;

// class meeshoController extends BaseController
// {
    // public function index()
    // {
        // return view('meesho_view');
    // }
// }

class MeeshoController extends BaseController
{
	//parent::__construct();
	
	public function __construct() {
		//$this->load->database();
	}
	
    public function meeshof(){
		 // $db = db_connect();
		// // //print_r($db);
		 // $user = $db->table('ms_product');
		// $query = $user->getWhere();
		 // $result = $query->getResultArray();
		 // $data['mydata'] = $result;
         return view('meesho_view');
    }
	
	public function meeshod(){
        return view('meesho_Viewdetail');
    }
	public function meeshoadmin(){
        return view('admin/desboard');
    }
	public function meeshoadd_product(int $id){
		 $db = db_connect();
		//print_r($id);
		//die();
			$user = $db->table('ms_product');
			//$query = $user->where();
			$result = $user->getResultArray();
			$data['mydata'] = $result;
        return view('admin/add_product/1',$data);
    }
	public function pr(){
		return view('admin/add_product');
	}
	
	public function product_list(){
		 $db = db_connect();
		// //print_r($db);
		 $user = $db->table('ms_product');
		$query = $user->getWhere();
		 $result = $query->getResultArray();
		
		 $data['mydata'] = $result;
        return view('admin/product_list',$data);
    }
	
	public function meeshoadd_cat(){
		$db=db_connect();
		
		$table=$db->table('ms_category');
		$query = $table->getWhere();
		$result = $query->getResultArray();
		
		 $data['mydata']= $result;
		
		
        return view('admin/add_categoury',$data);
    }
	public function adminuser_list(){
		$db=db_connect();
		$admin=$db->table('ms_user');
		$user=$admin->getWhere();
		$result=$user->getResultArray();
		 $data['mydata'] = $result;
		return view('admin/admin_user_list',$data);
	}

	public function category_list(){	
		 $db = db_connect();
		// //print_r($db);
		 $user = $db->table('ms_category');
		$query = $user->getWhere();
		 $result = $query->getResultArray();
		
		 $data1['mydata'] = $result;
        return view('admin/category_list',$data1);
    }
	public function meeshoadmin_user(){
        return view('admin/admin_user');
    }
	
	public function ajaxadmin_user(){
		$db =db_connect();
         $name     = $this->request->getPost('name');
		 $mobile   = $this->request->getPost('mobile');
		 $email    = $this->request->getPost('email');
		 $password = $this->request->getPost('password');
		 //$User     = $this->request->getPost('User');
		 $data = array(
			'Name' =>  $name,
			'image' =>  'image filled',
			'Email' =>  $email,
			'Mobile' => $mobile,
			'Password' => $password,
			'CreatedDate' => '',
			'Status' => 1,
		 );
		 print_r($data);
		  $user = $db->table('ms_user');
		  $builder = $user->insert($data);
		  return json_decode($builder);
		 // print_r($name);
		 // print_r($mobile);
		 // print_r($email);
		 // print_r($password);
		 // print_r($User);
		 
		
    }
	public function add_product(){
		
		$db=db_connect();
		$title=$this->request->getPost('P_Title');
		$price=$this->request->getPost('P_price');
		$discount=$this->request->getPost('P_discount');
		$size=$this->request->getPost('P_size');
		$detail=$this->request->getPost('P_detail');
		//print_r($title);
		$product=array(
			'Title'=> $title,
			'Price'=> $price,
			'Discount'=> $discount,
			'Size'=> $size,
			'image'=> 'khali image',
			'detail_image'=> 'dusri',
			'detail'=> $detail,
			'Status'=> 1,
			'date'=> '',
		);
		print_r($product);
		$table=$db->table('ms_product');
		$query=$table->insert($product);
		return json_decode($query);
		
	}
	public function update_product(){
		$db=db_connect();
		$id=$this->request->getPost('T_id');
		$title=$this->request->getPost('T_title');
		$price=$this->request->getPost('T_price');
		$discount=$this->request->getPost('T_discount');
		$size=$this->request->getPost('T_size');
		$image=$this->request->getfiles('T_image');
		$dimage=$this->request->getfiles('T_dimage');
		$detail=$this->request->getPost('T_detail');
		// print_r($title);
		// print_r($price);
		// print_r($discount);
		// print_r($size);
		// print_r($image);
		// print_r($dimage);
		// print_r($detail);
		$updateproduct=array(
			
			'Title'=> $title,
			'Price'=> $price,
			'Discount'=> $discount,
			'Size'=> $size,
			'image'=> 'khali image',
			'detail_image'=> 'dusri',
			'detail'=> $detail,
			'Status'=> 1,
			'date'=> '',
		);
		  $user = $db->table('ms_product');
		  $query = $user->where('Id',$id);
		  
		  //print_r($query);
		  //die();
		  
		  $builder = $user->update($updateproduct);
		  
		 // return json_decode($query);
		// $this->$db->where('Id', $id );
		// $this->$db->update('ms_product',$updateproduct);	
		
		print_r($query);
	}
	public function add_category(){
		$db=db_connect();
		$cat=$this->request->getPost('P_cat');
		$status=$this->request->getPost('P_status');
		print_r($cat);
		print_r($status);
		 $category=array(
			'cat_name'=>$cat,
			'status'=>$status,
			'date'=>'',
		 );
		 print_r($category);
		 $table=$db->table('ms_category');
		 $sql1=$table->insert($category);
		 return json_encode($sql1);
	}
	public function update_category(){
		$db=db_connect();
		$id=$this->request->getPost('T_id');
		$cname=$this->request->getPost('T_cname');
		$status=$this->request->getPost('T_status');
		// print_r($id);
		// print_r($cname);
		// print_r($status);
		
	$cat=array(
		'cat_name'=>$cname,
		'status'=>$status,
	);
	
	print_r($cat);
	$table=$db->table('ms_category');
	$update=$table->where('id',$id);
	$res=$update->update($cat);
	return json_encode($res);
	
	}
	 public function product_delete(){
	
		 $db=db_connect();
		 $sql=$db->table('ms_product');
		 // $query=$sql->getWhere('Id',$del);
		 // $builder1 = $query->delete($query);
	}
}
