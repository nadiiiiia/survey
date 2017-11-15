function insertQ5() {
    var Q5;
    href_back = base_url + 'index.php/home/page/' + survey + '/3';
    if ($('input[value="non"][name="Q5"]').prop("checked") == true) {
        href_next = base_url + 'index.php/home/page/' + survey + '/25'; //if q5 == non
        Q5 = 'non';
        $("#next_btn").attr("href", href_next);
    } else {
        Q5 = 'oui';
    }
    $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
        data: {"answer_body": Q5, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });

}
