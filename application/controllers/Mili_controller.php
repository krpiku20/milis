<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mili_controller extends CI_Controller{
	public $graphNode = NULL;
	public $url = NULL;
	public function __construct(){
		global $graphNode;
		parent::__construct();
		error_reporting(0); 
		$this->load->model('mili_model');
		$this->load->common('includes/common');
		$this->url = $this->security->xss_clean(trim($this->input->post("url")));
		$url = $this->url;
		$this->graphNode = $this->mili_model->fetchFacebookPageData($url);
	}
	function checkemail($str) {
		return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
	}
	function validate_phone_number($phone){
		$filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
		$phone_to_check = str_replace("-", "", $filtered_phone_number);
			if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
			   return false;
			} 
			else {
			   return true;
			}
	}
	public function visit($data = NULL){
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
		$json     = file_get_contents('http://ipinfo.io/'.$ipaddress.'/geo');
		$json     = json_decode($json, true);
		$country  = $json['country'];
		$region   = $json['region'];
		$city     = $json['city'];
		$loc = explode(',',$json['loc']);
		$lat = $loc[0];
		$long = $loc[1];
		$table = 'visits';
		$visitsAllCheck = $this->mili_model->visitsAllCheck($table);	
		$visitsCheck = $this->mili_model->visitsCheck($table,$ipaddress);	
		if($visitsCheck > 0){
		}else{
			$insertArray = array(
				'city' => $city,
				'region' => $region,
				'country' => $country,
				'ip' => $ipaddress,
				'lat' => $lat,
				'long' => $long
			);	
			$insert = $this->mili_model->insert($table,$insertArray);
		}
		echo $visitsAllCheck;
	}
	public function index($data = NULL){
		$table = 'filter_name';
		//
		$data['filterTag'] = $this->mili_model->filterTag($table);
		$this->load->template('home',$data);
	}
	public function about_milis($data = NULL){
		$n = 60;
		$this->output->cache($n);
		$this->load->template('about_milis',$data);
	}
	public function contact($data = NULL){
		$this->load->template('contact',$data);
	}
	public function feed($data = NULL){
		$data['fetchFeed'] = $this->mili_model->fetchFeed();
		$this->load->template('feed',$data);
	}
	public function customer_reviews($data = NULL){
	
		$data['customerReviews'] = $this->mili_model->fetchFacebookPageReviews();
		$this->load->template('customer_reviews',$data);
	}
	public function send_contact($data = NULL){
		$name = $this->security->xss_clean(trim($this->input->post("name")));
		$email = $this->security->xss_clean(trim($this->input->post("email")));
		$phone = $this->security->xss_clean(trim($this->input->post("phone")));
		$message = $this->security->xss_clean(trim($this->input->post("message")));
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
		$json     = file_get_contents('http://ipinfo.io/'.$ipaddress.'/geo');
		$json     = json_decode($json, true);
		$country  = $json['country'];
		$region   = $json['region'];
		$city     = $json['city'];
		$loc = explode(',',$json['loc']);
		$lat = $loc[0];
		$long = $loc[1];
		if($name == NULL){
			echo 'Name is required<br>';
			return false;
		}
		if(!$this->checkemail($email)){
			echo 'Valid email is required<br>';
			return false;
		}
		if(!$this->validate_phone_number($phone)){
			echo 'Valid phone no. is required<br>';
			return false;
		}
		if($message == NULL){
			echo 'Message is required';
			return false;
		}
		else{
			$insertArray = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone,
				'message' => $message,
				'lat' => $lat,
				'long' => $long
			);
			$table = 'contact';	
			$returnInsert = $this->mili_model->insert($table,$insertArray);
			echo $returnInsert;
		}
	}
	public function privacy_policy($data = NULL){
		$n = 60;
		$this->output->cache($n);
		$this->load->template('privacy_policy',$data);
	}
	public function terms_conditions($data = NULL){
		$n = 60;
		$this->output->cache($n);
		$this->load->template('terms_conditions',$data);
	}
	public function exchange_policy($data = NULL){
		$n = 60;
		$this->output->cache($n);
		$this->load->template('exchange_policy',$data);
	}
	public function feedback($data = NULL){
		$this->load->template('feedback',$data);
	}
	public function feedback_post($data = NULL){
		$fullname = $this->security->xss_clean(trim($this->input->post("fullname")));
		$phoneno = $this->security->xss_clean(trim($this->input->post("phoneno")));
		$email = $this->security->xss_clean(trim($this->input->post("email")));
		$address = $this->security->xss_clean(trim($this->input->post("address")));
		$desc = $this->security->xss_clean(trim($this->input->post("desc")));
		$ip = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$json     = file_get_contents('http://ipinfo.io/'.$ip.'/geo');
		$json     = json_decode($json, true);
		$loc = explode(',',$json['loc']);
		$lat = $loc[0];
		$long = $loc[1];		
		$date = date("Y-m-d h:i:s");
		if($fullname == NULL){
			echo '1';
			return false;
		}
		if(!$this->validate_phone_number($phoneno)){
			echo '2';
			return false;
		}
		if(!$this->checkemail($email)){
			echo '5';
			return false;
		}
		if($address == NULL){
			echo '3';
			return false;
		}
		if($desc == NULL){
			echo '4';
			return false;
		}
		else{
			$insertArray = array(
				'fullname' => $fullname,
				'phoneno' => $phoneno,
				'email' => $email,
				'address' => $address,
				'desc' => $desc,
				'ip' => $ip,
				'lat' => $lat,
				'long' => $long,
				'browser' => $browser,
				'date' => $date,
			);
			$table = 'web_reviews';
			$this->mili_model->insert($table,$insertArray);		
			echo 'Thank you for your feedback';	
		}
	}
	public function display_data($info = NULL){
		$value = $this->security->xss_clean(trim($this->input->post("value")));
		$url = $this->security->xss_clean(trim($this->input->post("url")));
		$graphNode = $this->graphNode;
		$info['fbdata'] = $this->mili_model->filterData($graphNode);
		$i = 0;
		foreach($info['fbdata'] as $fb){
			foreach($fb as $fbb){
				$info['f']=$fbb;
				$info['value']=$value;
				$productId = $fbb['id'];
				$table = 'customer_reviews';
				$table1 = 'product_likes';
				$fetchAvgReviews = $this->mili_model->fetchAvgReviews($table,$productId);
				$fetchTotalReviews = $this->mili_model->fetchTotalReviews($table,$productId);
				$info['fetchLikes'] = $this->mili_model->fetchLikes($table1,$productId);
				$info['avgReviews'] = $fetchAvgReviews[0]->avgrating;
				$info['totReviews'] = $fetchTotalReviews[0]->tot;
					if($value != ''){
						if(preg_match("/".$value."/", str_replace(str_split('#_'), ' ', strtolower($fbb['message_tags'][0]['name'])))){
							$this->load->view('product_view',$info);
						}
						else{
							echo '';
						}
					}
					else{
						$this->load->view('product_view',$info);		    		
					}
		$i++;
			}
		}
	}
	public function filter_tag($data = NULL){
		$table = 'filter_name';
		$filterTag= $this->mili_model->filterTag($table);
		print_r(json_encode($filterTag));	
	}
	public function add_wishlist($data = NULL){
		$product_id = $this->security->xss_clean(trim($this->input->post("product_id")));
		$product_name = $this->security->xss_clean(trim($this->input->post("product_name")));
		$product_image = $this->security->xss_clean(trim($this->input->post("product_image")));
		$insertArray = array(
			'id' => $product_id,
			'qty' => '1',
			'price' => '0',
			'name' => $product_name, 
			'product_image' => $product_image,
			'date' => date('Y-m-d h:i:s')
		);
		$cartId = $this->cart->contents();
		foreach($cartId as $cart){ 
			if($product_id == $cart['id']){
				$this->session->set_flashdata('error', 'Already added');
				//redirect('add_wishlist');
			}
			else{
				$this->cart->insert($insertArray);
			}
		}
		$this->cart->insert($insertArray);
	
		$data['wishDetails'] = $this->cart->contents();	
		$this->load->view('wishlist_tip',$data);
	}
	public function check_cart($data = NULL){	
	
		$data['wishDetails'] = $this->cart->contents();	
		$this->load->view('wishlist_tip',$data);
	}
	public function remove_cart(){
		$cartId = trim($this->input->post("cartId"));
		$rowid = trim($this->input->post("rowid"));
		$insertArray = array(
			'rowid' => $rowid,
			'qty' => '0'
		);
		$this->cart->update($insertArray);	
		echo count($this->cart->contents());
	}
	public function wishlist_fetch($data = NULL){
		$this->load->template('wishlist',$data);
	}
	public function wishlist_update($data = NULL){
	
		$data['cartdetails'] = $this->cart->contents();
		$this->load->view('wishlist_update',$data);
	}
	public function product_details($data = NULL){
		$graphNode = $this->graphNode;
		$productId = $this->security->xss_clean(trim($this->input->get("product")));
		$table = 'customer_reviews';
		$table1 = 'product_likes';
		$mac = $_SERVER['REMOTE_ADDR'];
		$data['productDetails'] = $this->mili_model->product_details($graphNode,$productId);
		foreach($data['productDetails'] as $product){
			foreach($product as $products){
				$fetchAvgReviews = $this->mili_model->fetchAvgReviews($table,$productId);
				$fetchTotalReviews = $this->mili_model->fetchTotalReviews($table,$productId);
				$info['fetchLikes'] = $this->mili_model->fetchLikes($table1,$productId);
				$info['fetchLikesDetails'] = $this->mili_model->fetchLikesDetails($table1,$productId,$mac);
				$info['avgReviews'] = $fetchAvgReviews[0]->avgrating;
				$info['totReviews'] = $fetchTotalReviews[0]->tot;
				$info['productView'] = $products;
					if($productId ==  $products['id']){
						$this->load->template('product_details',$info);
					}
			}
		}
	}
	public function post_reviews(){
		$productId = $this->security->xss_clean(trim($this->input->post("productId")));
		$fullname = $this->security->xss_clean(trim($this->input->post("fullname")));
		$phoneno = $this->security->xss_clean(trim($this->input->post("phoneno")));
		$email = $this->security->xss_clean(trim($this->input->post("email")));
		$address = $this->security->xss_clean(trim($this->input->post("address")));
		$desc = $this->security->xss_clean(trim($this->input->post("desc")));
		$rating = $this->security->xss_clean(trim($this->input->post("rating")));
		$ip = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$json     = file_get_contents('http://ipinfo.io/'.$ip.'/geo');
		$json     = json_decode($json, true);
		$loc = explode(',',$json['loc']);
		$lat = $loc[0];
		$long = $loc[1];		
		$date = date("Y-m-d h:i:s");
		if($fullname == NULL){
			echo '1';
			return false;
		}
		if(!$this->validate_phone_number($phoneno)){
			echo '2';
			return false;
		}
		if(!$this->checkemail($email)){
			echo '5';
			return false;
		}
		if($address == NULL){
			echo '3';
			return false;
		}
		if($desc == NULL){
			echo '4';
			return false;
		}
		else{
			$insertArray = array(
				'product_id' => $productId,
				'fullname' => $fullname,
				'phoneno' => $phoneno,
				'email' => $email,
				'address' => $address,
				'desc' => $desc,
				'rating' => $rating,
				'ip' => $ip,
				'lat' => $lat,
				'long' => $long,
				'browser' => $browser,
				'date' => $date,
			);
			$table = 'customer_reviews';
			$this->mili_model->insert($table,$insertArray);
			$data['avgReviews'] = $this->mili_model->fetchAvgReviews($table,$productId);
			$data['totReviews'] = $this->mili_model->fetchTotalReviews($table,$productId);
				foreach($data as $info){
					foreach($info as $row){
						echo $row->avgrating.'|'.$row->tot;
					}
				}
		}
	}
	public function fetch_reviews(){
		$productId = $this->security->xss_clean(trim($this->input->post("productId")));
		$limit = $this->security->xss_clean(trim($this->input->post("limit")));
		$end = $this->security->xss_clean(trim($this->input->post("end")));
		$table = 'customer_reviews';
		$data['productReviews'] = $this->mili_model->fetchProductReviews($table,$productId,$limit,$end);
		$data['totalProductReviews'] = $this->mili_model->fetchTotalProductReviews($table,$productId);
		$this->load->view('product_reviews',$data);
	}
	public function product_like(){
		$productId = $this->security->xss_clean(trim($this->input->post("productId")));
		$like = $this->security->xss_clean(trim($this->input->post("like")));
		$mac = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$json     = file_get_contents('http://ipinfo.io/'.$mac.'/geo');
		$json     = json_decode($json, true);
		$loc = explode(',',$json['loc']);
		$lat = $loc[0];
		$long = $loc[1];
		$table = 'product_likes';
		$data['fetchLikesDetails'] = $this->mili_model->fetchLikesDetails($table,$productId,$mac);
		if($like == '1'){
			$insertArray = array(
				'product_id' => $productId,
				'likes' =>$like,
				'mac' => $mac,
				'lat' =>$lat,
				'long' => $long
			);
			if(count($data['fetchLikesDetails']) > 0){
				echo 'LIKED';
			}
			else{
				$insert = $this->mili_model->insert($table,$insertArray);
			}
		}
		else{
			$update = $this->mili_model->updateProductLike($table,$productId,$like,$mac);
		}
		$data['fetchLikes'] = $this->mili_model->fetchLikes($table,$productId);
		echo $data['fetchLikes'];
	}
}
