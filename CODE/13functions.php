<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  function volume($h1=30)
  {
        return(0.333*(pow(10,2)*$h1));
  }

  $result=volume();
  $result2=volume(50);
  $result3=volume(70);

  echo 
?>


</body>
</html>
