function insertQ7() {
    var Q7 = getTableQ7Data();
    $.ajax({
        type: "post",
        url: "<?php echo base_url(); ?>index.php/home/set_answers_q7/",
        data: {"answer_body": Q7},
        dataType: "json",
    });

}
