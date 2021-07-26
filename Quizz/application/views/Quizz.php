
<div class='front'>
    <div class="row ins" >
        <div class="col-md-2">
        </div>
            <div class="col-md-8">
            <form method="post"  action="Front/traitement" class="form-inline">
            <h1> question</h1>
            <div class="container">
            <?php $i=0 ; foreach($question as $data) {?>
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $data['question']?></li>
                    <?Php  foreach($reponse as $rep) {
                        if($data['id']==$rep['id_question']) {?>
                            <div>
                            <input type="radio" id="huey" name="valeur<?php echo $i; ?>" value="<?php echo $rep['typeRep']; ?>" checked>
                      
                            <label for="huey"> <?php echo $rep['reponse']; ?></label>
                        </div>
                        <?php }}?>
                </ul>
            <?php $i++ ;} ?>
            </div>
            <center> <button type="submit" class="btn btn-primary mb-2">valider </button></center>
            </form>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
