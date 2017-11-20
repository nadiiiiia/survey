<?php

Class SurveyModel extends CI_Model {

    public function getQuestionsBySurvey($id) {
        $query = $this->db->select('*')
                ->from("survey_questions")
                ->where("survey_id", $id)
                ->join('survey_section', 'survey_section.section_id = question_section_id', 'LEFT OUTER')
                ->join('survey_back_question', 'survey_back_question.survey_id = survey_id', 'LEFT OUTER')
                ->join('survey_back_question', 'survey_back_question.question_nbr = question_number', 'LEFT OUTER')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
        return $ret;
    }

    public function getIdQuestionsBySurvey($id) {
        $query = $this->db->select('question_number')
                ->from("survey_questions")
                ->where("survey_id", $id)
                ->join('survey_section', 'survey_section.section_id = question_section_id', 'LEFT OUTER')
                ->order_by('question_number', 'ASC')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
        $result = array(); // declarer le tableau des resultats
        foreach ($ret as $key => $val) {
            $id = array_values($val);
            $result[] = $id[0];  // enregistrer la valeur de l'id dans $result
        }
        return $result; //  retourne les IDs 
    }

    public function getIdQuestionsByNbr($survey, $nbr) {
        $query = $this->db->select('question_id')
                ->from("survey_questions")
                ->where("survey_id", $survey)
                ->where("question_number", $nbr)
                ->get(); //select * from survey_questions

        $ret = $query->result_array();
        $result = array(); // declarer le tableau des resultats
        foreach ($ret as $key => $val) {
            $id = array_values($val);
            $result[] = $id[0];  // enregistrer la valeur de l'id dans $result
        }
        return $result; //  retourne les IDs 
    }

    public function getQuestionBySurvey($survey, $question) {
        $query = $this->db->select('*')
                ->from("survey_questions")
                ->where("survey_id", $survey)
                ->where("question_number", $question)
                ->join('survey_section', 'survey_section.section_id = question_section_id', 'LEFT OUTER')
                ->get(); //select * from survey_questions

        $ret = $query->result_array();

        return $ret; //  retourne les IDs 
    }

}

?>