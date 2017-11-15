function insertQ8() {
    if ($('input[value="non"][name="Q8"]').prop("checked") == true) {
        href_next = base_url + 'index.php/home/page/' + survey + '/13'; //if q8 == non
        $("#next_btn").attr("href", href_next);
    }

    var Q8 = localStorage.getItem('Q8');
    $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
        data: {"answer_body": Q8, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });

}
