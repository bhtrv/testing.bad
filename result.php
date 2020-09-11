<?php
   $correct = 0;
   $wrong = 0;
      if ($_POST["q1"] == "a"){$correct++;} else {$wrong++;}
      if ($_POST["q2"] == "b"){$correct++;} else {$wrong++;}
      if ($_POST["q3"] == "c"){$correct++;} else {$wrong++;}
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <p>Правильных ответов: <?php echo $correct; ?></p>
	<p>Неправильных ответов: <?php echo $wrong; ?></p>
</body> 
</html>