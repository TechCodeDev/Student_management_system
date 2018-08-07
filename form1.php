<html>
<head>


</head>
<body>
<?php
	function input()
	 {
		
		global $buffer, $c_application, $p_cate,$c_name,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr,$found;
		$c_application = $_REQUEST['Application'];
 		$c_name = $_REQUEST['firstname'];
	 	$c_lname = $_REQUEST['lastname'];
	 	$c_dfb = $_REQUEST['Dateofbirth'];
	 	$c_fat = $_REQUEST['father'];
	 	$p_mot = $_REQUEST['mother'];
	 	$p_phno = $_REQUEST['PhoneNumber'];
	 	$p_cate = $_REQUEST['Category'];
	 	$p_citz = $_REQUEST['citezenship'];
		$p_padr = $_REQUEST['padress'];
	 	$p_radr = $_REQUEST['radress'];
	}

	input();

	function packs()
	{
		global $c_application, $c_name,$c_lname,$c_dfb, $c_fat,$p_mot,$p_phno,$p_citz,$p_padr,$p_radr, $p_cate,$buffer;
		$buffer=$c_application."|".$c_name."|".$c_lname."|".$c_dfb."|".$c_fat."|".$p_mot."|".$p_phno."|". $p_cate."|".$p_citz."|".$p_padr."|".$p_radr."|"."#".PHP_EOL;
	}
	packs();

	$handle=fopen("form1.txt","r");
	while(! feof($handle))
	{
			$raj=fgets($handle);
     		$pattern = explode("|",$raj);
	 		if($pattern[0]==$c_application)
	 		{
		 		$found=1;
	 		}	
	}
	if($found==0)
	{
		function write() {
		global $buffer;
	 	$fp=fopen("form1.txt","a");
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

?>
</body>
</html>