<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends MY_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('userModel','',TRUE);
   $this->load->helper('security');
 }

 function index()
 {
   //This method will have the credentials validation
   

   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'E-mail', 'trim|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('connexion',$this->data);
   }
   else
   {
     redirect('accueil','refresh'); 
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
   //query the database
   $result = $this->userModel->login($email, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'email' => $row->email,
          'role' => $row->role 
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid e-mail or password');
     return false;
   }
 }
}
?>