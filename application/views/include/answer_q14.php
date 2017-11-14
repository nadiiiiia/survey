
<div class="row" id="table-q14">
    <div  class="col-lg-8 col-md-8 mb-r">
        <table class="table">

            <!--Table head-->
            <thead class="blue-grey lighten-4">
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Quantité(tonnes ou %)</th>

                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <th scope="row">Département / Pays 1</th>
                    <td> <input type="text" name="nom" id='q14-1-1' class="useLocal useLocalInput"></td>
                    <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" name="qte" id='q14-1-2' class="useLocal useLocalInput" ></td>
                    <td class="hidden"><input name="user_id" class="user" type='text' ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden">  <input name="row_id" type='text' value="1"></td>
                </tr>
                <tr>
                    <th scope="row">Département / Pays 2</th>
                    <td> <input type="text" name="nom" id='q14-2-1' class="useLocal useLocalInput"></td>
                    <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" name="qte" id='q14-2-2' class="useLocal useLocalInput"></td>
                    <td class="hidden"><input name="user_id" class="user" type='text'   ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text'  ></td>
                    <td class="hidden">  <input name="row_id" type='text' value="2"></td>
                </tr>
                <tr>
                    <th scope="row">Département / Pays 3</th>
                    <td> <input type="text" name="nom" id='q14-3-1' class="useLocal useLocalInput"></td>
                    <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" name="qte" id='q14-3-2' class="useLocal useLocalInput"></td>
                    <td class="hidden"><input name="user_id" class="user" type='text'   ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text' ></td>
                    <td class="hidden">  <input name="row_id" type='text' value="3"></td>
                </tr>
                <tr> 
                    <th scope="row">Département / Pays 4</th>
                    <td> <input type="text" name="nom" id='q14-4-1' class="useLocal useLocalInput"></td>
                    <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" name="qte" id='q14-4-2' class="useLocal useLocalInput"></td>
                    <td class="hidden"><input name="user_id" class="user" type='text'   ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text' ></td>
                    <td class="hidden">  <input name="row_id" type='text' value="4"></td>
                </tr>
                <tr>
                    <th scope="row">Département / Pays 5</th>
                    <td> <input type="text" name="nom" id='q14-5-1' class="useLocal useLocalInput" ></td>
                    <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" name="qte" id='q14-5-2' class="useLocal useLocalInput" ></td>
                <td class="hidden"><input name="user_id" class="user" type='text'  ></td>
                    <td class="hidden">  <input name="question_id" class="question" type='text' ></td>
                    <td class="hidden">  <input name="row_id" type='text' value="5"></td>
                </tr>

            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>  <!--fin table -->

    <div>
    </div>
</div>
<div id="error_q14" class=" alert-danger"><p>Le montant total des quantités dépasse le Total déchets de votre réponse dans Q13</p></div>
