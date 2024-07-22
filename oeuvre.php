
<?php
    include "header.php";
    include "oeuvres.php";
    $id=$_GET["id"];
    
?>  

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo ($oeuvres[$id]['image'])?>" alt="<?echo ($oeuvres[$id]['titre'])?>">

        </div>
        <div id="contenu-oeuvre">
            <h1><?=$oeuvres[$id]['titre']?></h1>
            <p class="description"><?=$oeuvres[$id]['artiste']?></p>
            <p class="description-complete"> <?=$oeuvres[$id]['description'] ?>
            </p>
        </div>
    </article>


    <?php
           include "footer.php";
          ?>  

    