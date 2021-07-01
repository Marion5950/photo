<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="<?php echo base_url("css/styles.css")?> ">
        <script>
            // 100vh chrome mobile
            // https://css-tricks.com/the-trick-to-viewport-units-on-mobile/
            // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
            let vh = window.innerHeight * 0.01;
            // Then we set the value in the --vh custom property to the root of the document
            document.documentElement.style.setProperty('--vh', `${vh}px`);

            // We listen to the resize event
            window.addEventListener('resize', () => {
                // We execute the same script as before
                let vh = window.innerHeight * 0.01;
                document.documentElement.style.setProperty('--vh', `${vh}px`);
            });
        </script>

<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("/apple-touch-icon.png")?>">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/le-relais/site.webmanifest">
        <link rel="mask-icon" href="/le-relais/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#00aba9">
        <meta name="theme-color" content="#ffffff">
    </head>

    <body>
        <div id="conteneur">
            <header>
                <h1>Concours photographique</h1>
            </header>

            <nav>
                <ul>
                    <li><a href="<?php echo base_url ()?>">Accueil</a></li>
                    <li><a href="<?php echo base_url ("Cconteneur/index")?>">Les compétitions</a></li>
                </ul>
            </nav>
            <section>
            <?php echo $contenu ?>

            </section>

<footer>
    <p>Copyright - Tous droits réservés - 
        <a href="#">Contact</a></p>
</footer>
</div>    
</body>
</html>







