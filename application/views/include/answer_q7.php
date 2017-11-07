<div class='col-lg-12 col-md-12 mb-r'>
L’enquêté répond en quantité si possible,  en % si non.
                   <!--Table-->
<table class='table'>
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
           <th scope='row'>Démolition - technicité courante</th>
            <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-1-1'></td>
            <td><select id='q7-1-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-1-3'></td>
        </tr>
          <tr>
            <th scope='row'>Démolition à l'explosif</th>
            <td><input  type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-2-1'></td>
            <td><select id='q7-2-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-2-3'></td>
        </tr>
        <tr>
            <th scope='row'>Découpe du béton* 
</th>
            <td><input  type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-3-1'></td>
            <td><select id='q7-3-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-3-3'></td>
        </tr>
		<tr>
            <th scope='row'>Désamiantage</th>
            <td><input  type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-4-1'></td>
            <td><select id='q7-4-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-4-3'></td>
        </tr>
		<tr>
            <th scope='row'>Autrestrav aux de démolition
</th>
            <td><input  type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-5-1'></td>
            <td><select id='q7-5-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-5-3'></td>
        </tr>
		<tr>
            <th scope='row'>Autresactivité (hors démolition)</th>
            <td><input type = "number" maxlength = "5" onkeypress="return isNumeric(event)" oninput="maxLengthCheck(this)" id='q7-6-1'></td>
            <td><select id='q7-5-2' class='mdb-select initialized'><option value='tonnes'>Tonnes</option><option value='m3'>m3</option></select></td>
            <td><input type='text' disabled="true" id='q7-6-3'></td>
        </tr>
      
   </tbody>
    <!--Table body-->
</table>
<!--Table-->
           <small> * par carottage ou sciage</small> 
           <div id="error_q7" class=" alert-danger"><p>Le montant total dépasse le Total déchets de votre réponse dans Q4</p></div>
					
     
                </div>