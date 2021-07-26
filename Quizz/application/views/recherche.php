
<div class='front'>
    <form method="post"  action="insert" class="form-inline">
    
    <div  id="corp" class="container">
    <div class="row ins" >
        <div class="col-md-5">
        <h2> nouvelle question </h2>
        </div>
    
        <div class="col-md-7">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Numero question</label>
            <input type="text" class="form-control" id="inputEmail3" placeholder="numero" name="numero">       
         </div></br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Question</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="question"></textarea>
        </div></br>
        <?php for ($i= 0 ; $i<4 ; $i++){?>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">  Reponse</label></br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reponse<?php echo $i ;?>"></textarea>
                <select class="form-control" id="exampleFormControlSelect1" name="type<?php echo $i ;?>" >
                         <option value= "0" >vrai</option>
                         <option value= "1" >faux</option>
                 </select>  
        </div></br>
        <?php }?>

        
        </div>
      
    </div></br></br>
    <center> <button type="submit" class="btn btn-primary mb-2">insert </button></center>

    
        </div>
    </form>
    </div>
