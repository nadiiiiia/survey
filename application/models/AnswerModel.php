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
     public function addAnswerActivity($data) {
        $question_id = $data['question_id'];
        $user_id = $data['user_id'];
        $qte =  $data['qte'];
        $unit =  $data['unit'];
        $percent =  $data['percent'];
        $this->db->select('*');
        $this->db->from('survey_activity_ans');
        $this->db->where('user_id', $user); //le meme utilisateur
        $this->db->where('question_id', $question_id); //la meme question
        
        if ($this->db->count_all_results() == 0) { /// traitement si la réponse n'existe pas --> insert
            if ($this->db->insert('survey_activity_ans', $data)) {
                return true;
            } else {
                return false;
            }
        } else {  /// traitement si la réponse existe --> update
            if ($this->db->set('qte', $qte)
                            ->set('unit', $unit)
                            ->set('percent', $percent)
                            ->where('question_id', $question_id)
                            ->where('user_id', $user)
                            ->update('survey_activity_ans')) {
                return true;
            } else {
                return false;
            }
        }
    }

}

?>