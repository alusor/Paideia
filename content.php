<main>
        <div class="container">
            <?php
            require_once('sidebar.php');
            ?>
            <article>
                <?php
                for($i = 0 ; $i<6 ;$i++){
                    ?>
                    <div class="cartaCurso">
                        <div class="tituloCarta">
                            <img src="img/tutorial.png" alt="">
                        </div>
                        <div class="contenidoCarta">
                            <h1>Curso <?php echo $i+1 ?></h1>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis eos possimus, sunt quo itaque voluptatum non amet sapiente harum, numquam quos sed quibusdam qui totam rem dolore maiores magnam eum.
                            </div>
                        
                        <a href="index.php?page=detalle" class="incripcion">Ir al curso <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    <?php
                }
                ?>
                
                
            </article>
        </div>
    </main>