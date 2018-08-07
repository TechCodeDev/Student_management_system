<html>
    <head>

    </head>
        <body>

                <center ><h3 > *****************************************</h3></center>
                <center ><h3 > COLLEGE ID </h3></center>
                
                <center ><h3 > *****************************************</h3></center>
                <center>
<?php
 
                $searchfor = $_REQUEST['search'];
                $handles = fopen("form1.txt", "r") or die("Unable to open file!");
                global $patterns,$handles,$rajs,$sound;

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
        global $matches,$raj,$found;
        $pattern=array();
        $handle = fopen("form2.txt", "r") or die("Unable to open file!");
        while(! feof($handle))
        {   
                $raj=fgets($handle);
                $pattern = explode("|",$raj);
     //echo($pattern[0]); 
                 if($pattern[0]==$searchfor)
                {
                        echo nl2br  ("<h4>Application-number :: $pattern[0]\n</h4>");
                        echo nl2br  ("<h4>Name :: $pattern[1]");
                        echo nl2br  ("$pattern[2]\n</h4>");
                        echo nl2br  ("<h4>Date of birth :: $pattern[3]\n</h4>");
        //echo nl2br  ("father:: $pattern[4]\n");
        //echo nl2br  ("mother :: $pattern[5]\n");
                        echo nl2br  ("<h4>Phone-number :: $pattern[4]\n</h4>");
                        echo nl2br  ("<h4>Gmail:: $pattern[5]\n</h4>");
                        echo nl2br  ("<h4>Address :: $pattern[6]\n</h4>");
                        //echo nl2br  ("Permanent Address :: $pattern[9]\n");
                        //echo nl2br  ("Residential Address:: $pattern[9]\n");
                        $found=1;
                }
        }

            if($found!==1)
            {
                echo("not founnd");
            }
               
    }
    else
    {
            echo("not found");
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
</html>