
<?php

    if(isset($_POST['submit'])){
        $newVol = new VolController();
        $newVol->addVol();
    }
?> 


<nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
       
       <ul class="navbar-nav">
           <li class="nav-item bg-secondary"><a class="nav-link" href="volsAdmin">Vols</a></li>
           <li class="nav-item"><a class="nav-link" href="adminReservation">Reservations</a></li>
           <li class="nav-item"><a class="nav-link" href="logout"><i class="fa fa-user mr-2"> Log Out</i></a></li>
       </ul>
</nav>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
           <div class="card">
           <div class="card-header text-center">Ajouter un nouveau vol</div>
           <div class="card-body bg-light">
           <a href="volsAdmin" class="btn btn-sm btn-secondary mb-4 mr-2"><i class="fa fa-window-close"></i></a>
            <form method="post">
           
                <div class="form-group mb-3">
                    <label for="Depart" class="mb-1">Depart </label>
                    <input type="text" name="Depart" id="Depart" class="form-control" placeholder="Depart" required>
                </div>


                <div class="form-group mb-3">
                    <label for="Destination" class="mb-1">Destination </label>
                    <input type="text" name="Destination" id="Destination" class="form-control" placeholder="Destination" required>
                </div>

                <div class="form-group mb-3">
                    <label for="dateDepart" class="mb-1">Date de depart</label>
                    <input type="datetime-local" name="dateDepart" id="dateDepart" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="dateDestination" class="mb-1">Date de destination</label>
                    <input type="datetime-local" name="dateDestination" id="dateDestination" class="form-control" required>
                </div>
            
                <div class="form-group mb-3 flex flex-row">
                        
                        <input type="radio" id="aller-simple" name="type" value="aller-simple" checked required>
                        <label for="aller-simple" class="mb-1">aller-simple</label>
                   
                        <input type="radio" id="aller-retour" name="type" value="aller-retour" required>
                        <label for="aller-retour" class="mb-1">aller-retour </label>
                   
                </div>
                
                <div class="form-group mb-3" style="display:none;" id=show_type>
                    <label for="dateRetour" class="mb-1">Date de retour</label>
                    <input type="datetime-local" name="dateRetour" id="dateRetour" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="nbrPlaces" class="mb-1">Nombre de places</label>
                    <input type="number" min="50" max="250" name="nbrPlaces" id="nbrPlaces" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit">valide</button>
                </div>

            </form >
            
           </div>
           </div>
        </div>
    </div>
</div>
<script src="./public/main.js"></script>
