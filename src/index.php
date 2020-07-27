<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Em um dia, que série melhor representa você?</title>
</head>
<body>
  <?php     
     include '_arrays.php';    

    function array_has_dupes($array) {
      return count($array) !== count(array_unique($array));
    }   

    if (!empty($_POST)) {
      $resultado = array_count_values($ansArr);

      if (array_has_dupes($resultado)){       
        foreach($ansArr as $key => $value) {
          $alternativas[$value] += $key;
        }
      } else {
        $alternativas = $resultado;
      }    
      
      echo '<h1>'. $series[array_search(max($alternativas), $alternativas)]. '</h1>';
    } else {
        echo '<h1>Em um dia, que série melhor representa você?</h1>';
    }
  ?>
  <form action="index.php" method="POST">
    <?php 
      foreach($questionArr as $key => $question) {
        echo '<div>';
        echo '<label>'.$question['question'].'</label>';
        shuffle($question['answers']);

        foreach($question['answers'] as $answer){
          echo '<p><span><input type="radio" required value="'.$answer['value'].'" name="'.$key.'"/>'.$answer['answer'].'</span></p>';
        }

        echo '</div> <br>';
      }
    ?>

    <input type="submit">
  </form>
</body>
</html>