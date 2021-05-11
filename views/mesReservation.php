<?php

    $data = new ReservationController();
    $allReservation =$data->getAllReservationsById();
?>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
       
       <ul class="navbar-nav">
           <li class="nav-item"><a class="nav-link" href="homeUser">Home</a></li>
           <li class="nav-item"><a class="nav-link" href="volsUser">Vols</a></li>
           <li class="nav-item bg-secondary"><a class="nav-link" href="mesReservation">Mes Reservations</a></li>
           <li class="nav-item"><a class="nav-link" href="logout"><i class="fa fa-user mr-2"> Log Out</i></a></li>
       </ul>

</nav>


<div class="container">
    <div class="row my-4">
        <div class="col-md-12 mx-auto">
           <div class="card">
           <div class="card-body bg-light">
           <table class="table table-hover">
                <thead>
                    <tr>
                      
                        <th scope="col">le Vol reserve</th>
                        <th scope="col">Reserve pour</th>
                        <th scope="col">Date de reservation</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">type</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($allReservation as $Res):?>
                        <tr>

                            <th scope="row"> <?php echo "#".$Res['id_v'];?></th>
                            <td><?php echo $Res['nbr_person']; ?></td>
                            <td><?php echo $Res['Date']; ?></td>
                            <td><?php echo $Res['Origin']; ?></td>
                            <td><?php echo $Res['Destination']; ?></td>
                            <td><?php echo $Res['type']; ?></td>
                            <td class="d-flex flex-row">
                                <form method="post" class="mr-1" action="deleteReservation">
                                    <input type="hidden" name="id" value="<?php echo $Res['id_r'];?>">
                                    <button name="submit" class="btn btn-sm btn btn-danger">Annuler</button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
           </div>
           </div>
        </div>
    </div>
</div>


