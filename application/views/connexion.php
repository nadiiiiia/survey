<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
        <link href="<?php echo base_url(); ?>assets/css/compiled.min.css" rel="stylesheet">
    <body>

        <div class="container">
            <div class="row" style="margin-top: 80px;">
                <div class="col-md-3"></div>
                <div class="col-md-6 mb-r pb-5">

                    <div class="card">
                        <div class="card-body z-depth-4">

                            <!--Header-->
                            <div class="form-header cyan-darken-4-color">
                                <h3>
                                    <i class="fa fa-lock"></i> Connexion</h3>
                            </div>

                            <!--Body-->
                            <?php echo form_open('verifyLogin');  //controllers/verifyLogin.php ?>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" name="email" required="required" id="email" class="form-control">
                                <label for="email">E-mail</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-lock prefix grey-text"></i>
                                <input type="password" name="password" required="required" id="password" class="form-control">
                                <label for="password">Mot de passe</label>
                            </div>
                            <div class=" alert-danger"><?php echo validation_errors(); ?></div>
                            <div class="text-center">
                                <input type="submit" class="btn cyan-darken-3-color waves-effect waves-light" value="Connexion">
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                        <!--Footer
                        <div class="modal-footer">
                            <div class="options">
                                <p>Not a member?
                                    <a href="#">Sign Up</a>
                                </p>
                                <p>Forgot
                                    <a href="#">Password?</a>
                                </p>
                            </div>
                        </div>-->
                    </div>

                </div>

                <div class="col-md-3"></div>
            </div>

        </div>

        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
        <script type="text/javascript">
            $(document).ready(function () {
                var href_back = base_url + 'index.php/home/4';
                var href_next = base_url + 'index.php/home/' + id_next;

                $("#q2").hide();
                $("#q6").hide();
                $("#table-q11").hide();
                $("#table-q10").hide();
                $("#table-q9").hide();
                $("#q16").hide();
                $("#q17").hide();
                $("#q20").hide();

                if (id == 2) {
                    $("#back_btn").hide();
                }
                if (id == 4) {
                    href_next = base_url + 'index.php/home/6';
                    $("#next_btn").click(function () {
                        $(this).attr("href", href_next);
                    });
                }
                if (id == 5) {
                    href_back = base_url + 'index.php/home/3';
                    $("#back_btn").click(function () {
                        $(this).attr("href", href_back);
                    });
                }

                if (id == 17) {
                    $("#next_btn").html("Terminer");
                    $("#next_btn").click(function () {
                        $(this).attr("href", '#');
                    });
                }


                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q8-non") {
                        href_next = base_url + 'index.php/home/11';
                        $("#next_btn").click(function () {
                            $(this).attr("href", href_next);
                        });
                    }
                });

                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && id === 13) {

                        href_next = base_url + 'index.php/home/14';
                        $("#next_btn").click(function () {
                            if ($("#q13-val").val() == 0)
                                $(this).attr("href", href_next);
                        });
                    }
                });





                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q1-non") {
                        $("#q2").show();
                        //  $('#chartType').attr('required', 'required');

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q1-oui") {
                        $("#q2").hide();
                    }
                });
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q3-oui") {

                        //  $('#chartType').attr('required', 'required');

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q3-non") {
                        href_next = base_url + 'index.php/home/5';
                        $("#next_btn").click(function () {
                            $(this).attr("href", href_next);
                        });
                    }
                });


                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q5-oui") {
                        $("#q6").show();
                        //  $('#chartType').attr('required', 'required');

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q5-non") {
                        $("#q6").hide();
                        href_next = base_url + 'index.php/home/6';
                        href_back = base_url + 'index.php/home/3';
                        $("#next_btn").click(function () {
                            $(this).attr("href", href_next);
                        });

                    }
                });

                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q9-oui") {
                        $("#table-q9").show();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q9-non") {
                        $("#table-q9").hide();
                    }
                });

                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q10-oui") {
                        $("#table-q10").show();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q10-non") {
                        $("#table-q10").hide();
                    }
                });

                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q11-oui") {
                        $("#table-q11").show();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q11-non") {
                        $("#table-q11").hide();
                    }
                });

                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q15-oui-1") {
                        $("#q16").show();
                        $("#q17").hide();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q15-oui-2") {
                        $("#q17").show();
                        $("#q16").hide();
                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q15-non") {
                        $("#q16").hide();
                        $("#q17").hide();
                    }
                });
                $('input[type="radio"]').click(function () {
                    if ($(this).prop("checked") == true && $(this).prop("id") == "q19-oui") {
                        $("#q20").show();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q19-en-projet") {
                        $("#q20").show();

                    } else if ($(this).prop("checked") == true && $(this).prop("id") == "q19-non") {
                        $("#q20").hide();
                    }
                });

            });
        </script>

    </body>

</html>
