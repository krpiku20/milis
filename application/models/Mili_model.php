<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	use Facebook\Facebook;
	use Facebook\Exceptions\FacebookResponseException;
	use Facebook\Exceptions\FacebookSDKException;

class Mili_model extends CI_Model{
	function __construct() {
        parent::__construct();
	}
	function filterTag($table){
		$query = $this->db->where('status','1')->order_by('name')->get($table);
		return $query->result();
	}
	function visitsCheck($table,$ipaddress){
		$query = $this->db->where('ip',$ipaddress)->get($table);
		return $query->num_rows();
	}
	function visitsAllCheck($table){
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	function fetchUrl($url){
        if(is_callable('curl_init')){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $feedData = curl_exec($ch);
            curl_close($ch);
        }
    	return $feedData;
    }
	function fetchFacebookPageData($url){
		$accessToken = "EAAEjoTA8s3QBAAv2ZB6LHbxEfhC14aYnA2OSDDykO6ulSRKHReCIodhvz7ZCZBfuUBPzyUnX4H7GUckCZAxEJZB1HyZALgoNb47IOvp9jLuVC6s4iXoyPZBAU39abXN4RjfmRbvFEHTVOAlLQjPdMdPnyCDtq8XU4fS0fC7vtEBzgZDZD";
        if(isset($_POST['nextLink'])){
            $url = $_POST['nextLink'];
       	} 
       	elseif(isset($_POST['prevLink'])){
            $url = $_POST['prevLink'];
        } 
        else{
        	if($url == ''){
        		$url = 'https://graph.facebook.com/v8.0/100722371551069/feed?fields=id,attachments,full_picture,message_tags,message,created_time&limit=50&access_token='.$accessToken;
        	}else{
        		$url = $url;
        	}
        }
	    $cacheFile = APPPATH.'cache' . DIRECTORY_SEPARATOR . md5(@$url);
	    if (file_exists($cacheFile)){
	        $fh = fopen($cacheFile, 'r');
	        $cacheTime = trim(fgets($fh));
	        if ($cacheTime > strtotime('-30 minutes')){
	        	return json_decode(stream_get_contents($fh), true);
	        }
		        fclose($fh);
		        unlink($cacheFile);
	    }

		    $json = $this->fetchUrl($url);
		    $graphNode = json_decode($json, true);
		    $fh = fopen($cacheFile, 'w');
		    fwrite($fh, time() . "\n");
		    fwrite($fh, $json);
		    fclose($fh);
	        return $graphNode;
	}
	function filterData($graphNode){
		return $graphNode;
	}
	function fetchFacebookPageReviews(){
			require_once APPPATH.'core/Facebook/autoload.php';
			require_once APPPATH.'core/Facebook/Exceptions/FacebookResponseException.php';
			require_once APPPATH.'core/Facebook/Exceptions/FacebookSDKException.php';
			require_once APPPATH.'core/Facebook/Helpers/FacebookRedirectLoginHelper.php';
			$appId = "320650182701940";
			$appSecret = "a8419f4fc1a35a788883870c1d5321af";
			$fb = new Facebook([
			    'app_id' => $appId,
			    'app_secret' => $appSecret,
			    'default_graph_version' => 'v8.0'
			]);
			$accessToken = "EAAEjoTA8s3QBAAv2ZB6LHbxEfhC14aYnA2OSDDykO6ulSRKHReCIodhvz7ZCZBfuUBPzyUnX4H7GUckCZAxEJZB1HyZALgoNb47IOvp9jLuVC6s4iXoyPZBAU39abXN4RjfmRbvFEHTVOAlLQjPdMdPnyCDtq8XU4fS0fC7vtEBzgZDZD";
			try{
				$response = $fb->get('/100722371551069/ratings?fields=recommendation_type,review_text,created_time',
				    $accessToken
				);
			} 
			catch(FacebookExceptionsFacebookResponseException $e){
			  echo 'Graph returned an error: ' . $e->getMessage();
			  exit;
			} 
			catch(FacebookExceptionsFacebookSDKException $e){
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();
			  exit;
			}
			$graphEdge = $response->getGraphEdge();
			return $graphEdge;
	}
	function product_details($graphNode,$productId){
		return $graphNode;
	}
	function insert($table,$insertArray){
		$query = $this->db->insert($table, $insertArray);
		return $query;
	}
	function updateProductLike($table,$productId,$like,$mac){
		$this->db->set('status', $like);
		$this->db->where('product_id', $productId);
		$this->db->where('mac', $mac);
		$this->db->update($table);		
	}
	function fetchProductReviews($table,$productId,$limit,$end){
		$query = $this->db->where('product_id',$productId)->where('status','1')->order_by('timestamp','DESC')->limit($limit,$end)->get($table);
		return $query->result();
	}
	function fetchTotalProductReviews($table,$productId){
		$actual = $this->db->where('product_id',$productId)->where('status','1')->order_by('timestamp','DESC')->get($table);
			return $actual->result();
	}
	function fetchAvgReviews($table,$productId){
		$query = $this->db->select('AVG(rating) as avgrating')->where('product_id',$productId)->where('status','1')->get($table)->result();
		return $query;		
	}
	function fetchTotalReviews($table,$productId){
		$query = $this->db->select('COUNT(id) as tot')->where('product_id',$productId)->where('status','1')->get($table)->result();
		return $query;
	}
	function fetchLikes($table,$productId){
		$query = $this->db->select('id')->where('product_id',$productId)->where('status','1')->get($table);
		return $query->num_rows();
	}
	function fetchLikesDetails($table,$productId,$mac){
		$query = $this->db->select('id')->where('product_id',$productId)->where('mac',$mac)->where('status','1')->get($table);
		return $query->result();
	}
	function fetchFeed(){
		$rss_feed = simplexml_load_file("http://feeds.feedburner.com/traditionalmili");
		return $rss_feed;
	}
}