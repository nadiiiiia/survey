<fieldset class='form-group'>
    <input id='q11-oui' name='Q11' type='radio' value='oui'><label for='oui'>&nbsp;Oui</label>
</fieldset>
<fieldset class='form-group'>
    <input id='q11-non' name='Q11' type='radio' value='non'><label for='non'>&nbsp;Non</label> 
</fieldset>


<div class="row" id="table-q11">
    <div  class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th>Les déchets dangereux</th>
                    <th>oui</th>
                    <th>non</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">1.Terres et matériaux meubles pollués</th>
                    <td> <input type="radio" name="Q11-1" id='q11-1-1' value="oui"></td>
                    <td><input type="radio" name="Q11-1" id='q11-1-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">2.Amiante</th>
                    <td> <input type="radio" name="Q11-2" id='q11-2-1' value="oui"></td>
                    <td><input type="radio" name="Q11-2" id='q11-2-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">3.Bois traités <small>(traverses chemin fer, poteaux EDF ou FT, bois recouvert de peintures au plomb, etc.)</small></th>
                    <td> <input type="radio" name="Q11-3" id='q11-3-1' value="oui"></td>
                    <td><input type="radio" name="Q11-3" id='q11-3-2' value="non"></td>
                </tr>
                <tr> 
                    <th scope="row">4.Lampes</th>
                    <td> <input type="radio" name="Q11-4" id='q11-4-1' value="oui"></td>
                    <td><input type="radio" name="Q11-4" id='q11-4-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">5.Déchets d'équipements électriques et électroniques (DEEE)</th>
                    <td> <input type="radio" name="Q11-5" id='q11-5-1' value="oui"></td>
                    <td><input type="radio" name="Q11-5" id='q11-5-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row">6.Equipements techniques (hors DEEE)</th>
                    <td> <input type="radio" name="Q11-6" id='q11-6-1' value="oui"></td>
                    <td><input type="radio" name="Q11-6" id='q11-6-2' value="non"></td>
                </tr>


                <tr>
                    <th scope="row">7.Autres déchets dangereux</th>
                    <td> <input type="radio" name="Q11-7" id='q11-7-1' value="oui"></td>
                    <td><input type="radio" name="Q11-7" id='q11-7-2' value="non"></td>
                </tr>
                <tr>
                    <th scope="row"><input name="Q11-8" type="text" placeholder="Préciser"></th>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"><input name="Q11-9" type="text" placeholder="Préciser"></th>
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

                    <th>Quantité(tonnes)</th>


                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>

                    <td class="hidden"><input type = "text" class="q11" name="dechet_id" value="17"/></td> 
                    <td>   <input id='q11-1-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q11" name="dechet_id" value="18"/></td> 
                    <td>   <input id='q11-2-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"><input type = "text" class="q11" name="dechet_id" value="19"/></td>  
                    <td>   <input id='q11-3-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q11" name="dechet_id" value="20"/></td> 
                    <td>   <input id='q11-4-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q11" name="dechet_id" value="21"/></td> 
                    <td>  <input id='q11-5-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q11" name="dechet_id" value="22"/></td> 
                    <td><input id='q11-6-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td class="hidden"> <input type = "text" class="q11" name="dechet_id" value="23"/></td> 
                    <td> <input id='q11-7-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td> <input id='q11-8-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>
                <tr>
                    <td> <input id='q11-9-3' type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)"></td>
                </tr>

            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->
    <div>
    </div>
</div>

<div id="error_q11" class=" alert-danger"><p></p></div>
