<?php
$data = file_get_contents('./input.txt', true);
$files = explode("\n", $data);
foreach ($files as $key => $value) {
  	if (preg_match('/[A-Z](.*)/', $value, $match_patern))
    {
        echo  $match_patern[0]."\n";
    }
}
?>