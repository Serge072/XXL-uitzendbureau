<body>
    <!-- logo in navbar linking to homepage/index -->
    <nav class="navbar navbar-expand-sm bg-light">
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
                                <!-- select languages in the dropdown menu -->
                                Talen
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">French</a>
                                    <a class="dropdown-item" href="#">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Nederlands</a>
                                </div>
                        </div>
                </div>
            </li>
            </div>
            <!-- seperate options on the navbar -->
            <li class="nav-item active">
                <a class="nav-link" href="#">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <!-- if logged in show profile / logout -->
            <?php if (isset($_SESSION["logged_in"])): ?>
            <li class="navbar-nav ms-auto">
                <a class="nav-link" href="profiel.php">Profiel</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php">Loguit</a>
            </li>
            <!-- else show login / register -->
            <?php else: ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="register.php">registreren</a>
                </li>
            </ul>
    </nav>
    <?php endif; ?>
</body>

</html>