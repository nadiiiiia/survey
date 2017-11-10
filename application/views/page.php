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



            /// Règles générales des boutons suivant et précédent
            href_next = base_url + 'index.php/home/page/' + survey + '/' + id_next;
            $("#next_btn").attr("href", href_next);

            href_back = base_url + 'index.php/home/page/' + survey + '/' + id_back;
            $("#back_btn").attr("href", href_back);

            /// Règles spécifiques selon les id               
            if (id == 1)
            {
                $('#next_btn').click(function () {
                    if ($('input[type=radio]').prop("checked") == true && $('input[type=radio]').prop("id") == "q1-oui") {
                        href_next = base_url + 'index.php/home/page/' + survey + '/3'; //if q1 == oui
                        $("#next_btn").attr("href", href_next);
                    }
                    var Q1 = localStorage.getItem('Q1');
                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
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
                        url: "<?php echo base_url(); ?>index.php/home/set_answers/",
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

                        var Q3 = localStorage.getItem('Q3');
                        $.ajax({
                            type: "post",
                            url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                            data: {"answer_body": Q3, "question_id": question_id, "user_id": user_id},
                            dataType: "json"

                        });
                        $("#next_btn").attr("href", href_next);
                    }
                });
                href_back = base_url + 'index.php/home/page/' + survey + '/1';
                $("#back_btn").click(function () {
                    $(this).attr("href", href_back);
                });
            }
            if (id == 4) {
                href_next = base_url + 'index.php/home/page/' + survey + '/7';
                $("#next_btn").click(function () {
                    $(this).attr("href", href_next);
                });
            }
            if (id == 5) {

                href_back = base_url + 'index.php/home/page/' + survey + '/3';
                $("#back_btn").click(function () {
                    $(this).attr("href", href_back);
                });

                var Q5 = localStorage.getItem('Q5');
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>index.php/home/set_answers/",
                    data: {"answer_body": Q5, "question_id": question_id, "user_id": user_id},
                    dataType: "json"
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

            if (id == 13) {
                $('#next_btn').click(function () {

                    var q13 = parseFloat($('input[name="Q13-1"]').val());
                    q13 = isNaN(q13) ? '0.00' : q13;

                    if (q13 <= 0) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/15'; //if q8 == non
                        $("#next_btn").attr("href", href_next);
                    }
                });
            }

            if (id == 15) {
                $('#next_btn').click(function () {
                    if ($('#q15 option:selected').val() == 1) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/16';
                        $("#next_btn").attr("href", href_next);
                    } else if ($('#q15 option:selected').val() == 2) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/17';
                        $("#next_btn").attr("href", href_next);
                    } else {
                        href_next = base_url + 'index.php/home/page/' + survey + '/18';
                        $("#next_btn").attr("href", href_next);
                    }
                });
            }
            if (id == 16) {
                $('#next_btn').click(function () {
                    href_next = base_url + 'index.php/home/page/' + survey + '/18';
                    $("#next_btn").attr("href", href_next);
                });
            }
            if (id == 19) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q19"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/21';
                        $("#next_btn").attr("href", href_next);
                    }
                });
            }
            if (id == 25) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q25"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/27';
                        $("#next_btn").attr("href", href_next);
                    }
                });
            }
            if (id == 27) {
                $('#next_btn').click(function () {
                    if ($('input[value="non"][name="Q27"]').prop("checked") == true) {
                        href_next = base_url + 'index.php/home/page/' + survey + '/29';
                        $("#next_btn").attr("href", href_next);
                    }
                });
            }


            if (id == array_IDs.length)
            {

                $("#next_btn").html("Valider");
                $("#next_btn").click(function () {

                    $(this).attr("href", "#");

                });
            }

            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q5-non") {
                    href_next = base_url + 'index.php/home/page/' + survey + '/25';
                    $("#next_btn").click(function () {
                        $(this).attr("href", href_next);
                    });
                }
            });
            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q5-oui") {

                    $("#next_btn").click(function () {
                        $(this).attr("href", href_next);
                    });
                }
            });

            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q9-oui") {
                    $('#table-q9').show();
                }
            });
            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q9-non") {
                    $('#table-q9').hide();
                }
            });
            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q10-oui") {
                    $('#table-q10').show();
                }
            });
            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q10-non") {
                    $('#table-q10').hide();
                }
            });

            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q11-oui") {
                    $('#table-q11').show();
                }
            });
            $('input[type="radio"]').click(function () {
                if ($(this).prop("checked") == true && $(this).prop("id") == "q11-non") {
                    $('#table-q11').hide();
                }
            });


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
            $(document).ready(function () { //Traitement Q14


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
