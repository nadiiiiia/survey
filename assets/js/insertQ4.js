function insertQ4() {
    href_next = base_url + 'index.php/home/page/' + survey + '/7';
    var Q4_1 = localStorage.getItem('q4-1-1');
    var Q4_2 = localStorage.getItem('q4-2-1');
    $(this).attr("href", href_next);
    var Q4 = [Q4_1, Q4_2];
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers_array/",
        data: {"answer_body": Q4, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });
}
