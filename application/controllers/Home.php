<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Home_Controller {

    public function __construct() {
        parent::__construct();
//load models
        $this->load->model('UserModel', '', TRUE);
        $this->load->model('SurveyModel', '', TRUE);
        $this->load->model('AnswerModel', '', TRUE);

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

    public function set_answers() {
        $answer = $this->input->post('answer_body');
       $user = $this->input->post('user_id');
       $question = $this->input->post('question_id');
      
       $answer_data = array(
            'answer_question_id' => $question,
            'user' => $user,
            'answer_body' => $answer);

       if ($this->AnswerModel->addAnswer($answer_data)) {
            $this->session->set_flashdata('msg', '<div style="margin: 75 150 0px;" class="alert alert-success text-center">Insertion avec succès !!
<br> vous allez recevoir un E-mail dans quelques minutes.</div>');
        }
    }
    
      public function set_answers_q7() {
          //$data = json_encode($data_json, true);
          $answer_body = $this->input->post('answer_body');
//          var_dump($result);
//          die;
          
           $result = array();
           $element = array();
////
            foreach ($answer_body as $cle => $valeur) {
                $data = array_values($valeur);
                $element['question_id'] = $data[5];
                $element['user_id'] = $data[4];
                $element['activity_id'] = $data[0];
                $element['qte'] = $data[1];
                $element['unit'] = $data[2];
                $element['percent'] = $data[3];
                $result[] = $element;
            }
            
          foreach ($result as $row) {
           $this->AnswerModel->addAnswerActivity($row) ;
          }
          
//      $this->output->set_content_type('application/json');
//        $this->output->set_output(json_encode($result));
//        return $result;
//       
   }

}
