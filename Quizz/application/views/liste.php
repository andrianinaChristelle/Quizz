<div class='front'>
    <div class="row ins" >
        <div class="col-md-1">
        </div>
            <div class="col-md-10">
            <h1>Liste question</h1>
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">question</th>
        
            </tr>
        </thead>
        <tbody>
      
        <?php foreach ($question as $data) {?>
            <tr>
            <form method="post"  action="traitement" class="form-inline">
                <th scope="row"><?php echo $data['numero'];?></th>
                <td><center><?php echo $data['question'];?></center></td>
                <td> <input type="hidden"  value="<?php echo $data['id']; ?>" name="id" ></td>
                <td> <button type="submit" class="btn btn-primary mb-2" name="supprimer">Supprime </button></td>
                <td> <button type="submit" class="btn btn-primary mb-2" name="detail">Detail </button></td>
                <td> <button type="submit" class="btn btn-primary mb-2" name="modifier">Modifie </button></td>
                </form>
            </tr>
        <?php } ?>
      
        </tbody>
        </table>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>