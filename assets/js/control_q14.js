function control_q14() {
    var somme = 0;

    for (i = 1; i < 6; i++)
    {
        var input = localStorage.getItem('q14-' + i + '-2');
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }

    if (somme > total_q13) {
       $('#error_q14').show();
            //  $('#error_q14').empty();

       // $('#error_q14').append("Le montant total des quantités dépasse le Total déchets de votre réponse dans Q13 (" + total_q13 + " " + total_q13_unit + ")");
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q14').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
   }
    return parseFloat(somme);
}