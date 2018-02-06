<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
 </head>
 <body>
	<form action="" method="POST">
		<strong>String(Yazı):</strong><input type="text" name="palindrom_text" />
		<input type="submit" value="Translate(Çevir)" />
	</form>
 </body>
</html>

<?php 
	//devmachtam palindrom function code 
	if($_POST){	
		$string=$_POST['palindrom_text'];
		if($string){
			$count_words=strlen($string);
			for($i=0;$i<=$count_words;$i++){
				$moment=$count_words-$i;
				$translate.=$string[$moment];
			}
			print  $translate;
			
		}
	}
	
	else{}
?>
