<?php

    include_once('header.php');
?>

<main>
        <div class="container">
             <?php
            require_once('sidebar.php');
            ?>
            <article id="video">
                <img src="img/tutorial.png" alt="">
                <section class="botones">
                    <a href=""><i class="fa fa-step-backward" aria-hidden="true"></i></a>
                    <h3>Nombre del video</h3>
                    <a href=""><i class="fa fa-step-forward" aria-hidden="true"></i></a>
                </section>
                <section class="comentarios">
                    <h2>Opiniones</h2>
                </section>
            </article>
        </div>
    </main>

<?php
    include_once('footer.php');
  ?> 