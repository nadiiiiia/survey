function control_q38() {
    var somme = 0;
   
    for (i = 1; i < 7; i++)
    {
        var input = localStorage.getItem('q38-' + i );
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
   //     alert(localStorage.getItem('q38-1'));
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        //alert(somme);
    }
    if (somme > 100) {
       $('#error_q38').show();
            //  $('#error_q14').empty();
       // $('#error_q38').append("Le montant total dépasse 100%");
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", "#");
//        });
    } else {
        $('#error_q38').hide();
//        $('#next_btn').click(function () {
//            $("#next_btn").attr("href", href_next);
//        });
   }
    return parseFloat(somme);
}
