<?php

require_once('component.php');
if(isset($_SESSION['username'])){
    $un = $_SESSION['username'];
    
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-home"></i> <?php echo 'Welcome '.$un.'!'?>
            </h3>
        </a>
        <a href="index.php?logout='1'" style="color: red;">
            <p style="margin-top:15px;"><i class="fas fa-sign-out-alt"></i> Logout</p>
        </a>
        <button class="navbar-toggler" 
        type="button" 
        data-toggle="collapse"
        data-target = "#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-star"></i>Favorites
                        
                    </h5>
                </a>
            </div>
        </div>
    </nav>
</header>