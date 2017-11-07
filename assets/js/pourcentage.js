
function pourcentage(input, output) {
    $(input).on("keyup", function () {
        var percent = ((100 * parseFloat($(this).val())) / total).toFixed(2);
        percent = isNaN(percent) ? '0.00' : percent;
        $(output).val(percent);
    });
}

function refrech_pourcentage(id, output) {
    var input = parseFloat(localStorage.getItem(id));
    var percent = ((100 * parseFloat(input)) / total).toFixed(2);
    percent = isNaN(percent) ? '0.00' : percent;
    $(output).val(percent);
}
