--
-- ajouter un champ user .. qui contient l'id de l'utilisateur (08/11/2017)
--
ALTER TABLE  `survey_answers` ADD  `user` INT DEFAULT 0 AFTER `answer_question_id`;

--
-- ajouter un champ created_at .. qui contient la date de reponse (08/11/2017)
--
ALTER TABLE `survey_answers` ADD `created_at` datetime NOT NULL DEFAULT NOW();

--
-- ajouter un champ question_back .. qui contient l'id de la page précédente (16/11/2017)
--
ALTER TABLE `survey_questions` ADD `question_back`  INT DEFAULT 0 AFTER `question_body`;