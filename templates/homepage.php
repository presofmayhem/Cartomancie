<?php $title = "Astrestoile cartomancie"; ?>

<?php ob_start(); ?>

    <div class="presentation">
    <h2>
        Présentation
        <br />
        <div class="date">modifié le <?= $presentation['date_presentation']; ?></div>
    </h2>
    <p>
        <img src='<?= nl2br(htmlspecialchars($presentation['img_presentation'])); ?>' class="img"/>
        <br />
        <div class="text"> <?= nl2br(htmlspecialchars($presentation['text_presentation'])); ?></div>
        <br />
    </p>
    </div>

    <div class="blocs">
    <h2>
        Comment ça fonctionne
        <br />       
    </h2>
<?php 
    foreach($explications as $explication){     
?>
    <p>
        <div class="title"><?= nl2br(htmlspecialchars($explication['nom_explication'])); ?></div>
        <br />
        <div class="date">modifié le <?= $explication['date_explication']; ?></div>
        <br />
        <div class="text"> <?= nl2br(htmlspecialchars($explication['text_explication'])); ?></div>
        <br />
    </p>
<?php }?>
    </div>

    <div class="blocs">
    <h2>
        Les tarifs
        <br />       
    </h2>
    
   
        <?php   $petit_budget = [];
                $moyen_budget = [];
                $gros_budget = [];
                
            foreach($tarifs as $tarif){ 
                
                    switch($tarif['id_cate_prestation']){
                        case 1:
                            $petit_budget[] = $tarif;
                            break;
                        case 2:
                            $moyen_budget[] = $tarif;
                            break;
                        case 3:
                            $gros_budget[] = $tarif;
                            break;
                    }
                }
                ?>
<script language="javascript">
    
    $(function() {
  $(".titre_cate").on("click", function() {
    $(this).next(".conteiner").slideToggle(500);
    $(this)
  });
  $(".conteiner").on("click", function() {
    $(this).slideUp(500);
  });
});

</script>
                
                        <div class="titre_cate">Petit budget +</div>
                            <div class="conteiner">
                                <div class="conteiner1">
                                <?php foreach($petit_budget as $tirage){?>
                                    <div class="nom"><?= nl2br(htmlspecialchars($tirage['nom_prestation'])); ?></div>
                                    <div class="prix"><?= nl2br(htmlspecialchars($tirage['prix_prestation'])); ?> €</div>
                                    <div class="desc"><?= nl2br(htmlspecialchars($tirage['presentation_prestation'])); ?></div>
                                    <div class="panier">panier</div>
                                <?php } ?>
                                </div>
                            </div>
                
                        <div class="titre_cate">Moyen budget +</div>
                            <div class="conteiner">
                            <?php foreach($moyen_budget as $tirage){?>
                                <div class="nom"><?= nl2br(htmlspecialchars($tirage['nom_prestation'])); ?></div>
                                <div class="prix"><?= nl2br(htmlspecialchars($tirage['prix_prestation'])); ?> €</div>
                                <div class="desc"><?= nl2br(htmlspecialchars($tirage['presentation_prestation'])); ?></div>
                                <div class="panier">panier</div>
                            <?php } ?>
                            </div>
                
                        <div class="titre_cate">Gros budget +</div>
                            <div class="conteiner">
                            <?php foreach($gros_budget as $tirage){?>
                                <div class="nom"><?= nl2br(htmlspecialchars($tirage['nom_prestation'])); ?></div>
                                <div class="prix"><?= nl2br(htmlspecialchars($tirage['prix_prestation'])); ?> €</div>
                                <div class="desc"><?= nl2br(htmlspecialchars($tirage['presentation_prestation'])); ?></div>
                                <div class="panier">panier</div>
                            <?php } ?>
                            </div>
    </div>
            
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>