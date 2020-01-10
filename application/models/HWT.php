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

        if(array_key_exists("in_array",$param) && array_key_exists("in_array_field",$param)){
			$this->db->where_in($param['in_array_field'],$param['in_array']);
        }

        if(array_key_exists("find_in_array",$param) && array_key_exists("find_in_array_field",$param)){
	        $this->db->group_start();
	        foreach($selected_values as $val)
	        {
	            $this->db->where("find_in_set($values, $field)");
	        }
	        $this->db->group_end();
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
				/*$join_type = "left";
				if( !empty($parmas['join_type'])) {
					$join_type = $parmas['join_type'];
				}*/
				// $this->db->join($tbl[$key], $join[$key-1],$join_type);
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

        if(array_key_exists("in_array",$param) && array_key_exists("in_array_field",$param)){
			$this->db->where_in($param['in_array_field'],$param['in_array']);
        }

        if(array_key_exists("find_in_set_array",$param) && array_key_exists("find_in_set_array_field",$param)){
	        $this->db->group_start();
	        $find_in_set_array = $param['find_in_set_array'];
	        $find_in_set_array_field =$param['find_in_set_array_field'];
	        $this->db->where("find_in_set($find_in_set_array, $find_in_set_array_field)");
	        
	        $this->db->group_end();
        }

        if(array_key_exists("groupby",$param)){
			$this->db->group_by($param['groupby']);
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
	public function hwt_selected( $value , $data ) {
		if(!empty($data)) {
			$my_array = explode(",", $data);
			if(in_array($value, $my_array)) {
				return "selected";
			} else {
				return "";
			}
		}
	}

	public function hwt_checked( $value , $data ) {
		if(!empty($data)) {
			$my_array = explode(",", $data);
			if(in_array($value, $my_array)) {
				return "checked";
			} else {
				return "";
			}
		}
	}

	public function get_jobs( $wh = "" ,$parmas = "" )
	{
		$this->db->select("*");
		$this->db->from("job");
		$this->db->where($wh);

		echo $this->db->last_query();
		die();
		
	}

	public function get_explode( $tbl, $field, $value ) {

		$this->db->select($field);
		$this->db->from($tbl);
		$array = explode(",", $value);
		$this->db->where_in("id", $array);
		$query = $this->db->get();
		$res =$query->result_array();
		$result = "";
		if(isset($res) && !empty($res) ) {
			foreach ($res as $res_key => $res_value) {
				$result .= $res_value[$field].", ";
			}
		}
		return rtrim($result,", ");
	}

	public function hwt_idin( $tbl, $row, $where, $field, $values ) {

		$row_res = $this->get_one_row($tbl,$row,$where);

		$shortlist = $row_res[$field];
		$selected_values = explode(",", $shortlist);
		
		$this->db->select($row)->from($tbl)->where($where);
	    $this->db->group_start();
	    foreach($selected_values as $val)
	    {
	        $this->db->where("find_in_set($values, $field)");
	    }
	    $this->db->group_end();
	    $result = $this->db->get()->result_array();

	    if(isset($result) && !empty($result)) {
	    	return true;
	    } else {
	    	return false;
	    }
	    
	}

	public function hwt_idin_result( $tbl, $row, $where, $field, $values ) {

		$row_res = $this->get_one_row($tbl,$row,$where);

		$shortlist = $row_res[$field];
		$selected_values = explode(",", $shortlist);
		
		$this->db->select($row)->from($tbl)->where($where);
	    $this->db->group_start();
	    foreach($selected_values as $val)
	    {
	        $this->db->where("find_in_set($values, $field)");
	    }
	    $this->db->group_end();
	    $result = $this->db->get()->result_array();

	    if(isset($result) && !empty($result)) {
	    	return $result;
	    } else {
	    	return false;
	    }
	    
	}

	function hwt_custom( $qry ) {
		$query = $this->db->query( $qry ); 
    	return $query->result_array();
	}
    
}
