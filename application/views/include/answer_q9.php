<fieldset class='form-group'>
    <input id='q9-oui' name='Q9' type='radio' value='oui'><label for='oui'>&nbsp;Oui</label>
</fieldset>
<fieldset class='form-group'>
    <input id='q9-non' name='Q9' type='radio' value='non'><label for='non'>&nbsp;Non</label> 
</fieldset>


<div class="row" id="table-q9">
    <div id="q9-table" class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les  déchets inertes</th>
                    <th>oui</th>
                    <th>non</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1. Terres et matériaux meubles non pollués</th>
                    <td> <input type="radio" name="Q9-1" id='q9-1-1'></td>
                    <td><input type="radio" name="Q9-1" id='q9-1-2'></td>
                </tr>
                <tr>
                    <th scope="row">2. Graves et matériaux rocheux</th>
                    <td> <input type="radio" name="Q9-2" id='q9-2-1'></td>
                    <td><input type="radio" name="Q9-2" id='q9-2-2'></td>
                </tr>
                <tr>
                    <th scope="row">3. Béton  sans ferraille ou peu ferraillé</th>
                    <td> <input type="radio" name="Q9-3" id='q9-3-1'></td>
                    <td><input type="radio" name="Q9-3" id='q9-3-2'></td>
                </tr>
                <tr>
                    <th scope="row">4. Briques, tuiles et céramiques</th>
                    <td> <input type="radio" name="Q9-4" id='q9-4-1'></td>
                    <td><input type="radio" name="Q9-4" id='q9-4-2'></td>
                </tr>
                <tr>
                    <th scope="row">5. Mélanges de déchets inertes</th>
                    <td> <input type="radio" name="Q9-5" id='q9-5-1'></td>
                    <td><input type="radio" name="Q9-5" id='q9-5-2'></td>
                </tr>
                <tr>
                    <th scope="row">6. Autres déchets inertes</th>
                    <td> <input type="radio" name="Q9-6" id='q9-6-1' value="oui"></td>
                    <td><input type="radio" name="Q9-6" id='q9-6-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row"><input type="text" name="Q9-7-0" id='q9-7-1' placeholder="Préciser"></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td> </td>
                    <td></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div id="q9-table" class="col-lg-4 col-md-4 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>

                    <th>Quantité</th>
                    <th>Unité</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody class="qte">
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q9" name="dechet_id" value="1"/></td> 
                    <td>    <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-1-3'></td>
                    <td><select id='q9-1-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>

                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"><input type = "text" class="q9" name="dechet_id" value="2"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-2-3'></td>
                    <td><select id='q9-2-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q9" name="dechet_id" value="3"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-3-3'></td>
                    <td><select id='q9-3-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"> <input type = "text" class="q9" name="dechet_id" value="4"/></td> 
                    <td><input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-4-3'></td>
                    <td><select id='q9-4-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'></td>
                    <td class="hidden"> <input type = "text" class="q9" name="dechet_id" value="5"/></td> 
                    <td> <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-5-3'></td>
                    <td><select id='q9-5-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden"><input type = "text" class="q9" name="dechet_id" value="6"/></td> 
                    <td>  <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-6-3'></td>
                    <td><select id='q9-6-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
                <tr class="hidden">
                    <td> <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-7-3'></td>
                    <td><select id='q9-7-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr >
                <tr>
                    <td> <input type = "number" name="qte" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q9-8-3'></td>
                    <td><select id='q9-8-4' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
                </tr>
            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div>
    </div>
</div>

<div id="error_q9" class=" alert-danger"><p>Le montant total des quantités dépasse le Total déchets de votre réponse dans Q4</p></div>


