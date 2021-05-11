<?php

if(isset($_POST['submit'])){
    $vol = new VolController();
    $vol = $vol->getOneVol();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
           <div class="card">
           <div class="card-header bg-light">
                    <h3 class="text-center">New Reservation</h3>
                    <p><b>vous avez entrain de reserver le vol:</b><br> <b>Depart:</b>  <?php echo $vol->Depart; ?><br>
                    <b>Destination:</b> <?php echo $vol->Destination; ?><br> <b>Date de depart:</b> <?php echo $vol->Date_Depart; ?><br>
                    <b> Date de destination:</b><?php echo $vol->Date_Destination; ?><br> <b>Type:</b> <?php echo $vol->type; ?><br>
                    <?php if($vol->type==="aller-retour"){echo "<b>Date de retour:</b> ".$vol->Date_Retour; } ?>
                    </p>
            </div>
            <div class="card-body bg-light">
                    
                    <form method="post" class="mr-1" action="book">

                        <input type="hidden" name="id_v" value="<?php echo $vol->id_v;?>">

                        <div class="form-group mb-4">
                            <label for="nbr_person" class="mb-1">Reservation pour combien de person:</label>
                            <input type="number" min="1" name="nbr_person" id="nbr_person" class="form-control">
                        </div>
                        
                        <div class="form-group mb-4" id="passager"></div>
                            
                        <button name="book" class="btn btn-sm btn-primary">Reserve</button>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>


<script src="./public/book.js"></script>
