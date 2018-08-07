<html>
<head>

</head>
<body>
<?php
 
 $searchfor = $_REQUEST['search'];
global $matches,$pattern,$raj;

$handle = fopen("csas.txt", "r") or die("Unable to open file!");




$raj=fgets($handle);
$pattern = array();
//$matches=array();
if(is_numeric($searchfor)==$searchfor)
{if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer,  $searchfor) !== False)
            $matches = $buffer;
         
    }
    
    fclose($handle);
}}
else{echo("not found");}
//$raj=fgets($handle);
//echo($raj);
//show results:
//print_r($matches);
$pattern = preg_split("/\|/",$matches);
if($pattern[0]==$searchfor){
echo nl2br  ("Application-number :: $pattern[0]\n");
echo nl2br  ("Name :: $pattern[1]\n");
  echo nl2br  ("last :: $pattern[2]\n");
  echo nl2br  ("Date of birth :: $pattern[3]\n");
  echo nl2br  ("father:: $pattern[4]\n");
  echo nl2br  ("mother :: $pattern[5]\n");
  echo nl2br  ("phnumber :: $pattern[6]\n");
  echo nl2br  ("Category :: $pattern[7]\n");
  echo nl2br  ("Citezenship :: $pattern[8]\n");
  echo nl2br  ("Permanent Address :: $pattern[9]\n");
  echo nl2br  ("Residential Address:: $pattern[9]\n");}else{echo("not found");}
  //echo nl2br  ("Application-number :: $keywords[0]\n");
  //for($i=0;$i<(sizeof($matches));$i++)
  //{
    //if($matches[$i]!=='|')
  //  {  
       // $pattern=$matches[$i];}
      //else{
      //    break;
    //}
    //echo("$pattern");
    
   // while($matches!='#')
    //{
     //   if($matches=='|')
       // {
         //   $matches='\0';
           // $matches++;
        //}
    //}

        
  //}
?>





</body>
</html>