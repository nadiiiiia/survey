
<div class="row" style="margin-right: 0px ; margin-left: 0px;">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="text-left">

            <!--Section: Dynamic content wrapper-->
            <section  class="mb-5">

                <?php $action =  base_url()."index.php/home/set_answers/" ;
                $attribut = array('name' => 'q_form');
                echo form_open($action, $attribut);
                ?> 
                <h2><span class="badge blue"></span> </h2>   <!--Titre de la Section-->
                <hr/>
                <div  class=" card card-body">

                    <div id="question_body" > 

                    </div><span id="counter"></span>
                    <p id="note" ></p>

                    <div id="answer" > 
                    <?php 
                    for($i=1;$i<40;$i++){
                    if($id == $i){ include('answer_q'.$i.'.php'); }
                    } ?>
                    </div>
                </div>
                <br> 

                <!-- start Survey btn-->

                <div class="row" >
                    <div class="col-md-12 col-sm-12" id= "survey_btn">
                        <a href="" id="next_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-right">suivant</a>

                        <a href="" id="back_btn" class="btn cyan-darken-3-color btn-sm waves-effect waves-light pull-left"  >précédent</a>
                   
                    </div>
                </div>
                <!-- End Survey btn-->
<?php echo form_close(); ?>
            </section>

            <!--Section: Dynamic content wrapper-->

        </div>
    </div>
    <div class="col-md-1"></div>
</div>

