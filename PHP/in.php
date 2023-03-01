<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
            <?php
              $value =15;
              if ($value <= 12) 
              {
                echo "you are still a child";
              }
              elseif ($value >12 && <18)
              {
                echo "You are a teenager";
              }
              elseif
              ( $value =>18)
              {
                echo " You are an adult now";
                echo "Proceed with the task";
              }
              
            ?>
        </p>
</body>
</html>