function control_q10(somme) {

    for (i = 1; i < 13; i++)
    {
        var input = localStorage.getItem('q10-' + i + '-3');
       
        if (input == null || input == NaN || input == '') {
            input = 0;
        }
        //  alert(input);
        somme = parseFloat(somme) + parseFloat(input); // calculer la somme des valeurs
        // alert(somme);
    }
        if (somme > total && id == 10) {
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