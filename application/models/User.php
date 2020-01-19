<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
    function __construct() {
        $this->tableName = 'hwt_user';
        $this->primaryKey = 'id';
    }
    
    /*
     * Insert / Update linkedin profile data into the database
     * @param array the data for inserting into the table
     */
    public function checkUser($userData = array()){
        if(!empty($userData)){

            /*
            [oauth_uid] => goSa0pnvc_
            [first_name] => Hitesh
            [last_name] => Vadoliya
            [email] => hmvadoliya.iipl2013@gmail.com
            [picture] => https://media-exp2.licdn.com/dms/image/C4E03AQHkrvmJdrA6wA/profile-displayphoto-shrink_100_100/0?e=1585180800&v=beta&t=mjhZi5XP4WcEL_rb4JpCFP0p5rLVx52aj1r3hj-Yxpc
            [link] => https://www.linkedin.com/
            [oauth_provider] => linkedin */

            //check whether user data already exists in database with same oauth info
            $this->db->select($this->primaryKey);
            $this->db->from($this->tableName);
            // $this->db->where(array('oauth_provider'=>$userData['oauth_provider'], 'oauth_uid'=>$userData['oauth_uid']));
            $this->db->where(array('email'=>$userData['email']));
            $prevQuery = $this->db->get();
            $prevCheck = $prevQuery->num_rows();
            
            if($prevCheck > 0){
                $prevResult = $prevQuery->row_array();
                
                //update user data
                $userData['modified'] = date("Y-m-d H:i:s");
                $updateData = array(
                    "fname" => $userData['first_name'],
                    "oauth_provider" => $userData['oauth_provider'],
                    "oauth_uid" => $userData['oauth_uid'],
                );
                $update = $this->db->update($this->tableName, $updateData, array('id' => $prevResult['id']));
                
                //get user ID
                $userID = $prevResult['id'];
            }else{
                //insert user data
                $userData['created']  = date("Y-m-d H:i:s");
                $userData['modified'] = date("Y-m-d H:i:s");

                $insertData = array(
                    "fname" => $userData['first_name']." ".$userData['last_name'],
                    "email" => $userData['email'],
                    "type" => 'jobseeker',
                    "status" => '1',
                    "oauth_provider" => $userData['oauth_provider'],
                    "oauth_uid" => $userData['oauth_uid'],
                );
                $insert = $this->db->insert($this->tableName, $insertData);
                
                //get user ID
                $userID = $this->db->insert_id();
            }
        }
        
        //return user ID
        return $userID?$userID:FALSE;
    }
}