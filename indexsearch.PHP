<html>
<head>

</head>
<body><center><b>
<h2> Application-view </h2>
<?php
 
    $searchfor = $_REQUEST['search'];
    global $matches,$raj,$found,$indexs,$patter, $searchfor,$buffer,$fp;
    $pattern=array();

        $file=fopen("form1.txt","r");
        $indexs=fopen("index.txt","w+");
        while(!feof($file))
        {
          if($file)
           {
                    $address=ftell($file);
                    $line=fgets($file);
                    $patter=explode('|',$line);
                    $var1=$patter[0];
            }
           
            $buffer=$var1."|".$address."|"."#".PHP_EOL;
            fwrite($indexs,$buffer);
        }
        //$buffer=$var1."|".$address."#".PHP_EOL;
        
        $file=fopen("index.txt","r");
        $fp=fopen("form1.txt","r");
		while(!feof($file))
		{
			$line=fgets($file);
			$pat=explode('|',$line);
	        if($pat[0]== $searchfor)
			{
                //echo ("$pat[0]\n");
                //echo("$pat[1]\n");
            $found=1;
            $file=fopen("form1.txt","r") or die("unable to open file");
            fseek($file,$pat[1]);
            $line=fgets($file);
            $pattern=explode('|',$line);
            echo nl2br  ("APPLICATION-NUMBER :: $pattern[0]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("NAME:: $pattern[1]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("LAST :: $pattern[2]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("DATE-OF-BIRTH :: $pattern[3]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("FATHER:: $pattern[4]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("MOTHER :: $pattern[5]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("PHONE-NUMBER :: $pattern[6]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("CATEGORY :: $pattern[7]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  (" CITEZENSHIP :: $pattern[8]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("PERMANENT-ADDRESS :: $pattern[9]\n");
            echo nl2br  ("                          \n         ");
            echo nl2br  ("RESIDENTIAL-ADDRESS:: $pattern[9]\n");
            }
        }
      
if($found==0)
{
   
    echo(" Not found");
}
//else
//{
    	
  //  echo("  founnd");
    //$data = fgets($fp, $pat[1]);
//} 


?>
</b>
</center>




</body>
</html>