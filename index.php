<?php
    include "header.php";
    include "oeuvres.php";
?>  
          <div id="liste-oeuvres">
           
           <?php   foreach($oeuvres as $indice => $oeuvre): ?>
              <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $indice; ?>">
                    <img src="<?php echo($oeuvre['image']); ?>" alt="<?php echo($oeuvre['titre']); ?>">
                    <h2><?php echo($oeuvre['titre']); ?></h2>
                    <p><?php echo($oeuvre['description']);?></p>
                </a>
            </article>

            <?php endforeach; ?>

          </div>
           
          <?php
           include "footer.php";
          ?>  