<?php

Class AnswerModel extends CI_Model {

    public function addAnswer($data) {
        $question_id = $data['answer_question_id'];
        $answer = $data['answer_body'];
        $user = $data['user'];
        $this->db->select('*');
        $this->db->from('survey_answers');
        $this->db->where('user', $user); //le meme utilisateur
        $this->db->where('answer_question_id', $question_id); //la meme question
        // $this->db->where('answer_body', $answer); //la meme reponse

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_answers', $data)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('answer_body', $answer)
                            ->where('answer_question_id', $question_id)
                            ->where('user', $user)
                            ->update('survey_answers')) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function addAnswerTab($data) {
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $dechet_id = $data['dechet_id'];
        $qte = $data['qte'];
        $this->db->select('*');
        $this->db->from('survey_dechets_ans');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('$dechet_id', $dechet_id); //  la meme activité

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_dechets_ans', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('qte', $qte)
                            ->set('unit', $unit)
                            ->set('percent', $percent)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            ->where('activity_id', $activity_id)
                            ->update('survey_activity_ans')) {
                return true;
            }
        }
    }

    public function addAnswerDepartement($data) {
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $row_id = $data['row_id'];
        $nom = $data['nom'];
        $qte = $data['qte'];
        $this->db->select('*');
        $this->db->from('survey_departements');
        $this->db->where('user_id', $user_id); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        $this->db->where('row_id', $row_id); //la meme question

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_departements', $data)) {
                return true;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('nom', $nom)
                            ->set('qte', $qte)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user_id)
                            ->where('row_id', $row_id)
                            ->update('survey_departements')) {
                return true;
            }
        }
    }

    public function setBackPage($data) {
        $user = $data['user_id'];
        $survey = $data['survey_id'];
        $question = $data['question_nbr'];
        $back = $data['back_nbr'];
        $this->db->select('*');
        $this->db->from('survey_back_question');
        $this->db->where('user_id', $user); //le meme utilisateur
        $this->db->where('survey_id', $survey); //la meme question
        $this->db->where('question_nbr', $question); //la meme reponse

        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_back_question', $data)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('back_nbr', $back)
                            ->where('user_id', $user) //le meme utilisateur
                            ->where('survey_id', $survey) //la meme question
                            ->where('question_nbr', $question)
                            ->update('survey_back_question')) {
                return true;
            }
        }
    }

    public function getBackPage($user, $survey) {
        $query = $this->db->select('question_nbr, back_nbr')
                ->from("survey_back_question")
                ->where('user_id', $user) 
                ->where('survey_id', $survey) 
                ->get();
            
          $ret = $query->result_array();
        return $ret;
    }

}

?>