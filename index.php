<?php
  $gear = filter_input(INPUT_POST, 'gear');
  $submit = filter_input(INPUT_POST, 'submit');
if ($submit != NULL)
  switch ($gear) {
    case '1':
      echo "Můžeš jet 0 až 20 Km/h." ;
      break;
    case '2':
      echo "Můžeš jet 20 až 40 Km/h." ;
        break;
    case '3':
      echo "Můžeš jet 40 až 60 Km/h." ;
          break;
    case '4':
      echo "Můžeš jet 60 až 80 Km/h." ;
            break;
    case '5':
      echo "Můžeš jet až do rychlosti 160 Km/h." ;
        break;
    default:
      echo "Nemáš zařazeno!!" ;
      break;
  }
 ?>

<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<?php
  if ($submit == NULL) {
?>
     <form action="index.php" method="post">
       <input type="radio" name="gear" value="1" label="1"> První kvalt <br>
       <input type="radio" name="gear" value="2" label="2"> Druhej kvalt <br>
       <input type="radio" name="gear" value="3" label="3"> Třetí kvalt <br>
       <input type="radio" name="gear" value="4" label="4"> Čtvrtej kvalt <br>
       <input type="radio" name="gear" value="5" label="5"> Pátý kvalt <br>
       <input type="submit" name="submit" value="Odeslat"> <br>
    </form>
<?php } ?>

  </body>
</html>
