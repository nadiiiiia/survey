<div class='col-lg-12 col-md-12 mb-r'>
    L’enquêté répond en quantité si possible,  en % si non.
    <!--Table-->
    <table class='table'id="table-q7" >
        <!--Table head-->
        <thead class='blue-grey lighten-4'>
            <tr>
                <th>Activité</th>
                <th>Quantité</th>
                <th>Unité</th>
                <th>%</th>
            </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
            <tr>
                <th scope='row'>Démolition - technicité courante <input type = "hidden" class="q7" name="activity_id" value="1"/></th>
                <td><input name="qte" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-1-1'></td>
                <td><select name="unit" id='q7-1-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input name="percent" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q7-1-3'></td>
                <td class="hidden"><input name="user_id" class="user" type='text'  value="<?php echo $id_user_connected; ?>" ></td>
                <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
            </tr>
            <tr>
                <th scope='row'>Démolition à l'explosif<input type = "hidden" class="q7" name="activity_id" value="2"/></th>
                <td><input  name="qte" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-2-1'></td>
                <td><select name="unit" id='q7-2-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input name="percent" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"   class="q7" id='q7-2-3'></td>
                <td class="hidden"><input name="user_id" class="user" type='text'   value="<?php echo $id_user_connected; ?>" ></td>
                <td class="hidden"><input name="question_id" class="question" type='text'  >
                </td>
            </tr>
            <tr>
                <th scope='row'>Découpe du béton* <input type = "hidden" class="q7" name="activity_id" value="3"/></th>
                <td><input  name="qte" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" class="q7" id='q7-3-1'></td>
                <td><select name="unit" id='q7-3-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input name="percent" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  class="q7"  id='q7-3-3'></td>
                <td class="hidden"> <input name="user_id" class="user" type='text'  value="<?php echo $id_user_connected; ?>"  ></td>
                <td class="hidden"><input name="question_id" class="question" type='text'  ></td>

            </tr>
            <tr>
                <th scope='row'>Désamiantage <input class="q7" type = "hidden" class="q7" name="activity_id" value="4"/></th>
                <td><input  name="qte" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" class="q7" id='q7-4-1'></td>
                <td><select name="unit" id='q7-4-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input name="percent" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q7-4-3'></td>
                <td class="hidden"> <input name="user_id" class="user" type='text'  value="<?php echo $id_user_connected; ?>"  ></td>
                <td class="hidden">  <input name="question_id" class="question" type='text' >
                </td>
            </tr>
            <tr>
                <th scope='row'>Autrestrav aux de démolition <input type = "hidden" class="q7" name="activity_id" value="5"/></th>
                <td><input  name="qte" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-5-1'></td>
                <td><select name="unit" id='q7-5-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input name="percent" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"  id='q7-5-3'></td>
                <td class="hidden"> <input name="user_id" class="user" type='text'  value="<?php echo $id_user_connected; ?>" ></td>
                <td class="hidden">    <input name="question_id" class="question" type='text' > </td>
            </tr>
            <tr>
                <th scope='row'>Autresactivité (hors démolition)<input class="q7" type = "hidden" name="activity_id" value="6"/></th>
                <td><input name="qte" class="q7" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-6-1'></td>
                <td><select name="unit" id='q7-5-2' class='q7 mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                <td><input class="q7" name="percent" type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"   id='q7-6-3'></td>
                <td class="hidden"> <input name="user_id" class="user"  type='text' value="<?php echo $id_user_connected; ?>" ></td>
                <td class="hidden">  <input  name="question_id" class="question" type='text' ></td>
            </tr>

        </tbody>
        <!--Table body-->
    </table>
    <!--Table-->
    <small> * par carottage ou sciage</small> 
    <div id="error_q7" class=" alert-danger"></div>


</div>