<?php
$data = file_get_contents('./input.txt', true);
$files = explode("\n", $data);
foreach ($files as $key => $value) {
	$file_name=explode(".",$value);
	if($file_name[1]!=""){
		$file_name2=explode("_",$value);
		if($file_name2[1]==""){
			echo $file_name2[0]."<br>\n";
		} else {
			echo $file_name2[1]."<br>\n";
		}	
	} 
}
?>