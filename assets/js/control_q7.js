function control_q7() {
    var somme = 0;

    for (i = 1; i < 7; i++)
    {
        var input = localStorage.getItem('q7-' + i + '-1');
        if (input == null) {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

    if (somme > total && id == 7) {
        $('#error_q7').show();

//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q7').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
    }
}