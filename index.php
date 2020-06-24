<?php
    include "includes/db.php";
    include "includes/class-autoload.inc.php";
?>
<?php include "partials/head.php";  ?>

<!--utiliser le plus possible els declarations de variables avec le BEM notation -->
<?php include "partials/nav.php";  ?>
<header class="header">
    <h1 class=" text-center my-5 myTitle animate__animated animate__bounce">my index page</h1 >
</header >
<main class="main">
    <div class="container">
        <div class="row flex-column">
            <div class="col">
                <div class="card animate__animated  animate__backInDown" style="width: 18rem;">
                    <img class="card-img-top " src="img/eccureil.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5 >
                        <p class="card-text">Some quick example text to build on the card title and
                                             make up the bulk of the card's content.</p >
                        <a href="#" class="btn btn-primary">Go somewhere</a >
                    </div >
                </div >
            </div >
        </div >
    </div >
</main >
<?php include "partials/footer.php";  ?>

