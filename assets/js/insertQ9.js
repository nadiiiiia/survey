function insertQ9() {
    $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
        data: {"answer_body": Q9, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });
}
