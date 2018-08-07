<html>
<head>

</head>
<body>
                <center ><h3 > *****************************************</h3></center>
                <center ><h3 > Fee recipt </h3></center>
                
                <center ><h3 > *****************************************</h3></center>
                <center>
<?php
         $handles = fopen("form1.txt", "r") or die("Unable to open file!");
         global $patterns,$handles,$rajs,$sound,$totala;
         $searchfor = $_REQUEST['Application'];
        /* $c_name = $_REQUEST['firstname'];
        $c_lname = $_REQUEST['lastname'];
        $c_dfb = $_REQUEST['Dateofbirth'];
        $p_phno = $_REQUEST['PhoneNumber'];*/
        $p_citz = $_REQUEST['citezenship'];
         $c_application=$searchfor;
         while(! feof($handles))
         {   
                 $rajs=fgets($handles);
                 $patterns = explode("|",$rajs);
//echo($pattern[0]); 
                 if($patterns[0]==$searchfor)
                 {
                    
                     $sound=1;
                 }
         }
        
        if($sound==1)
        {


                $handles1 = fopen("fee.txt", "r") or die("Unable to open file!");
                global $patterns1,$handles1,$rajs1,$sound1;
                //$searchfor = $_REQUEST['Application'];
                //$c_application=$searchfor;
                while(! feof($handles1))
                {   
                        $rajs1=fgets($handles1);
                        $patterns1 = explode("|",$rajs1);
       //echo($pattern[0]); 
                        if($patterns1[0]==$searchfor)
                        {
                           
                            $sound1=1;
                        }
                }

                 {       
                         if($sound1==0)
                        {
                                        global $c_application,$patterns,$pattern,$handles,$handle,$found,$sound,$f,$totala;
                                        function input()
                                        {
                                                global $buffer,$f;
                                                global $c_application, $p_cate,$c_name,$f1,$f,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr,$found;
                                                $c_application = $_REQUEST['Application'];
                                             /*   $c_name = $_REQUEST['firstname'];
                                                $c_lname = $_REQUEST['lastname'];
                                                $c_dfb = $_REQUEST['Dateofbirth'];
                                                $p_phno = $_REQUEST['PhoneNumber'];*/
                                                $p_citz = $_REQUEST['citezenship'];
                                                echo nl2br  ("<h4>Application-number :: $c_application\n</h4>");
                                         /*        echo nl2br  ("<h4>Name ::$  $c_name");
                                                 echo nl2br  ("$c_lname\n</h4>");
                                                 echo nl2br  ("<h4>Date of payment :: $c_dfb\n</h4>");
                                                 echo nl2br  ("<h4>Phone-number :: $p_phno\n</h4>");
                                                 */
                                                $f1=75000;
                                                $h=-1;
                                                $f=$f1-$p_citz;
                                                if($p_citz>$f1)
                                                 {
                                                         $p=$f*$h;
                                                echo nl2br ("<h4>extra amount $p will  consider as college donation<h4>");
                                                 echo nl2br  ("<h4>balance-amount :: 0\n</h4>");
                                                 echo nl2br  ("<h4>Amount-paid(present paid amount) :: $p_citz\n</h4>");
                                                 }
                                                 else
                                                 {
                                                        echo nl2br  ("<h4>balance-amount :: $f\n</h4>");
                                                        echo nl2br  ("<h4>Amount-paid(present paid amount) :: $p_citz\n</h4>");    
                                                 }
                                        }input();
                        
                                        function packs()
                                        {
                                                        global $buffer;
                                                        global $c_application, $c_name,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr, $p_cate;
                                                        $buffer=$c_application."|".$p_citz."|".""."#".PHP_EOL;
                                        }packs();
                        
                                        function write()
                                        {
		                                global $buffer;
	 	                                $fp=fopen("fee.txt","a");
	 	                                fwrite($fp,$buffer);
	 	                                fclose($fp);
                                               
                                                 

	                                }write();
                         }
                        else
                        {
                                global $pattern2,$a_number,$fee,$p_citz,$arep,$are,$totala;
                                 $a_number=$_REQUEST['Application'];
                                 $lines2=file('fee.txt');
                                $handle2 = fopen("fee.txt", "r") or die("Unable to open file!");
                                //$del="$$";

                                 while(! feof($handle2))
                                {   
                                         $raj2=fgets($handle2);
                                        $pattern2 = explode("|",$raj2);
                                        if($pattern2[0]==$a_number)
                                        {   
                                                echo nl2br  ("<h4>Application-number :: $pattern2[0]\n</h4>");
                                             /*   echo nl2br  ("<h4>Name :: $pattern2[1]");
                                                echo nl2br  ("$pattern2[2]\n</h4>");
                                                echo nl2br  ("<h4>Date of payment :: $pattern2[3]\n</h4>");
                                                echo nl2br  ("<h4>Phone-number :: $pattern2[4]\n</h4>");*/
                                                $are=75000;
                                                $l=-1;
                                                $arep=$are-$pattern2[1];
                                                
                                                $totala=$are-$arep;
                                                if($totala>$are)
                                                {
                                                        $o=$arep*$l;
                                                        echo nl2br ("<h4>extra amount $o will  consider as college donation<h4>");
                                                        echo nl2br  ("<h4>balance-amount ::0 </h4>");
                                                echo nl2br  ("<h4>total Amount-paid(Already paid amount) ::  $totala\n</h4>");
                                                echo nl2br  ("<h4>Amount-paid (present paid amount)::  $p_citz\n</h4>");
                                                }
                                                else
                                                {echo nl2br  ("<h4>balance-amount ::$arep </h4>");
                                                        echo nl2br  ("<h4>total Amount-paid(Already paid amount) ::  $totala\n</h4>");
                                                echo nl2br  ("<h4>Amount-paid (present paid amount)::  $p_citz\n</h4>");

                                                }
                                
                                
                                
                                        $lin=$pattern2[1];
                                           
                                           $fee=$lin+$p_citz;
                                           
                                          //echo($lin);
                                           //$fee1=$lin;
                                           //$fee+=$fee1;
                                           //."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
                                           $str=file_get_contents('fee.txt');
                                           $str=str_replace("$lin","$fee",$str);
                                           file_put_contents('fee.txt',$str);
                                //echo("data is deleted");
                                        }
                                }

                        }       
                }
        }
        else
                {
                        
                        
                        echo("<b>Enter correct application number</b>");
                }

   

?>
<center ><h3 > *****************************************</h3></center>

<button onclick="myFunction()">PRINT</button>

<script>
function myFunction() {
    window.print();
}
</script>

</center>


<center ><h3 > *****************************************</h3></center>
</body>
</html