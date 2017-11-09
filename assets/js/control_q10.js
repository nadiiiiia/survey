function control_q10(somme) {

    for (i = 1; i < 13; i++)
    {
        var input = localStorage.getItem('q10-' + i + '-3');
       
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        
    }
        if (somme > total && id == 10) {
        $('#error_q10').empty();
        $('#error_q10').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q10').show();

//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q10').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
    }

        return parseFloat(somme);
}