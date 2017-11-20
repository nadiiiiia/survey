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
        var question_to_go;
        var back_page = <?php echo $back_page; ?>;
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
        <button id="btnShow"></button>


        <!-- Footer here-->
        <?php // include('include/footer.php'); ?>



        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pourcentage.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q7.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q6.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q9.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q10.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q11.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q14.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/control_q38.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/insertAnswer.js"></script>

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
            $('#back').val(question_number);


            function getBackPage(id) {
                $.each(back_page, function (key, val) {

                    if (val.question_nbr == id) {
                        id_back = val.back_nbr;
                    }

                });
                return id_back;
            }


            /// Règles générales des boutons suivant et précédent
            href_next = base_url + 'index.php/home/page/' + survey + '/' + id_next;
            $("#next_btn").attr("href", href_next);

            href_back = base_url + 'index.php/home/page/' + survey + '/' + id_back;
            $("#back_btn").attr("href", href_back);


//                   var functionsArray = [];
//            for (i = 1; i < 39; i++) {
//                functionsArray[i] = 'insertQ' + i;
//            }
//
//
//            for (i = 1; i < 3; i++)
//            {
//                if (id == 2) {
//                    $(window).keydown(function (e) {
//                        if (e.which === 13) {
//                            functionsArray[i]; 
//                            window.location.href = href_next;
//                        }
//                    });
//                    $('#next_btn').click(function () {
//                        functionsArray[i];
//                    });
//                }
//            }

            /// Règles spécifiques selon les id               
            if (id == 1)
            {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ1();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ1(); //voir le dossier assets/js
                });

                $('#back_btn').hide();
            }

            if (id == 2) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ2();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });

                $('#next_btn').click(function () {
                    insertQ2();
                });
            }

            if (id == 3) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ3();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ3();
                });
                href_back = base_url + 'index.php/home/page/' + survey + '/1';
                $("#back_btn").click(function () {
                    $(this).attr("href", href_back);
                });
            }
            if (id == 4) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ4();  // voir le dossier assets/js
                        href_next = base_url + 'index.php/home/page/' + survey + '/7';
                        window.location.href = href_next;
                    }
                });
                $("#next_btn").click(function () {
                    insertQ4();
                    href_next = base_url + 'index.php/home/page/' + survey + '/7';
                    $(this).attr("href", href_next);
                });
            }

            if (id == 5) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ5();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ5();
                });
                $("#back_btn").click(function () {
                    href_back = base_url + 'index.php/home/page/' + survey + '/3';
                    $(this).attr("href", href_back);
                });
            }

            if (id == 6) {

                window.setInterval(function () {
                    control_q6();
                }, 50);

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ6();  // voir le fichier assets/js/insertAnswer.js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ6();
                });
            }


            if (id == 8) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ8();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ8();
                });
            }

            if (id == 9) {

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

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ9();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ9();
                });
            }

            if (id == 10) {

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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ10();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ10();
                });
            }

            if (id == 11) {

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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ11();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ11();
                });
            }
            if (id == 12) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ12();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ12();
                });
            }

            if (id == 13) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ13();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ13();
                });
            }
            if (id == 14) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ14();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ14();
                });
            }

            if (id == 15) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
//alert(back_page[1].back_nbr);
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ15();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ15();
                });
                
            }
            if (id == 16) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ16();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ16();
                });
            }
            if (id == 17) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ17();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ17();
                });
                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/page/' + survey + '/15';
                    $("#back_btn").attr("href", href_back);
                });
            }
            if (id == 18) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });

                var favorites = JSON.parse(localStorage.getItem('favorites'));
                if (favorites && !favorites.length) {
                    return
                }
                ;
                console.debug(favorites);

                for (var i = 0; i < favorites.length; i++) {
                    console.debug(favorites[i].value == 'on');
                    $('#' + favorites[i].id).prop('checked', favorites[i].value);
                }

                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    $("#next_btn").attr("href", href_next);
                });
//                var array = [];
//                $("#btnShow2").on("click", function () {
//                    $("tr:nth-child(n+1)").each(function () {
//                        rowData = $(this).find('input').serializeArray();
//                        var rowAr = {};
//                        $.each(rowData, function (e, v) {
//                            rowAr[v['name']] = v['value'];
//                        });
//                        array.push(rowAr);
//                    });
//                    console.log(array);
//                });
//
//                $('#next_btn').click(function () {
//                    var Q17 = localStorage.getItem('q17');
//                    $.ajax({
//                        type: "post",
//                        url: base_url + "index.php/home/set_answers/",
//                        data: {"answer_body": Q17, "question_id": question_id, "user_id": user_id},
//                        dataType: "json",
////                    success: function (result) {
////                        console.log(result);
////                    }
//                    });
//                });
            }


            if (id == 19) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ19();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ19();
                });
            }

            if (id == 20) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ20();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ20();
                });
            }
            if (id == 21) {
                $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ21();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ21();
                });
            }
            if (id == 22) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ22();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ22();
                });
            }
            if (id == 23) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ23();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ23();
                });
            }
            if (id == 24) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ24();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ24();
                });
            }
            if (id == 25) {

                $('#back_btn').click(function () {
                    href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                    $("#back_btn").attr("href", href_back);
                });


                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ25();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ25;
                });


            }
            if (id == 26) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ26();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ26();
                });
            }
            if (id == 27) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ27();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ27();
                });
            }
            if (id == 28) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ28();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ28();
                });
            }
            if (id == 29) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ29();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ29();
                });
            }
            if (id == 30) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ30();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ30();
                });
            }
            if (id == 31) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ31();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });

                $('#next_btn').click(function () {
                    insertQ31();
                });
            }
            if (id == 32) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ32();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ32();
                });
            }
            if (id == 33) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ33();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ33();
                });
            }
            if (id == 34) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ34();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ34();
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
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ35();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });

                $('#next_btn').click(function () {
                    insertQ35();
                });
            }
            if (id == 36) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ36();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $('#next_btn').click(function () {
                    insertQ36();
                });
            }
            if (id == 37) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ37();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });

                $('#next_btn').click(function () {
                    insertQ37()
                });
            }

            if (id == 38) {
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ38();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });

                $('#next_btn').click(function () {
                    insertQ38();
                });
            }

            if (id == array_IDs.length) //id=39
            {
                $("#next_btn").html("Valider");
                $(window).keydown(function (e) {
                    if (e.which === 13) {
                        insertQ39();  // voir le dossier assets/js
                        window.location.href = href_next;
                    }
                });
                $("#next_btn").click(function () {
                    insertQ39();
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
                $('input[type="checkbox"]').addClass("Q_18");
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

                $('.Q_18').on('click', function () {
                    var fav, favs = [];
                    $('.Q_18').each(function () { // run through each of the checkboxes
                        fav = {id: $(this).attr('id'), value: $(this).prop('checked')};
                        favs.push(fav);
                    });
                    localStorage.setItem("favorites", JSON.stringify(favs));
                });

//                var checkboxes = document.querySelectorAll('input[type=checkbox]');
//                window.setInterval(function () {
//                    for (i = 0; i < checkboxes.length; i++) {
//                        localStorage.setItem(checkboxes[i].value, checkboxes[i].checked);
//                    }
//                }, 500);


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


//                for (i = 0; i < checkboxes.length; i++) {
//                    checkboxes[i].checked = localStorage.getItem(checkboxes[i].value) === "true" ? true : false;
//                }
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

//alert(array[3].unit);
                    $('#back_btn').click(function () {
                        href_back = base_url + 'index.php/home/page/' + survey + '/' + getBackPage(id);
                        $("#back_btn").attr("href", href_back);
                    });
                    
                    $(window).keydown(function (e) {
                        if (e.which === 13) {
                            insertQ7();  // voir le dossier assets/js
                            window.location.href = href_next;
                        }
                    });
                    $("#next_btn").click(function () {
                        insertQ7();
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

//                var next = $('#next_btn')[0];
//                $(window).keydown(function (e) {
//                    if (e.which === 13) {
//                        if ($('input[type=radio]').prop("checked") == true && $('input[type=radio]').prop("id") == "q1-oui") {
//                            href_next = base_url + 'index.php/home/page/' + survey + '/3'; 
//                        }
//                        window.location.href = href_next;
//                        //$('#next_btn').click();
//                    }
//                });

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
