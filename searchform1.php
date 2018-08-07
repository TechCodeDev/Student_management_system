<html>
<head>

</head>
<body>
<h3> Application-view </h3>
<?php
 
 $searchfor = $_REQUEST['search'];
global $matches,$raj,$found;
$pattern=array();
$handle = fopen("form1.txt", "r") or die("Unable to open file!");



while(! feof($handle))
 {   
     $raj=fgets($handle);
     $pattern = explode("|",$raj);
     //echo($pattern[0]); 
     if($pattern[0]==$searchfor)
     {
        echo nl2br  ("Application-number :: $pattern[0]\n");
        echo nl2br  ("Name :: $pattern[1]");
        echo nl2br  (" $pattern[2]\n");
        echo nl2br  ("Date of birth :: $pattern[3]\n");
        echo nl2br  ("father:: $pattern[4]\n");
        echo nl2br  ("mother :: $pattern[5]\n");
        echo nl2br  ("phnumber :: $pattern[6]\n");
        echo nl2br  ("Category :: $pattern[7]\n");
        echo nl2br  ("Citezenship :: $pattern[8]\n");
        echo nl2br  ("Permanent Address :: $pattern[9]\n");
        echo nl2br  ("Residential Address:: $pattern[10]\n");
       
            $found=1;
     }
    }

if($found!==1)
{
    echo("not founnd");
}
 


?>





</body>
</html>