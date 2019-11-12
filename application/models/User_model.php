<?php
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function get_uuid_by_user($username)
    {
        $robust = $this->load->database('', true);
        $robust->select('UUID');
        $robust->from('accounts');
        $robust->where('username', $username);
        $robust->limit(1);
        $query = $robust->get();
        $row   = $query->row();
        if (isset($row)) {
            return $row->UUID;
        }
    }
    public function get_hash_by_uuid($uuid)
    {
        $robust = $this->load->database('', true);
        $robust->select('password');
        $robust->from('accounts');
        $robust->where('UUID', $uuid);
        $robust->limit(1);
        $query = $robust->get();
        $row   = $query->row();
        if (isset($row)) {
            return $row->password;
        }
    }
    public function check_my_id($hash, $pass)
    {
        $try     = md5($pass);
        // $a2 = md5($attempt);
        if ($try == $hash) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function login($username, $password)
    {
        $uuid = $this->get_uuid_by_user($username);
        $hash = $this->get_hash_by_uuid($uuid);
        $valid  = $this->check_my_id($hash, $password);
        if ($valid == TRUE) {
            return $uuid;
        } else {
            return "FALSE";
        }
    }
    
  public function getUserInfo($id)
    {
	    $robust = $this->load->database('', true);
        $q = $robust->get_where('accounts', array('uuid' => $id), 1);  
        if($robust->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }
    private function uuid()
    {
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x', mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0x0fff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));
    }
          
}
?>
