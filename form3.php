
<html>
<head>

</head>
<body>
<?php
 
        $searchfor = $_REQUEST['Application'];
        $c_application=  $searchfor;
        global $matches,$raj,$found;
        
        global $c_application, $p_cate,$c_name,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr,$p_addr;
        $pattern=array();
        $handle = fopen("form1.txt", "r") or die("Unable to open file!");



        while(! feof($handle))
        {   
                 $raj=fgets($handle);
                $pattern = explode("|",$raj);

                if($pattern[0]==$searchfor)
                {
                        $found=1;
                }
        }
if($found==1)
{
    $c_application = $_REQUEST['Application'];
    $c_name = $_REQUEST['firstname'];
        $c_lname = $_REQUEST['lastname'];
        $c_dfb = $_REQUEST['branch'];
        $p_phno = $_REQUEST['usn'];
        $p_cate = $_REQUEST['PhoneNumber'];
        $p_radr = $_REQUEST['location'];
        $p_addr=$_REQUEST["radress"];
                   
                   
   global $buffer;
   global $c_application, $c_name,$c_lname,$c_dfb, $p_phno,$p_radr, $p_cate,$p_addr,$sound,$patterns;
   $buffer=$c_application."|".$c_name."|".$c_lname."|".$c_dfb."|".$p_phno."|". $p_cate."|".$p_radr."|". $p_addr."|"."#".PHP_EOL;

   $ftp=fopen("form3.txt","r");
        while(! feof($ftp))
        {
	        $raj=fgets($ftp);
                $patterns = explode("|",$raj);
                //echo($pattern[0]); 
	         if($patterns[0]==$c_application)
	        {
		         $sound=1;
	        }
        }
        if($sound==0)
        {
                function write() {
	                global $buffer;
	                $fp=fopen("form3.txt","a");
	                fwrite($fp,$buffer);
	                fclose($fp);
                        header("Location: back.html"); 
	

	//header("Location: form1next.html");   
        }
         write();
        }
        else
        {       header("Location: back1.html");
        
        }
}

if($found!==1)
{
        $message = "first you fill application";
        
        echo "<script type='text/javascript'>alert('$message');</script>";
}
 


?>





</body>
</html>