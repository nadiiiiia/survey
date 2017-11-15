function insertQ6() {
    var min = localStorage.getItem('q6-1');
    var max = localStorage.getItem('q6-2');
    var Q6 = [min, max];
    if ($('input[value="non"][name="Q8"]').prop("checked") == true) {
        href_next = base_url + 'index.php/home/page/' + survey + '/13'; //if q6 == non
        $("#next_btn").attr("href", href_next);
    }

    $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/home/set_answers_array/",
        data: {"answer_body": Q6, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });
}
