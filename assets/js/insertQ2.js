function insertQ2() {
    href_next = base_url + 'index.php/home/page/' + survey + '/25'; //if q3 == non
    $("#next_btn").attr("href", href_next);

    var Q2 = localStorage.getItem('q2');
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q2, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });


}
