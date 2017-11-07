<?php

class MY_Controller extends CI_Controller {

    protected $data = array('title' => 'Login', 'role' => 1);

    public function __construct() {
        parent::__construct();
    }

    //put your code here
}

class Home_Controller extends MY_Controller {

 
    public function __construct() {
        parent::__construct();
       // if (!$this->session->userdata('logged_in')) {
       //     redirect('login', 'refresh');
       // }
        $dataLogin = $this->session->userdata('logged_in');
        $this->data['id_user_connected'] = $dataLogin["id"];
		$this->data['email_user_connected'] = $dataLogin["email"];
        $this->data['role'] = $dataLogin["role"];
        //$this->data["projections"] = json_encode($this->projections);
    }

    protected function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }

}
