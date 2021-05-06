<?php 
if(isset($_POST['submit'])){
    $loginUser = new UserController();
    $loginUser->auth();
}
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body bg-light">
                    
                    <form method="post" class="mr-1">

                        <div class="form-group mb-4"> 
                            <input type="email" name="email" placeholder="Enter your email" class="form-control">
                        </div>

                        <div class="form-group mb-4"> 
                            <input type="password" name="password" placeholder="********" class="form-control">
                        </div>

                        <button name="submit" class="btn btn-sm btn-primary">Login</button>
                    </form>
                </div>
                <div class="card-footer">
                    <p>You do not have an account ? <a href="<?php echo BASE_URL; ?>register" class="btn btn-link">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>