
<?php $id_next=$id + 1; 
$id_back = $id - 1; ?>
<div class="row" style="margin-right: 0px ; margin-left: 0px;">
            <div class="col-md-12 col-sm-12" id= "survey_btn">
        <a href="<?php echo base_url() . "index.php/home/".$id_next; ?>" id="next_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-right">suivant</a>
             
        <a href="<?php echo base_url() . "index.php/home/".$id_back; ?>" id="back_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-left" >précédent</a>
             </div>
        </div>