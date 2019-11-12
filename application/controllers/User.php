<?php
class User extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database('','', TRUE);
    }
    public function index()
    {
        redirect('/');
    }
    
    public function login()
    {
        $data = array(
            'base_href' => base_url(),
            'page_title' => 'Home',
            'message' => ''
        );
        $this->load->view('user/login', $data);
    }
    public function process()
    {
        $this->load->model('User_model', 'auth');
        $user        = strtolower($this->input->post('user'));
        $password    = $this->input->post('password');
        $light       = $this->auth->login($user, $password);
        if ($light == "FALSE") {
            $data = array(
                'base_href' => base_url(),
                'page_title' => 'Login',
                'message' => 'Invalid Username or Password'
            );
            $this->load->view('user/login', $data);
        } else {
            $account_data = $this->auth->getUserInfo($light);
            if ($account_data->active == "1") {
                $newdata = array(
                    'uuid' => $light,
                    'username' => $account_data->username,
			    'displayname' => $account_data->DisplayName,
				'level' => $account_data->role,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($newdata);
                redirect('/');
            } else {
                die('Your account is suspended, please contact Astraios Colony Engineering');
            }
            
        }
        
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/user/login');
    }
    public function register()
    {
       echo md5('password');
    }
    
}
?>

