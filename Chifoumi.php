<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>my site</title>
    </head>
    <body>
      <form method="get" action="Chifoumi.php" enctype="encodage">
        <p>
          Choississez votre coup:
          <a href="?coup=0"><img src="pierre.png"></a>
          <a href="?coup=1"><img src="feuille.png"></a>
          <a href="?coup=2"><img src="ciseaux.png"></a>
        </p>
      </form>
      <?php
        if(isset($_GET['coup'])){
          $coup=$_GET['coup'];
          $coup2=rand(0,2);
          if ($coup==0){
            echo "<img src=\"pierre.png\">";
          }
          if ($coup==1){
            echo "<img src=\"feuille.png\">";
          }
          if ($coup==2){
            echo "<img src=\"ciseaux.png\">";
          }
          if ($coup2==0){
            echo "<img src=\"pierre.png\">";
          }
          if ($coup2==1){
            echo "<img src=\"feuille.png\">";
          }
          if ($coup2==2){
            echo "<img src=\"ciseaux.png\">";
          }
          if (($coup==0 && $coup2==2)||($coup==1 && $coup2==0)||($coup==2 && $coup2==1)){
            echo "GAGNE";
          }
          else {
            if($coup==$coup2){
              echo "NUL";
            }
            else{
              echo "PERDU";
            }
          }
        }
      ?>
    </body>
</html>