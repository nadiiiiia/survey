<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
    </head>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
        var user_id = "<?php echo $id_user_connected; ?>";
        var id = <?php echo $id; ?>;
        var survey = <?php echo $survey; ?>;
        var id_next = id + 1;
        var id_back = id - 1;
        var question = <?php echo $question_json; ?>;
        var question_id = <?php echo $question_id; ?>;
        var question_number = <?php echo $question_number; ?>;
        var question_body = <?php echo $question_body; ?>;
        var question_note = <?php echo $question_note; ?>;
        var section_number = <?php echo $section_number; ?>;
        var section_name = <?php echo $section_name; ?>;
        var array_IDs = <?php echo $array_IDs_json; ?>;
        var total = parseFloat(localStorage.getItem('q4-1-1'));
        var total_unit = localStorage.getItem('q4-1-2');
        if (total_unit == null) {
            total_unit = 'Tonnes';
        }
        var total_q13 = parseFloat(localStorage.getItem('q13-1-1'));
        var total_q13_unit = localStorage.getItem('q13-1-2');
        if (total_q13_unit == null) {
            total_unit = 'Tonnes';
        }

    </script>
    <?php $action = 'home/load_question/' . $survey . '/' . $id; ?>
    <body>

        <!-- Navbar here-->
        <?php include('include/navbar.php'); ?>
        <br>
        <br>

        <!--  survey_body here-->
        <?php include('include/survey_body.php'); ?>



        <!-- Footer here-->
        <?php // include('include/footer.php'); ?>

        <div id="res"></div>
        <button id="btnShow2"></button>

        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pourcentage.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q7.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q9.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q10.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q11.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q14.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q38.js"></script>

        <script type="text/javascript">
        $(document).ready(function () {
            $('#table-q9').hide();
            $('#table-q10').hide();
            $('#table-q11').hide();
            $('#error_q7').hide();
            $('#error_q9').hide();
            $('#error_q10').hide();
            $('#error_q11').hide();
            $('#error_q14').hide();
            $('#error_q38').hide();
            $('.hidden').hide();
            $('.user').val(user_id);
            $('.question').val(question_id);




            /// Règles générales des boutons suivant et précédent
            href_next = base_url + 'index.php/home/page/' + survey + '/' + id_next;
            $("#next_btn").attr("href", href_next);

            href_back = base_url + 'index.php/home/page/' + survey + '/' + id_back;
            $("#back_btn").attr("href", href_back);

            /// Règles spécifiques selon les id               
            if (id == 1)
            {
                var Q1;
                $('#next_btn').click(function () {
                    if ($('input[type=radio]').prop("checked") == true && $('input[type=radio]').prop("id") == "q1-oui") {
                        href_next = base_url + 'index.php/home/page/' + survey + '/3'; //if q1 == oui
                        $("#next_btn").attr("href", href_next);
                        Q1 = 'oui';


                    } else {
                        Q1 = 'non'
                    }
                    // Q1 = localStorage.getItem('Q1');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q1, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });

                });
                $('#back_btn').hide();
            }

            if (id == 2) {
                $('#next_btn').click(function () {

                    var Q2 = localStorage.getItem('q2');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q2, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });

                    href_next = base_url + 'index.php/home/page/' + survey + '/25'; //if q3 == non
                    $("#next_btn").attr("href", href_next);

                });
            }

            if (id == 3) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q3"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/5'; //if q3 == non
                        Q3 = 'non';
                        $("#next_btn").attr("href", href_next);
                    } else {
                        Q3 = 'oui';
                    }
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q3, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });

                });
                href_back = base_url + 'index.php/home/page/' + survey + '/1';
                $("#back_btn").click(function () {
                    $(this).attr("href", href_back);
                });
            }
            if (id == 4) {

                href_next = base_url + 'index.php/home/page/' + survey + '/7';
                $("#next_btn").click(function () {
                    var Q4_1 = localStorage.getItem('q4-1-1');
                    var Q4_2 = localStorage.getItem('q4-2-1');
                    $(this).attr("href", href_next);
                    var Q4 = [Q4_1, Q4_2];
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers_array/",
                        data: {"answer_body": Q4, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });

                });
            }

            if (id == 5) {
                var Q5;
                href_back = base_url + 'index.php/home/page/' + survey + '/3';
                $("#back_btn").click(function () {
                    $(this).attr("href", href_back);
                });

                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q5"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/25'; //if q5 == non
                        Q5 = 'non';
                        $("#next_btn").attr("href", href_next);
                    } else {
                        Q5 = 'oui';
                    }
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                        data: {"answer_body": Q5, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });

                });

            }

            if (id == 6) {
                $('#next_btn').click(function () {
                    var min = localStorage.getItem('q6-1');
                    var max = localStorage.getItem('q6-2');
                    var Q6 = [min, max];
                    if ($('input[value="non"][name="Q8"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/13'; //if q6 == non
                        $("#next_btn").attr("href", href_next);
                    }

                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers_array/",
                        data: {"answer_body": Q6, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }


            if (id == 8) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q8"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/13'; //if q8 == non
                        $("#next_btn").attr("href", href_next);
                    }

                    var Q8 = localStorage.getItem('Q8');
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                        data: {"answer_body": Q8, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }

            if (id == 9) {
                var Q9;
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q9-oui") {
                        $('#table-q9').show();
                        Q9 = 'oui';
                    }
                });
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q9-non") {
                        $('#table-q9').hide();
                        Q9 = 'non';
                    }
                });
                $('#next_btn').click(function () {
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                        data: {"answer_body": Q9, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }

            if (id == 10) {
                var Q10;
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q10-oui") {
                        $('#table-q10').show();
                        Q10 = 'oui';
                    }
                });
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q10-non") {
                        $('#table-q10').hide();
                        Q10 = 'non';
                    }
                });
                $('#next_btn').click(function () {
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                        data: {"answer_body": Q10, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }

            if (id == 11) {
                var Q11;
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q11-oui") {
                        $('#table-q11').show();
                        Q11 = 'oui';
                    }
                });
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q11-non") {
                        $('#table-q11').hide();
                        Q11 = 'non';
                    }
                });
                $('#next_btn').click(function () {
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                        data: {"answer_body": Q11, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 12) {
                $('#next_btn').click(function () {
                    var Q12 = localStorage.getItem('q12');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q12, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }

            if (id == 13) {
                $('#next_btn').click(function () {

                    var q13 = parseFloat($('input[name="Q13-1"]').val());
                    q13 = isNaN(q13) ? '0.00' : q13;

                    if (q13 <= 0) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/15'; //if q8 == non
                        $("#next_btn").attr("href", href_next);
                    }
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": q13, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });

                });
            }
            if (id == 14) {

                function getTableQ14Data() {
                    var array = [];
                    //$("#btnShow2").on("click", function () {
                    $("tr:nth-child(n+1)").each(function () {
                        rowData = $(this).find('input').serializeArray();
                        var rowAr = {};
                        $.each(rowData, function (e, v) {
                            rowAr[v['name']] = v['value'];
                        });
                        array.push(rowAr);
                    });
//                        console.log(array);
//                    });
                    return array;
                }
                $('#next_btn').click(function () {
                    //href_next = "#";
                    $("#next_btn").attr("href", href_next);
                    var Q14 = getTableQ14Data();
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers_q14/",
                        data: {"answer_body": Q14},
                        dataType: "json",
//                        success: function (result) {
//                            console.log(result);
//                        }
                    });

                });
            }

            if (id == 15) {
                $('#next_btn').click(function () {
                    if ($('#q15 option:selected').val() == 'dechet_par_dechet') {
                        href_next = base_url + 'index.php/home/page/' + survey + '/16';
                        $("#next_btn").attr("href", href_next);
                    } else if ($('#q15 option:selected').val() == 'avec_regroupements') {
                        href_next = base_url + 'index.php/home/page/' + survey + '/17';
                        $("#next_btn").attr("href", href_next);
                    } else {
                        href_next = base_url + 'index.php/home/page/' + survey + '/18';
                        $("#next_btn").attr("href", href_next);
                    }

                    var Q15 = $('#q15 option:selected').val();
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q15, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });

                });
            }
            if (id == 16) {
                $('#next_btn').click(function () {
                    href_next = base_url + 'index.php/home/page/' + survey + '/18';
                    $("#next_btn").attr("href", href_next);
                    var Q16 = localStorage.getItem('q16');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q16, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 17) {
                $('#next_btn').click(function () {
                    var Q17 = localStorage.getItem('q17');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q17, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }

            if (id == 19) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q19"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/21';
                        $("#next_btn").attr("href", href_next);
                    }
                    var Q19 = localStorage.getItem('Q19');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q19, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }

            if (id == 20) {
                $('#next_btn').click(function () {

                    var Q20 = localStorage.getItem('q20');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q20, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 21) {
                $('#next_btn').click(function () {

                    var Q21 = localStorage.getItem('q21');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q21, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 22) {
                $('#next_btn').click(function () {

                    var Q22 = localStorage.getItem('q22');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q22, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 23) {
                $('#next_btn').click(function () {

                    var Q23 = localStorage.getItem('q23');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q23, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 24) {
                $('#next_btn').click(function () {

                    var Q24 = localStorage.getItem('q24');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q24, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 25) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q25"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/27';
                        $("#next_btn").attr("href", href_next);
                    }
                    var Q25 = localStorage.getItem('Q25');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q25, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 26) {
                $('#next_btn').click(function () {

                    var Q26 = localStorage.getItem('Q26');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q26, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 27) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q27"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/29';
                        $("#next_btn").attr("href", href_next);
                    }
                    var Q27 = localStorage.getItem('Q27');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q27, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 28) {
                $('#next_btn').click(function () {

                    var Q28 = localStorage.getItem('Q28');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q28, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 29) {
                $('#next_btn').click(function () {

                    var Q29 = localStorage.getItem('q29');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q29, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 30) {

                $('#next_btn').click(function () {
                    var en_Km = localStorage.getItem('q30-1');
                    var en_min = localStorage.getItem('q30-2');
                    var Q30 = [en_Km, en_min];
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers_array/",
                        data: {"answer_body": Q30, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 31) {

                $('#next_btn').click(function () {
                    var Q31_1 = localStorage.getItem('q31-1');
                    var Q31_2 = localStorage.getItem('q31-2');
                    var Q31 = [Q31_1, Q31_2];
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers_array/",
                        data: {"answer_body": Q31, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 32) {
                $('#next_btn').click(function () {

                    var Q32 = localStorage.getItem('q32');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q32, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 33) {
                $('#next_btn').click(function () {

                    var Q33 = localStorage.getItem('q33');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q33, "question_id": question_id, "user_id": user_id},
                        dataType: "json",
//                    success: function (result) {
//                        console.log(result);
//                    }
                    });
                });
            }
            if (id == 34) {

                $('#next_btn').click(function () {
                    var Q34_1 = localStorage.getItem('q34-1');
                    var Q34_2 = localStorage.getItem('q34-2');
                    var Q34_3 = localStorage.getItem('q34-3');
                    var Q34 = [Q34_1, Q34_2, Q34_3];
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers_array/",
                        data: {"answer_body": Q34, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
//            var Q = [];
//            for (i = 35; i < 38; i++) {
//               
//                if (id == i) {
//
//                    $('#next_btn').click(function () {
//
//                        Q[i] = localStorage.getItem('q'+i);
//                        $.ajax({
//                            type: "post",
//                            url: base_url + "index.php/home/set_answers/",
//                            data: {"answer_body": Q[i], "question_id": question_id, "user_id": user_id},
//                            dataType: "json"
//                        });
//                    });
//                }
//            }

            if (id == 35) {

                $('#next_btn').click(function () {

                    Q35 = localStorage.getItem('q35');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q35, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 36) {

                $('#next_btn').click(function () {

                    Q36 = localStorage.getItem('q36');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q36, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 37) {

                $('#next_btn').click(function () {

                    Q37 = localStorage.getItem('q37');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q37, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == 39) {

                $('#next_btn').click(function () {

                    Q39 = localStorage.getItem('q39');
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers/",
                        data: {"answer_body": Q39, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }

            if (id == 38) {

                $('#next_btn').click(function () {
                    var Q38_1 = localStorage.getItem('q38-1');
                    var Q38_2 = localStorage.getItem('q38-2');
                    var Q38_3 = localStorage.getItem('q38-3');
                    var Q38_4 = localStorage.getItem('q38-4');
                    var Q38_5 = localStorage.getItem('q38-5');
                    var Q38_6 = localStorage.getItem('q38-6');
                    var Q38 = [Q38_1, Q38_2, Q38_3, Q38_4, Q38_5, Q38_6];
                    $.ajax({
                        type: "post",
                        url: base_url + "index.php/home/set_answers_array/",
                        data: {"answer_body": Q38, "question_id": question_id, "user_id": user_id},
                        dataType: "json"
                    });
                });
            }
            if (id == array_IDs.length)
            {

                $("#next_btn").html("Valider");
                $("#next_btn").click(function () {
                    href_next = base_url + "index.php/home/fin/"
                    $(this).attr("href", href_next);

                });
            }

            if (section_name == null) {
                section_name = "";
            }
            if (question_note == null) {
                question_note = "";
            }

            var question_b = $("<p class='inline'><strong> Q" + question_number + " - " + question_body + "</strong></p>");
            var question_count = $("<p class='inline'><strong> &nbsp;&nbsp; (" + question_number + " / " + array_IDs.length + ")</strong></p>");
            $(".badge").append(section_number).after(" " + section_name);
            $("#question_body").append(question_b).after(" ").append(question_count);

            $("#note").append(" " + question_note); //pour afficher les notes du question

        });
        </script>

        <script>
            $(document).ready(function () {  // LocalStorage

                $('input').addClass("useLocal useLocalInput");
                $('input[type="checkbox"]').addClass("useLocal useLocalInput");
                $('select').addClass("useLocal useLocalSelect");

                ///////// Setters///////
                window.setInterval(function () {
                    $('.useLocalSelect').change(function () {
                        var key = $(this).attr('id');
                        var value = $(this).val();
                        localStorage.setItem(key, value)
                    });
                }, 500);

                window.setInterval(function () {
                    $('.useLocalInput').keyup(function () {
                        var key = $(this).attr('id');
                        var value = $(this).val();
                        localStorage.setItem(key, value)
                    });
                }, 500);

                /*fonction pour enregistrer les valeurs des radio en cliquant sur suivant*/

                window.setInterval(function () {
                    $('input[type="radio"]:checked').each(function () {
                        var name = $(this).attr('name');
                        var value = $(this).val();
                        localStorage.setItem(name, value);
                    });
                }, 500);

                var checkboxes = document.querySelectorAll('input[type=checkbox]');
                window.setInterval(function () {
                    for (i = 0; i < checkboxes.length; i++) {
                        localStorage.setItem(checkboxes[i].value, checkboxes[i].checked);
                    }
                }, 500);


                ////////Getters////////
                $('.useLocal').each(function () {
                    var key = $(this).attr('id');
                    if (localStorage.getItem(key)) {
                        $(this).val(localStorage.getItem(key));
                    }
                });

                $('input[type="radio"]').each(function () {
                    var name = $(this).attr('name');
                    var value = localStorage.getItem(name);
                    $('input[value="' + value + '"][name="' + name + '"]').prop('checked', true);
                });


                for (i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = localStorage.getItem(checkboxes[i].value) === "true" ? true : false;
                }
//                $('.clearLocalSelect').click(function () {
//                    $('.useLocalSelect').each(function () {
//                        $(this).val('');
//                        var key = $(this).attr('id');
//                        localStorage.removeItem(key);
//                    });
//                });
            });
        </script>
        <script>
            $(document).ready(function () {
                if ($('input[value="oui"][name="Q9"]').prop("checked") == true) {
                    $('#table-q9').show();
                }
                if ($('input[value="oui"][name="Q10"]').prop("checked") == true) {
                    $('#table-q10').show();
                }
                if ($('input[value="oui"][name="Q11"]').prop("checked") == true) {
                    $('#table-q11').show();
                }

                //                      $('#q_form').keypress(function(ev)
                //    if (ev.which === 13)
                //        $('#next_btn').click();
                //});
            });
        </script>
        <script>
            $(document).ready(function () {
                window.setInterval(function () {
                    control_q7();
                }, 50);

                // calculer la valeur du %
                for (i = 1; i < 7; i++)
                {
                    pourcentage('input#q7-' + i + '-1', '#q7-' + i + '-3');
                }

                // mise à jour de la valeur du %
                if (id == 7) {
                    for (i = 1; i < 7; i++)
                    {
                        refrech_pourcentage('q7-' + i + '-1', '#q7-' + i + '-3');
                    }
                    function getTableQ7Data() {
                        var array = [];
                        //$("#btnShow2").on("click", function () {
                        $("tr:nth-child(n+1)").each(function () {
                            rowData = $(this).find('input, select').serializeArray();
                            var rowAr = {};
                            $.each(rowData, function (e, v) {
                                rowAr[v['name']] = v['value'];
                            });
                            array.push(rowAr);
                        });
//                        console.log(array);
//                    });
                        return array;
                    }
//alert(array[3].unit);

                    $("#next_btn").click(function () {
                        var Q7 = getTableQ7Data();
                        $.ajax({
                            type: "post",
                            url: "<?php echo base_url(); ?>index.php/home/set_answers_q7/",
                            data: {"answer_body": Q7},
                            dataType: "json",
//                         success: function (result) {
//                             console.log(result); 
//                        }
                        });

                    });
                }

            });
        </script>

        <script>
            $(document).ready(function () { //Traitement Q9 - Q10 - Q11
                if (id == 9) {
                    window.setInterval(function () {
                        control_q9();
                    }, 500);

                } else if (id == 10) {
                    window.setInterval(function () {
                        control_q10(control_q9());
                    }, 500);
                } else if (id == 11) {
                    window.setInterval(function () {
                        control_q11(control_q10(control_q9()));
                    }, 500);
                }
            });
        </script>

        <script>
            $(document).ready(function () { //Traitement Q14

                if (id == 14) {
                    window.setInterval(function () {
                        control_q14();
                    }, 500);
                }

                if (id == 38) {
                    window.setInterval(function () {
                        control_q38();
                    }, 500);
                }
            });
        </script>
        <script>
            $(document).ready(function () { //Traitement Q14
                var values_q14 = [];
                var somme_q14 = 0;
                var values = [];
                var somme_q14 = 0;
                values_q14[1] = parseFloat($('input[name="Q14-1-2"]').val());
                values_q14[2] = parseFloat($('input[name="Q14-2-2"]').val());
                values_q14[3] = parseFloat($('input[name="Q14-3-2"]').val());
                values_q14[4] = parseFloat($('input[name="Q14-4-2"]').val());
                values_q14[5] = parseFloat($('input[name="Q14-5-2"]').val());

                for (i = 0; i < 5; i++) {
                    values_q14[i + 1] = isNaN(values_q14[i + 1]) ? '0.00' : values_q14[i + 1]; // pour ne pas afficher NAN
                    somme_q14 = parseFloat(somme_q14) + parseFloat(values_q14[i + 1]);
                }

                if (id == 14) {
                    $('#next_btn').click(function () {
                        if (somme_q14 > total) {
                            alert("Le montant total dépasse le Total déchets de votre réponse dans Q4");

                        }
                    });
                }
            });
        </script>

        <script>
            $(document).ready(function () {
//                $('input').click(function (e) {
//                    if (e.keyCode == 13) {
//                        e.preventDefault();
//                        $('#next_btn').click();
//                    }
//
//                });
//var next = $('#next_btn')[0];
//$(window).keydown(function (e) {
//    if ( e.which === 13 ) {
//        window.location.href = next.href;        
//    }
//});
            });
        </script>

        <script>
            function maxLengthCheck(object) {
                if (object.value.length > object.maxLength)
                    object.value = object.value.slice(0, object.maxLength)
            }

            function isNumeric(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault)
                        theEvent.preventDefault();
                }
            }
        </script>
    </body>

</html>
