function control_q6() {
    var min = localStorage.getItem('q6-1');
    var max = localStorage.getItem('q6-2');
    if (min == null || min == NaN || min == '') {
        min = 0;
    }
    if (max == null || max == NaN || max == '') {
        max = 0;
    }
    min = parseFloat(min);
    max = parseFloat(max);
    
    if (max < min) {
        $('#error_q6').empty();
        $('#error_q6').append("vérifiez que la valeur Max est supérieure à la valeur Min");
        $('#error_q6').show();
    } else {
        $('#error_q6').hide();
    }
}