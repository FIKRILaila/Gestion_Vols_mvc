<?php
    $data = new VolController();
    $vol = $data->getAllVols();
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
        <div class="col-md-12 mx-auto">
           <div class="card">
           <div class="card-body bg-light">
           <a href="<?php echo BASE_URL;?>addVol" class="btn btn-sm btn-primary mb-4 mr-2"><i class="fa fa-plus"></i></a>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de places </th>
                        <th scope="col">Départ</th>
                        <th scope="col">Date de départ</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Date de destination </th>
                        <th scope="col">Date de Retour </th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vol as $v):?>
                        <tr>
                            <th scope="row"> <?php echo $v['id_v'];?></th>
                            <td><?php echo $v['nbr_places']; ?></td>
                            <td><?php echo $v['Depart']; ?></td>
                            <td><?php echo $v['Date_Depart']; ?></td>
                            <td><?php echo $v['Destination']; ?></td>
                            <td><?php echo $v['Date_Destination']; ?></td>
                            <td><?php echo $v['Date_Retour']; ?></td>
                            <td><?php echo $v['type']; ?></td>
                            <td class="d-flex flex-row">
                                <form method="post" class="mx-2" action="updateVol">
                                    <input type="hidden" name="id" value="<?php echo $v['id_v'];?>">
                                    <button name="submit" class="btn btn-sm btn btn-warning"><i class="fa fa-edit"></i></button>
                                </form>
                                <form method="post" class="mr-1" action="deleteVol">
                                    <input type="hidden" name="id" value="<?php echo $v['id_v'];?>">
                                    <button name="submit" class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i></button>
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