<html>
<head>

</head>
<body>
<h3> Application-view </h3>
<?php
 
 //$searchfor = '103';
global $matches,$raj,$found;
$pattern=array();
$handle = fopen("form1.txt", "r") or die("Unable to open file!");

echo "<table style=width:100% border: 1px solid black>";
echo "<b><tr><td>" . "Application-number   ". "</td><td>" . "Name" . "</td><td>". "Date of birth" . "</td><td>"."father" . "</td><td>". "mother" . "</td><td>". "phnumber" . "</td><td>". "Category" . "</td><td>". "Citezenship" . "</td><td>"."Permanent Address" . "</td><td>"."Residential Address"."</td><td></b>"; 
while(! feof($handle))
 {   
     $raj=fgets($handle);
     $pattern = explode("|",$raj);
     //echo($pattern[0]); 
     if(is_numeric($pattern[0]))
     {
        
        echo "<tr><td>" . $pattern[0]  . "</td><td>" . $pattern[1]." ". $pattern[2]. "</td><td>".$pattern[3]. "</td><td>". $pattern[4]. "</td><td>".$pattern[5]. "</td><td>".$pattern[6]."</td><td>".$pattern[7]."</td><td>".$pattern[8]."</td><td>".$pattern[9]."</td><td>".$pattern[10]."</td><td>"; 
        //echo nl2br  ("Application-number :: $pattern[0]\n");
       // echo nl2br  ("Name :: $pattern[1]");
        //echo nl2br  (" $pattern[2]\n");
        //echo nl2br  ("Date of birth :: $pattern[3]\n");
        //echo nl2br  ("father:: $pattern[4]\n");
        //echo nl2br  ("mother :: $pattern[5]\n");
        //echo nl2br  ("phnumber :: $pattern[6]\n");
        //echo nl2br  ("Category :: $pattern[7]\n");
        //echo nl2br  ("Citezenship :: $pattern[8]\n");
        //echo nl2br  ("Permanent Address :: $pattern[9]\n");
        //echo nl2br  ("Residential Address:: $pattern[10]\n");
        
            $found=1;
     }
    }
    echo "</table>";


 


?>





</body>
</html>