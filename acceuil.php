<!DOCTYPE html>
<html>
    <head>
        <title>Tests PHP </title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php include("entete.php");?>
         <?php include("menus.php");?>

            <div id="corps">
        <h1>Mon  site en PHP</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
        </p>
        <p> Contenue variable: <?php $ageVisiteur=23;
            echo $ageVisiteur;
            ?></p>
            <p> Calcule : <?php $Calcule=2+3;
             echo $Calcule;?>
         </p>

         <p> <?php $num = 8;
         if($num<12){
            echo "yo le visiteur a mois de $num";
         } ?>
          </p>
        
          <p>Boucle:<br/> <?php $num= 1;
          while ( $num <= 3) {
              echo " string <br/>";
              $num++;
          }

          for ($i=0; $i < 3; $i++) { 
              echo $i;
          }

          ?></p>

          <p>Fonction <br/>
           <?php 
           function bonjour($nom){
            echo "bonjour $nom";
           }
           bonjour('kevin');
          ?></p>

          <p>Tableau:
          <?php
// On crée notre array $prenoms
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
    for ($numero = 0; $numero < 5; $numero++)
        {
        echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
        }
    ?></p>

    <a href="yo.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !"</a>

    <form method="post" action="cible.php">
        <p>Formulaire:
         <input type="text" name="prenom" />
         <select name="choix">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
</select>
         <input type= "submit" value="Valider"/>
        </p>

    </form>
    <a href="jeuxvideo.php">Jeux video !"</a>

    </div>

    <?php include("pied_de_page.php"); ?>

    </body>
</html>