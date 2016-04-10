<!DOCTYPE html>
<html>
    <head>
        <title>Mini-tchat PHP </title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="CSS/styles.css" />
    </head>
    <body>
        <?php include("entete.php");?>

         
    
       <form action="tchat-Post.php" method="post">
        <p>
        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

        <input type="submit" value="Envoyer" />
  </p>
    </form>

    <?php
    try{
      //conection database
      $bdd= new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    }catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT pseudo,message FROM tchat ORDER BY ID DESC LIMIT 0, 10');
    while ($donnees = $reponse->fetch())
  {
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
  }
 $reponse->closeCursor();
    ?>


   

    <?php include("pied_de_page.php"); ?>

    </body>
</html>