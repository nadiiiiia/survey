function insertQ3()
{
    if ($('input[value="non"][name="Q3"]').prop("checked") == true) {
        href_next = base_url + 'index.php/home/page/' + survey + '/5'; //if q3 == non
        Q3 = 'non';
        $("#next_btn").attr("href", href_next);
    } else {
        Q3 = 'oui';
    }
    $.ajax({
        type: "post",
        url: base_url + "index.php/home/set_answers/",
        data: {"answer_body": Q3, "question_id": question_id, "user_id": user_id},
        dataType: "json"
    });

}
