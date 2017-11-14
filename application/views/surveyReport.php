<?php

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php');
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/fra.php')) {
    require_once(dirname(__FILE__) . '/lang/fra.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
// set font
$pdf->SetFont('times', '', 10);



// test custom bullet points for list
// add a page
$pdf->AddPage();



$html = '<style>
table, td, th { 
    border: 1px solid black;  
    padding: 7px;
    text-align: left;
}
table {
    border-collapse: collapse;
	font-size: large;
    width: 100%;
}
</style>';

$html.= '<h1  style="text-align:center;" >Demande de Devis</h1> 

<p>&nbsp;</p>
<h2> Informations Personnelles</h2>
<table>
    <tbody>
	<tr>
        <td><strong>Nom et Prénom:</strong></td>
        <td colspan="3"></td> 
			
    </tr>
	<tr >
        <td><strong>E-mail:</strong></td>
        <td colspan="3"></td> 
	  		
    </tr>
	<tr >
        <td ><strong>Adresse:</strong></td>
        <td colspan="3"> </td> 
       	
    </tr>
	<tr>
        <td><strong>Téléphone:</strong></td>
        <td colspan="3" > 22886695 </td> 
      		
    </tr>
	</tbody>
</table>';
/*
 * 
$html.= '<p>&nbsp;</p>
    <h2> Informations de Devis</h2>

<table>
    <tbody>
	<tr>
        <td ><strong>Vous êtes un:</strong></td>
        <td colspan="3" >' . $dossier->titre . '</td> 
    </tr>
	<tr>
        <td><strong>Destination:</strong></td>
        <td >' . $dossier->destination . '</td> 
        <td><strong>Type de fret:</strong></td>
        <td  >' . $dossier->fret . '</td> 
       
       		 		 
    </tr>
	<tr>
        <td><strong>Produit:</strong></td>
        <td colspan="3" >' . $dossier->produit . '</td> 
	</tr>';


$voiture = '<tr>
	<td><strong>Marque:</strong></td>
        <td>' . $dossier->marque . '</td>    
        <td><strong>Modèle:</strong></td>
        <td>' . $dossier->model . '</td>
	   </tr>';

if ($dossier->produit == 'voiture') {
    $html.=$voiture;
} else {
    $html.='';
}

$circulation = '<tr>
        <td><strong>Numéro de série:</strong></td>
        <td>' . $dossier->serial . '</td>	  
	<td><strong>Date de circulation:</strong></td>
        <td>' . $dossier->circulation . '</td>    
		  </tr>';

if (($dossier->produit == 'voiture' || $dossier->produit == 'camion' || $dossier->produit == 'camionnette' || $dossier->produit == 'engin' || $dossier->produit == 'tracteur' || $dossier->produit == 'benne' || $dossier->produit == 'moto' || $dossier->produit == 'avion' || $dossier->produit == 'bateau') && ($dossier->circulation != '0000-00-00')) {
    $html.=$circulation;
} else {
    $html.='';
}
$html.= '<tr>
 	<td><strong>Valeur:</strong></td>
        <td>' . $dossier->valeur . '</td>  
<td><strong>Date de demande:</strong></td>
        <td>' . $dossier->created_at . '</td>            
    </tr>
	
		</tbody>
</table>';

if ($dossier->facture == 1) {
    $facture = "Oui";
} else {
    $facture = "Non";
}

if ($dossier->transitaire == 1) {
    $transitaire = "Oui";
} else {
    $transitaire = "Non";
}

if ($dossier->relationPart == 1) {
    $relationPart = "Oui";
} else {
    $relationPart = "Non";
}

if ($dossier->declarant == 1) {
    $declarant = "Oui";
} else {
    $declarant = "Non";
}

if ($dossier->relPartDec == 1) {
    $relPartDec = "Oui";
} else {
    $relPartDec = "Non";
}

if ($dossier->cle == 1) {
    $cle = "Oui";
} else {
    $cle = "Non";
}

$html.= '<p>&nbsp;</p>
    <h2>Questions</h2>

<table>
    <tbody>	
	<tr>
 	<td colspan="5"><strong>Avez vous une facture d\'achat ?</strong></td>
        <td>' . $facture . '</td>     
    </tr>
	<tr>
 	<td colspan="5"><strong>Avez vous un transitaire ?</strong></td>
        <td>' . $transitaire . '</td>    
    </tr>
	<tr>
 	<td colspan="5"><strong>Voulez vous une mise en relation avec un de nos partenaires ?</strong></td>
        <td>' . $relationPart . '</td>    
    </tr>
	<tr>
 	<td colspan="5"><strong>Avez vous un déclarant ?</strong></td>
        <td>' . $declarant . '</td>    
    </tr>';

$adresseDeclarant = '	<tr>
 	<td colspan="2"><strong>Adresse du déclarant:</strong></td>
        <td colspan="4">' . $dossier->adresseDeclarant . '</td>    
    </tr>';

if ($dossier->declarant == 1 && $dossier->declarant != '') {
    $html.=$adresseDeclarant;
} else {
    $html.='';
}

$html.='<tr>
 	<td colspan="5"><strong>Voulez vous une mise en relation avec un de nos partenaires déclarant?</strong></td>
        <td>' . $relPartDec . '</td>    
    </tr>
	<tr>
 	<td colspan="5"><strong>souhaitez vous une solution clé en main? (prise en charge auprès de la douane et livraison)</strong></td>
        <td>' . $cle . '</td>    
    </tr>
	</tbody>
</table>

<p>&nbsp;</p>
<h2>Avancement et Remarques:&nbsp;</h2>
<table>
    <tbody>
    <tr>
         <td style="color:red;">'.$dossier->remarques.'</td>
    </tr>
    </tbody>
</table>


';*/




// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------
//Close and output PDF document

//if($action=='download'){
//$pdf->Output( 'Demande_Devis.pdf', 'D'); 
//}else{
//ob_clean();
  $pdf->Output('survey.pdf', 'I');  
//ob_end_clean();
//}



/*
I: send the file inline to the browser (default).
D: send to the browser and force a file download with the name given by name.
F: save to a local server file with the name given by name.
S: return the document as a string (name is ignored).
FI: equivalent to F + I option
FD: equivalent to F + D option
E: return the document as base64 mime multi-part email attachment (RFC 2045)*/



//============================================================+
// END OF FILE
//============================================================+
