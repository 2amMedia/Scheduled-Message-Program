<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<?php
   $dayofweek = date("w");
   
   switch ($dayofweek) {
    case 1:
     echo "Today is Monday!";
     break;
    case 2:
     echo "Today is Tuesday!";
     break;     
    case 3:
     echo "Today is Wednesday!";
     break;
    case 4:
     echo "Today is Thursday!";
     break;
    case 5:
     echo "Today is Friday!";
     break;     
    case 6:
     echo "Today is Saturday!";
     break;
    case 0:
     echo "Today is Sunday!";
     break;     
   default; 
     echo "Error!";
     break;
   }
?>
</body>
</html>