<html>
<head>

</head>
<body>
        
<?php
 
        $searchfor = $_REQUEST['Application'];
        $c_application=  $searchfor;
        global $c_application, $p_cate,$c_name,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr,$matches,$raj,$found,$sound;
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
                $c_dfb = $_REQUEST['Dateofbirth'];
                $p_phno = $_REQUEST['PhoneNumber'];
                $p_cate = $_REQUEST['gmail'];
                $p_radr = $_REQUEST['radress'];
                
                global $c_application, $c_name,$c_lname,$c_dfb, $p_phno,$p_radr, $p_cate,$buffer,$ftp,$patterns;;
                
                        $buffer=$c_application."|".$c_name."|".$c_lname."|".$c_dfb."|".$p_phno."|". $p_cate."|".$p_radr."|"."#".PHP_EOL;

   
                global $buffer;
   
                $ftp=fopen("form2.txt","r");
                while(! feof($ftp))
                {
	                $raj=fgets($ftp);
                        $patterns = explode("|",$raj);
               
	                if($patterns[0]==$c_application)
	                {
		                 $sound=1;
	                 }
                 }
                if($sound==0)
                {
                        function write() {
	                global $buffer;
	                $fp=fopen("form2.txt","a");
	                fwrite($fp,$buffer);
	                fclose($fp);
	                header("Location: back.html"); 
	        }
                write();
        }
                else
                {       
                        header("Location: back1.html"); 
        
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