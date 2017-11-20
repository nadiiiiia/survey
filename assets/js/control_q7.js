function control_q7() {
    var somme = 0;

    for (i = 1; i < 7; i++)
    {
        var input = localStorage.getItem('q7-' + i + '-1');
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
    }

  if (somme > total && id == 7) {
        $('#error_q7').empty();
        $('#error_q7').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q7').show();


    } else if (somme < total && id == 7) {
        $('#error_q7').empty();
        $('#error_q7').append("Le montant total des quantités est inférieur au Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q7').show();

    } else {
        $('#error_q7').hide();
    }
}