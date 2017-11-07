<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

    <head>
        <?php include('include/head.php'); ?>
    </head>
    <script type="text/javascript">
        var base_url = "<?php echo base_url(); ?>";
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

        <!-- SCRIPTS here -->
        <?php include('include/scripts.php'); ?>
        <script type="text/javascript">
            $(document).ready(function () {
 
                var answer_body = [];

                answer_body[1] = " <fieldset class='form-group'><input class='q1' id='q1-oui' name='Q1' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q1-non' class='q1' name='Q1' type='radio' value='non'><label for='non'>Non</label> </fieldset>";

                answer_body[2] = "<div class='md-form'><input type='text' id='q2' class='form-control'value=''></div>";

                answer_body[3] = " <fieldset class='form-group'><input id='q3-oui' name='Q3' type='radio'value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q3-non' name='Q3' type='radio' value='non'><label for='non'>Non</label> </fieldset>";

                answer_body[4] = "<div class='col-lg-8 col-md-8 mb-r'>" +
                        "-la quantité totale de déchets générés sur vos chantiers en 2015 ?<input type='text' id='q4-1'>(précisez l’unité : kg, tonnes, m3)<br><br>" +
                        "-la quantité moyenne de déchets générés sur un chantier ?<input type='text'id='q4-2'>(précisez l’unité : kg, tonnes, m3) </div>"

                answer_body[5] = " <fieldset class='form-group'><input id='q5-oui' name='Q5' type='radio'value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q5-non' name='Q5' type='radio' value='non'><label for='non'>Non</label> </fieldset>";
		answer_body[7] ="	<div class='col-lg-12 col-md-12 mb-r'>"+
"L’enquêté répond en quantité si possible,  en % si non."+
                  " <!--Table-->"+
"<table class='table'>"+
"    <!--Table head-->"+
   " <thead class='blue-grey lighten-4'>"+
       " <tr>"+
            "<th>Activité</th>"+
            "<th>Quantité</th>"+
           " <th>Unité</th>"+
            "<th>%</th>"+
        "</tr>"+
    "</thead>"+
    "<!--Table head-->"+

    "<!--Table body-->"+
    "<tbody>"+
       "<tr>"+
           " <th scope='row'>Démolition - technicité courante</th>"+
            "<td><input type='text' id='q7-1-1'></td>"+
            "<select id='q7-1-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select>"+
            "<td><input type='text' id='q7-1-3'></td>"+
        "</tr>"+
          "<tr>"+
            "<th scope='row'>Démolition à l'explosif</th>"+
            "<td><input type='text' id='q7-2-1'></td>"+
            "<td><td><select id='q7-2-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>"+
            "<td><input type='text' id='q7-2-3'></td>"+
        "</tr>"+
        "<tr>"+
           " <th scope='row'>Découpe du béton*"+ 
"</th>"+
            "<td><input type='text' id='q7-3-1'></td>"+
            "<td><select id='q7-3-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>"+
            "<td><input type='text' id='q7-3-3'></td>"+
        "</tr>"+
		"<tr>"+
            "<th scope='row'>Désamiantage</th>"+
            "<td><input type='text' id='q7-4-1'></td>"+
            "<td><select id='q7-3-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>"+
            "<td><input type='text' id='q7-4-3'></td>"+
        "</tr>"+
		"<tr>"+
            "<th scope='row'>Autres travaux de démolition"+
"</th>"+
            "<td><input type='text' id='q7-5-1'></td>"+
            "<td><select id='q7-5-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>"+
            "<td><input type='text'id='q7-5-3'></td>"+
        "</tr>"+
		"<tr>"+
           " <th scope='row'>Autres activité (hors démolition)</th>"+
            "<td><input type='text' id='q7-6-1'></td>"+
            "<td><select id='q7-6-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>"+
            "<td><input type='text' id='q7-6-3'></td>"+
        "</tr>"+
      
   " </tbody>"+
    "<!--Table body-->"+
"</table>"+
"<!--Table-->"+
          " <small> * par carottage ou sciage</small>" +    
					
     
                "</div>";
        answer_body[6] = "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q6-1' placeholder='Min'> </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q6-2' placeholder='Max'></div></div>";
                
         answer_body[8] = " <fieldset class='form-group'><input id='q8-oui' name='Q8' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q8-non' name='Q8' type='radio' value='non'><label for='non'>Non</label> </fieldset>";

         answer_body[9] = " <fieldset class='form-group'><input id='q9-oui' name='Q9' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q9-non' name='Q9' type='radio' value='non'><label for='non'>Non</label> </fieldset>";
          answer_body[10] = " <fieldset class='form-group'><input id='q10-oui' name='Q10' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q10-non' name='Q10' type='radio' value='non'><label for='non'>Non</label> </fieldset>";

answer_body[11] = " <fieldset class='form-group'><input id='q11-oui' name='Q11' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldset class='form-group'><input id='q11-non' name='Q11' type='radio' value='non'><label for='non'>Non</label> </fieldset>";
answer_body[12] = "<div class='md-form'><input type='text' id='q12' class='form-control'></div>";
answer_body[13] = "<div class='col-lg-4 col-md-4 mb-r'>" +
                        "<input type='text' id='q13'></div>";
                
                answer_body[14] = "<div class='row'> <div class='col-lg-3 col-md-3 mb-r'sy>Département / Pays 1</div>" +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-1-1' placeholder='Nom'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-1-2' placeholder='Quantité (tonnes ou %)'></div></div>"+
                        "<div class='row'> <div class='col-lg-3 col-md-3 mb-r'>Département / Pays 2</div>" +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-2-1' placeholder='Nom'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-2-2' placeholder='Quantité (tonnes ou %)'></div></div>"+
                        "<div class='row'> <div class='col-lg-3 col-md-3 mb-r'>Département / Pays 3</div>" +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-3-1' placeholder='Nom'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-3-2' placeholder='Quantité (tonnes ou %)'></div></div>"+
                        "<div class='row'> <div class='col-lg-3 col-md-3 mb-r'>Département / Pays 4</div>" +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-4-1' placeholder='Nom'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-4-2' placeholder='Quantité (tonnes ou %)'></div></div>"+
                        "<div class='row'> <div class='col-lg-3 col-md-3 mb-r'>Département / Pays 5</div>" +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-5-1' placeholder='Nom'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q14-5-2' placeholder='Quantité (tonnes ou %)'></div></div>";
                  
                answer_body[15] = " <fieldset class='form-group'><input id='q15-déchet_par_déchet' name='Q15' type='radio' value='déchet_par_déchet'><label for='déchet_par_déchet'>Oui, déchet par déchet</label></fieldset>" +
                        "<fieldset class='form-group'><input id='q15-avec_regroupements ' name='Q15' type='radio' value='avec_regroupements'><label for='avec_regroupements '>Oui, avec des regroupements de certains déchets</label> </fieldset>"+
                     "<fieldset class='form-group'><input id='q15-non' name='Q15' type='radio' value='non'><label for='non'>Non, je ne trie pas mes déchets</label> </fieldset>";
             answer_body[16] = "<div class='md-form'><input type='text' id='q16' class='form-control'></div>";
             
             answer_body[17] = "<div class='md-form'><input type='text' id='q17' class='form-control'></div>";
               answer_body[18] = "<div class='md-form'><input type='text' id='q18' class='form-control'></div>";
             answer_body[19] = " <fieldset class='form-group'><input id='q19-déchet_par_déchet' name='Q19' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldset class='form-group'><input id='q19-avec_regroupements ' name='Q19' type='radio' value='en_projet'><label for='en_projet '>C’est en projet</label> </fieldset>"+
                     "<fieldset class='form-group'><input id='q19-non' name='Q19' type='radio' value='non'><label for='non'>Non</label> </fieldset>";
          
    answer_body[20] = "<div class='md-form'><input type='text' id='q20' class='form-control'></div>";
            answer_body[21] = "<div class='md-form'><input type='text'  id='q21'class='form-control'></div>";
             answer_body[22] = "<div class='md-form'><input type='text' id='q22' class='form-control'></div>";
              answer_body[23] = "<div class='md-form'><input type='text' id='q23' class='form-control'></div>";
               answer_body[24] = "<div class='md-form'><input type='text' id='q24' class='form-control' placeholder='%'></div>";
             answer_body[25] = " <fieldset class='form-group'><input id='q25-oui' name='Q25' type='radio' value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q25-non' name='Q25' type='radio' value='non'><label for='non'>Non</label> </fieldset>";

answer_body[26] = " <fieldset class='form-group'><input id='q26-jamais' name='Q26' type='radio' value='jamais'><label for='jamais'>Jamais</label></fieldset>" +
                        "<fieldset class='form-group'><input id='q26-rarement ' name='Q26' type='radio' value='rarement'><label for='rarement'>Rarement</label> </fieldset>"+
                     "<fieldset class='form-group'><input id='q26-parfois' name='Q26' type='radio' value='parfois'><label for='parfois'>Parfois</label> </fieldset>"+
               "<fieldset class='form-group'><input id='q26-souvent' name='Q26' type='radio' value='souvent'><label for='souvent'>Souvent</label> </fieldset>";
     
    answer_body[27] = " <fieldset class='form-group'><input id='q27-oui' name='Q27' type='radio'  value='oui'><label for='oui'>Oui</label></fieldset>" +
                        "<fieldsetlass='form-group'><input id='q27-non' name='Q27' type='radio'  value='non'><label for='non'>Non</label> </fieldset>";

answer_body[28] = " <fieldset class='form-group'><input id='q28-jamais' name='Q26' type='radio' value='jamais'><label for='jamais'>Jamais</label></fieldset>" +
                        "<fieldset class='form-group'><input id='q28-rarement ' name='Q26' type='radio' value='rarement'><label for='rarement'>Rarement</label> </fieldset>"+
                     "<fieldset class='form-group'><input id='q28-parfois' name='Q26' type='radio' value='parfois'><label for='parfois'>Parfois</label> </fieldset>"+
               "<fieldset class='form-group'><input id='q26-souvent' name='Q28' type='radio' value='souvent'><label for='souvent'>Souvent</label> </fieldset>";
     
    answer_body[29] = "<div class='md-form'><input type='text' id='q29' class='form-control'></div>";
      
       answer_body[30] = "<div class='row'> " +
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q30-1' placeholder='en km'></div>"+
                        "<div class='col-lg-3 col-md-3 mb-r'><input type='text' id='q30-2' placeholder='en min'></div></div>";
             
    answer_body[31] = "<div class='col-lg-8 col-md-8 mb-r'>" +
                        "Graves de déconstruction<input type='text' id='q31-1' placeholder='oui ou non'><br><br>" +
                        "graves chaulées<input type='text' id='q31-2' placeholder='oui ou non'> </div>"
 
  answer_body[32] = "<div class='md-form'><input type='text' id='q32' class='form-control'></div>";
   answer_body[33] = "<div class='md-form'><input type='text' id='q33' class='form-control'></div>";
      answer_body[34] = "<div class='row'> " +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q34-1' placeholder='Nom '></div>"+
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q34-2' placeholder='Téléphone'></div>"+
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q34-3' placeholder='E-mail '></div></div>";
                 answer_body[35] = "<div class='md-form'><input type='text' id='q35' class='form-control'></div>";
                  answer_body[36] = "<div class='md-form'><input type='text' id='q36' class='form-control'></div>";
                   answer_body[37] = "<div class='md-form'><input type='text' id='q37'  class='form-control'></div>";
                   
                   answer_body[38] = "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Démolition – technicité courante</div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q38-1' placeholder='%'></div></div>"+
                        "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Démolition à l’explosif </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text'id='q38-2' placeholder='%'></div></div>"+
                       "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Découpe du béton (par carottage ou sciage) </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q38-3' placeholder='%'></div></div>"+
                       "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Désamiantage  </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q38-4' placeholder='%'></div></div>"+
                        "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Autres travaux de démolition  </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q38-5' placeholder='%'></div></div>"+
                        "<div class='row'> <div class='col-lg-4 col-md-4 mb-r'>Autres activité (hors démolition) </div>" +
                        "<div class='col-lg-4 col-md-4 mb-r'><input type='text' id='q38-6' placeholder='%'></div></div>";
                  
    answer_body[39] = "<div class='md-form'><input type='text' id='q39' class='form-control'></div>";
    
    for (i = 1; i <= array_IDs.length; i++)
                {
                    if (id == i) {
                        $("#answer").append(answer_body[i]);
                    }

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

   
                
                
                

///fonction pour enregistrer les valeurs en cliquant sur suivant
$('#next_btn').on('click', function(){

    $('input[type="text"]').each(function(){    
        var id = $(this).attr('id');
        var value = $(this).val();
       localStorage.setItem(id, value);
        
    });   
    $('input[type="radio"]:checked').each(function(){
        var name = $(this).attr('name');
        var value = $(this).val();
        localStorage.setItem(name, value);

         });   
});
            });
        </script>
        
         <script>  
         $(document).ready(function () {
             
             // restoration des valeurs des inputs // les vqleurs nonetre déruire en cliquant sur le bouton 'logout' 
    $('input[type="text"]').each(function(){    
        var id = $(this).attr('id');
        var value = localStorage.getItem(id);
        
        $(this).val(value);
        
    }); 
    $('input[type="radio"]').each(function(){    
        var name = $(this).attr('name');
        var value = localStorage.getItem(name);
        
       $('input[value="' + value + '"][name="' + name + '"]').prop('checked', true);
        
    }); 
});
   </script>
    </body>

</html>
