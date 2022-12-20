<!DOCTYPE html>
<html lang="en">
<?php
include "includes/header.php";
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"> <a href="index.php"> <img src="images/logoplaceholder.jpg"
                    style="width:50px;height:50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- select language with dropdown -->
            <li class="nav-item dropdown">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Talen
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Nederlands</a>
                                    <a class="dropdown-item" href="#">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">French</a>
                                </div>
            </li>
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="#">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            </ul>
            </div>
    </nav>
    <?php
    /* if logged in */
    // if (isset($_SESSION["useruid"])) {
    //     echo "<a href='profile.php'>Profiel pagina</a>";
    //     echo "<a href='includes/logout.inc.php'>Log uit</a>";
    // }
    /* if not */
    // else {
    //     echo "<a href='login.php'>Login</a>";
    //     echo "<a href='signup.php'>Registreren</a>";
    // }
    ?>
    </div>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>