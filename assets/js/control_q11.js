function control_q11(somme) {

    for (i = 1; i < 10; i++)
    {
        var input = localStorage.getItem('q11-' + i + '-3');
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }

    if (somme > total && id == 11) {
        $('#error_q11').empty();
        $('#error_q11').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q11').show();


    } else if (somme < total && id == 11) {
        $('#error_q11').empty();
        $('#error_q11').append("Le montant total des quantités est inférieur au Total déchets de votre réponse dans Q4 (" + total + " " + total_unit + ")");
        $('#error_q11').show();

    } else {
        $('#error_q11').hide();
    }
    return parseFloat(somme);
}
