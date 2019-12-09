<?php
class HWT extends CI_Model
{
	function __construct() {
		parent::__construct();
        $this->load->database();
	}

	function insert($table_name,$data_array) {
		if($this->db->insert($table_name,$data_array))
		{
			return $this->db->insert_id();
		}
		return false;
	}

	function update($table_name,$data_array,$where_array) {
		$this->db->where($where_array);
		$rs = $this->db->update($table_name, $data_array);
		return $rs;
	}

	function get_result($table_name,$rows="*",$where_array) {
		$this->db->select($rows);
		$this->db->from($table_name);
		$this->db->where($where_array);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	function get_one_row($table_name,$row="*",$where_array) {
		$this->db->select($row);
		$this->db->from($table_name);
		$this->db->where($where_array);
		$query = $this->db->get();
		return $query->row_array();
	}

	function get_column($tbl_name,$column_name,$where_array) {				
		$this->db->select($column_name);
		$this->db->from($tbl_name);
		$this->db->where($where_array);		
		$query = $this->db->get();
		return $query->row($column_name);
	}

	function get_num_rows($table_name,$where = array()) {
		if (!empty($where)) {
			$this->db->where($where);
		}
		$query = $this->db->get($table_name);
		return $query->num_rows();
	}

	function get_hwt($table_name,$rows = "*",$where_array = array(),$param = array()) {
		$this->db->select($rows);
		$this->db->from($table_name);
		if(!empty($where_array)) {
			$this->db->where($where_array);
		}

		if(isset($param['search']) && $param['search']!="" && !empty($param['search_column'])) {
			$keyword = $param['search'];
			$this->db->group_start();		
			if(count($param['search_column'])==1) {
	        	$this->db->like($param['search_column'][0], $keyword);
			} else {
				foreach ($param['search_column'] as $key => $field) {
					if($key==0) {
	        			$this->db->like($field, $keyword);
					} else {
	        			$this->db->or_like($field, $keyword);
					}
				}
			}	
	        $this->db->group_end();
		}
		
		if(isset($param['limit']) && !empty($param['limit'])) {
			$this->db->limit($param['limit'][1],$param['limit'][0]);
		}
        if(array_key_exists("shortby",$param) && array_key_exists("shortorder",$param)){
			$this->db->order_by($param['shortby'],$param['shortorder']);
        }
        if(array_key_exists("groupby",$param)){
			$this->db->group_by($param['groupby']);
        }

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	function hwt_join_1($tbl,$join,$rows="*",$where_array = array(),$param = array()) {
		
		$this->db->from($tbl[0]);
		foreach ($tbl as $key => $value) {
			if($key>0) {
				$this->db->join($tbl[$key], $join[$key-1]);
			}
		}
		$this->db->select($rows);

		if(isset($param['search']) && $param['search']!="" && !empty($param['search_column'])) {
			$keyword = $param['search'];
			$this->db->group_start();		
			if(count($param['search_column'])==1) {
	        	$this->db->like($param['search_column'][0], $keyword);
			} else {
				foreach ($param['search_column'] as $key => $field) {
					if($key==0) {
	        			$this->db->like($field, $keyword);
					} else {
	        			$this->db->or_like($field, $keyword);
					}
				}
			}	
	        $this->db->group_end();
		}

		if(!empty($where_array)) {
			$this->db->where($where_array);
		}
		
		if(isset($param['limit']) && !empty($param['limit'])) {
			$this->db->limit($param['limit'][1],$param['limit'][0]);
		}

		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}else{
			return false;
		}
	}

	public function changeStatus($data) {
		$status = $data['status'] == '1' ? '0': '1';
		$this->db->where($data['id'], $data['editid']);
		$this->db->update($data['tbl'], array("status"=>$status) );        
		return TRUE;
	}
	public function hwt_delete($data) {
		$this->db->where($data['id'], $data['did']);
	 	$res = $this->db->update($data['tbl'], array("isDelete"=>1) );
		return $res;
	}
	function printr($res,$die = 0) {
		echo "<pre>";
		print_r($res);
		echo "</pre>";
		if($die) { die(); }
	}

	function get_encrypt($string, $key=ENCRYPTED) {
		$result = '';
		$string = PREFIX.$string;
		for($i=0, $k= strlen($string); $i<$k; $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result .= $char;
		}
		return base64_encode($result);
	}

	function get_decrypt($string, $key=DECRYPTED) {
		$result = '';
		// echo $string;
		$string = base64_decode($string);
		for($i=0,$k=strlen($string); $i< $k ; $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)-ord($keychar));
			$result.=$char;
		}
		return $result;
	}
	function char_limit($string, $word_limit=30) {
		$words = explode(" ",$string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	public function hwt_send_mail($mail_data) {
	    $config = array();
	    $config['smtp_port']= "465";
	    $config['mailtype'] = 'html';
	    $config['charset']  = "utf-8";
	    $config['newline']  = "\r\n";
	    $config['smtp_timeout']='30';
	    $config['wordwrap'] = TRUE;
	    // load Email Library 

	    $CI =& get_instance();
	      
	    $CI->load->library('email');
	    //$this->load->library('email');

	    $CI->email->initialize($config);
	    $CI->email->from(FROM_EMAIL, SITE_NAME);

	    if(isset($mail_data['bcc']) && $mail_data['bcc']!='') {
	        $bcc_mail = rtrim($mail_data['bcc'],",");
	        $bcc_data = explode(",", $bcc_mail);
	        foreach ($bcc_data as $bcc_key => $bcc_value) {
	            $CI->email->bcc($bcc_value);
	        }
	    }

	    $CI->email->to($mail_data['to_email']);
	    $CI->email->subject($mail_data['subject']);
	    $CI->email->message($mail_data['body']);        

	    //Send mail 
	    if($CI->email->send()) 
	        return true;
	    else
	        return $this->email->print_debugger();

	}

	public function resize_image($path,$name,$w = '360',$h = '240',$isthumb = false,$thumbpath = '')
	{
		if (!is_dir($path)) {
            mkdir($path, 0777, TRUE);
            @chmod($path,0777);
        }
		//copy(SUBSERVICEPATH.$name, SUBSERVICEPATH.'main/'.$name);
		include_once APPPATH.'third_party/resize_image.php';
		$image = new SimpleImage(); 
		$image->load($path.$name);
		$image->resize($w,$h);
		if($isthumb){
			if (!is_dir($path.$thumbpath)) {
	            mkdir($path.$thumbpath, 0777, TRUE);
	            @chmod($path.$thumbpath,0777);
	        }
			$image->save($path.$thumbpath.$name);
		} else {
			$image->save($path.$name);	
		}
		return true;
	}

    
}