<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Home_Controller {

    public function __construct() {
        parent::__construct();
        //load models
        $this->load->model('UserModel', '', TRUE);
        $this->load->model('SurveyModel', '', TRUE);

        // load helpers
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->helper('url');
        $this->load->helper('download');

        // load libraries
        $this->load->library('session');
    }

    public function accueil() {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        } else {
            $dataLogin = $this->session->userdata('logged_in');
            $this->data['role'] = $dataLogin["role"];
            $this->load->view('accueil', $dataLogin);
        }
    }

    public function logout() {
        parent::logout();
    }

    public function connexion() {

        $this->load->view('connexion');
    }

    public function survey($id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        } else {
            $dataLogin = $this->session->userdata('logged_in');
            // $this->data['role'] = $dataLogin["role"];

            $this->data['id'] = $id;
            $this->load->view('survey', $this->data);
        }
    }

    public function page($survey, $id) {
        if (!$this->session->userdata('logged_in')) {
            redirect('login', 'refresh');
        } else {
            $dataLogin = $this->session->userdata('logged_in');
            // $this->data['role'] = $dataLogin["role"];
            $question = $this->SurveyModel->getQuestionBySurvey($survey, $id);
            $id_questions = $this->SurveyModel->getIdQuestionsBySurvey($survey);
            
            $this->data["question_json"] = json_encode($question);
            $this->data["question_id"] = json_encode($question[0]["question_id"]);
            $this->data["question_number"] = json_encode($question[0]["question_number"]);
            $this->data["question_body"] = json_encode($question[0]["question_body"]);
            $this->data["question_note"] = json_encode($question[0]["question_note"]);
            $this->data["section_number"] = json_encode($question[0]["section_number"]);
            $this->data["section_name"] = json_encode($question[0]["section_name"]);
            $this->data["array_IDs_json"] = json_encode($id_questions);
            
            $this->data['id'] = $id;
             $this->data['survey'] = $survey;
            $this->load->view('page', $this->data);
        }
    }

    public function questions($id) {
        $questions = $this->SurveyModel->getIdQuestionsBySurvey(2);
        var_dump($questions);
        die;
        $this->data["questions"] = json_encode($questions);
    }
    
    function load_question($survey,$quetion_nbr) {
        
        switch ($quetion_nbr) {
    case 1:
        $q1 = $this->input->post('q1');
        $this->session->set_userdata('q1', $q1); // save first form in a session
        $this->data['id'] = 2;
        $quetion_nbr = 2 ;
        redirect(base_url() . "index.php/home/page/".$survey."/2");
        break;
    case 2:
        echo "Your favorite color is red!";
        break;
  
}

    
    }

}
