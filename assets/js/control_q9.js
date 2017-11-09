function control_q9() {
    var somme = 0;

    for (i = 1; i < 8; i++)
    {
        var input = localStorage.getItem('q9-' + i + '-3');
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

    if (somme > total && id == 9) {
        $('#error_q9').empty();
        $('#error_q9').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q9').show();
//
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q9').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
    }

    return parseFloat(somme) ;
}