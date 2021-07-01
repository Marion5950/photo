
                <article class="main-article">
                <?php if (!isset ($recherche_vide)){ ?>
                    <h1>Liste des compétitions</h1>
                    <?php } ?> 

                   




<?php if(!isset ($recherche_vide)){ ?>

    <?php if (count($result) != 0) { ?>
<ul class="list-items">
<?php

 foreach ($result as $row) { ?>
 <li> <a href="<?=base_url('Ccompetition/detail/'). '/' . $row['ID']; ?>">
 <?= $row['Nom'] ;?>
</a>   <?=  $row['Date'];?>
 </li>

 <?php } ?> 
 </ul>
<?php 

 } else {
     echo "<p>Aucun résultat trouvé</p>";
 }
?>
  
                 
                  <?php } ?> 

                </article>
                
    