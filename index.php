<?php
// add each controller
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';
require_once './controllers/UserController.php';
require_once './controllers/VolController.php';
require_once './controllers/ReservationController.php';
require_once './views/includes/alerts.php';


$home = new HomeController();
$pages = ['login', 'register','homeAdmin','homeUser','logout','addVol','deleteVol','updateVol','volsAdmin','adminReservation','volsUser','mesReservation','ReserveNow','updateReservation','deleteReservation','book'];

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {

    if (isset($_GET['page'])){
        if (in_array($_GET['page'], $pages)) {
            $page = $_GET['page'];
            $home->index($page);
        } else {
            require_once './views/includes/404.php';
        }
    } else if($_SESSION['Role'] === "admin"){
                $home->index('homeAdmin');
            }else{
                $home->index('homeUser');
            }

} else if (isset($_GET['page']) && $_GET['page'] === 'register'){
    $home->index('register');
} else {
    $home->index('login');
}

require_once './views/includes/footer.php';
