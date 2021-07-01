
                <article class="main-article">
                    <h1><?php echo $heading; ?></h1>

<p><?php echo $result[0]['Nom']?></p>
<p>Localisation : <?php echo $result[0]['Titre']?></p>
<p>Volume Max : <?php echo $result[0]['Date']?></p>
<p><b>Date de la compétition : </b><?php echo $result[0]['Date']?></p>

<p><b>Le classement final : </b></p>
<p><?php echo $result[0]['ID'] . '/' . $row['Titre']?></p>



                </article>
                
         