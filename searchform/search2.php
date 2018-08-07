 <html>
<head>

</head>
<body>
<?php
global $buffer;
global $c_search,$found,$code;
global $filecontent;
$searchfor = $_REQUEST['search'];
$contents = fopen("csas.txt", "r") or die("Unable to open file!");
while(! feof($contents))
{
    //echo(fgets($contents));
    $line=fgets($contents);
    $hai=explode('|',$line);
    echo($hai);
    $var1=$hai[0];
    //$filecontent .= fgets($contents);
    print($var1);
    $var1=$hai[1];
    print($var1);
    
}
//while(! feof($contents))
//{
  //$line=gets();
  //$hai=explode('|',$line);
//}
//echo($hai);
//$keywords = preg_split("/\|/",$filecontent);
//$i=0;
//while($filecontent[$i]!=='|')
//{    $hai.=$filecontent[$i];
    //$i++;
//}
 //$keywords = preg_split("/\|/",$filecontent);
//echo($hai);

//echo nl2br ("the file content is \n $filecontent");
// escape special characters in the query
//$pattern = preg_quote($searchfor);
// finalise the regular expression, matching the whole line
//$pattern = "/^.*$pattern.*#/m";
//matching the pattern in the file 
//$pattern="/^[0-9].*$pattern.*/";
//if (preg_match('/^[0-9]*$/', $filecontent))
//$success = preg_match($code, $filecontent, $match);
//$success = preg_match($pattern, $filecontent, $match);
//if ($success) {
 // echo "Match: ".$match[0]."<br />"; 

  //$keywords = preg_split("/\|/",$match[0] );
  //print_r($keywords);
  //echo nl2br  ("Application-number :: $keywords[0]\n");
  //echo nl2br  ("Name :: $keywords[1]\n");
  //echo nl2br  ("last :: $keywords[2]\n");
  //echo nl2br  ("Date of birth :: $keywords[3]\n");
  //echo nl2br  ("father:: $keywords[4]\n");
  //echo nl2br  ("mother :: $keywords[5]\n");
  //echo nl2br  ("phnumber :: $keywords[6]\n");
  //echo nl2br  ("Category :: $keywords[7]\n");
  //echo nl2br  ("Citezenship :: $keywords[8]\n");
  //echo nl2br  ("Permanent Address :: $keywords[9]\n");
  //echo nl2br  ("Residential Address:: $keywords[9]\n");
 
//}
  //else{
    //echo "match not found";
  //}}
  //else
  //{
    //echo"invalid input";  }
?>
</body>
  </html>