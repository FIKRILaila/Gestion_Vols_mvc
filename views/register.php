<?php
if(isset($_POST['submit'])){
    $createUser = new UserController();
    $createUser->register();
}

?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body bg-light">
                    <form method="post" class="mr-1">
                        <div class="form-group mb-4">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" placeholder="Saisi votre nom" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" placeholder="Saisi votre prénom" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="********" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="dateNaiss">Date de naissance</label>
                            <input type="date" id="dateNaiss" name="dateNaiss" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Saisi votre email" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="tel">Phone</label>
                            <input type="tel" id="tel" name="tel" placeholder="Saisi votre n° de tétéphone" class="form-control">
                        </div>
                        
                        <button class="btn btn-primary" name="submit">Register</button>

                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>