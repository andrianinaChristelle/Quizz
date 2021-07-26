
</div>
<div class='front'>
    <div class="row ins" >
        <div class="col-md-1">
        </div>
            <div class="col-md-10">
            <div class='front'>
    <h3>Detail question numero <?php echo $detail[0]['numero']?><h3>
    <h3> question : <?php echo $detail[0]['question']?><h3>
    <h3>Reponse</h3>
    <?php foreach($detail as $data){
        echo $data['reponse'].'   ';
        if($data['typeRep']==0){
            echo '     vrai</br>';
        }
        else
        echo '      faux</br>';
    }?>
     
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>