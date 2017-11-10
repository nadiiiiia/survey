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

}

?>