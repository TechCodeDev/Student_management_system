<?php
global $pattern,$a_number,$found;
$a_number=$_REQUEST['search'];
$line=file('form1.txt');
$handle = fopen("form1.txt", "r") or die("Unable to open file!");
$del="$$";
//echo($line[0]);
//$pat=$line[0];
//echo($pat[0]);
//$pattern = explode("|",$line[0]);
while(! feof($handle))
{    $raj=fgets($handle);
    $pattern = explode("|",$raj);
        if($pattern[0]==$a_number)
        {   //echo($pattern[0]);
            $lines=$pattern[0];//."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
            $str=file_get_contents('form1.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('form1.txt',$str);
            echo("<br></br><br></br><center><b>data is deleted</b></center>");
            $found=1;
        }
       
}   
if($found==0)
{
    echo("<b><br><br><center>enter correct applictaion number<center></br></br></b>");
}

//$a_number=$_REQUEST['search'];
$line=file('form2.txt');
$handle = fopen("form2.txt", "r") or die("Unable to open file!");
$del="$$";
//echo($line[0]);
//$pat=$line[0];
//echo($pat[0]);
//$pattern = explode("|",$line[0]);
while(! feof($handle))
{    $raj=fgets($handle);
    $pattern = explode("|",$raj);
        if($pattern[0]==$a_number)
        {   //echo($pattern[0]);
            $lines=$pattern[0];//."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
            $str=file_get_contents('form2.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('form2.txt',$str);
           // echo("data is deleted");

        }
       
} 

$line=file('form3.txt');
$handle = fopen("form3.txt", "r") or die("Unable to open file!");
$del="$$";
//echo($line[0]);
//$pat=$line[0];
//echo($pat[0]);
//$pattern = explode("|",$line[0]);
while(! feof($handle))
{    $raj=fgets($handle);
    $pattern = explode("|",$raj);
        if($pattern[0]==$a_number)
        {   //echo($pattern[0]);
            $lines=$pattern[0];//."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
            $str=file_get_contents('form3.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('form3.txt',$str);
           // echo("data is deleted");

        }
       
} 

$line=file('form4.txt');
$handle = fopen("form4.txt", "r") or die("Unable to open file!");
$del="$$";
//echo($line[0]);
//$pat=$line[0];
//echo($pat[0]);
//$pattern = explode("|",$line[0]);
while(! feof($handle))
{    $raj=fgets($handle);
    $pattern = explode("|",$raj);
        if($pattern[0]==$a_number)
        {   //echo($pattern[0]);
            $lines=$pattern[0];//."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
            $str=file_get_contents('form4.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('form4.txt',$str);
           // echo("data is deleted");

        }
       
} 


$line=file('fee.txt');
$handle = fopen("fee.txt", "r") or die("Unable to open file!");
$del="$$";
//echo($line[0]);s
//$pat=$line[0];
//echo($pat[0]);
//$pattern = explode("|",$line[0]);
while(! feof($handle))
{    $raj=fgets($handle);
    $pattern = explode("|",$raj);
        if($pattern[0]==$a_number)
        {   //echo($pattern[0]);
            $lines=$pattern[0];//."|".$pattern[1]."|".$pattern[2]."|".$pattern[3]."|".$pattern[4]."|".$pattern[5]."|".$pattern[6]."|".$pattern[7]."|".$pattern[8]."|".$pattern[9]."|".$pattern[10]."#".PHP_EOL;    
            $str=file_get_contents('fee.txt');
            $str=str_replace("$lines","$del",$str);
            file_put_contents('fee.txt',$str);
           // echo("data is deleted");

        }
       
} 

?>