<?php
    include 'session/db_handler.php';
    include 'header.php';


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./">Music Land</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <a href="index.php?userAccount" name="userAccount"><i class="fas fa-user-circle fa-2x"></i></a>
        <a href="index.php?shoppingCart" name="shoppingCart"><i class="fas fa-shopping-cart fa-2x"></i></a>
    </form>
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a name="showKeyboard" class="nav-link" href="index.php?showKeyboard"  role="button">Keyboards</a>
            </li>
            <li class="nav-item dropdown">
                <a name="showDrum" class="nav-link" href="index.php?showDrum"  role="button">Drums</a>
            </li>
            <li class="nav-item dropdown">
                <a name="showSoftware" class="nav-link" href="index.php?showSoftware"  role="button">Software</a>
            </li>
            <li class="nav-item dropdown">
                <a name="showSheetmusic" class="nav-link" href="index.php?showSheetmusic"  role="button">Sheetmusic</a>
            </li>
            <li class="nav-item dropdown">
                <a name="showGuitar" class="nav-link" href="index.php?showGuitar"  role="button">Guitar</a>
            </li>
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="userAccount.php" name="guitar" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Guitars-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="#">Category 01</a>-->
<!--                    <a class="dropdown-item" href="#">Category 02</a>-->
<!--                    <a class="dropdown-item" href="#">Category 03</a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
    </form>
</nav>